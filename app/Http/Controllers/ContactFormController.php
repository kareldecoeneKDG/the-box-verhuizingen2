<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\FormRequest;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        Mail::to('thebox.info2020@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact');
    }
}
