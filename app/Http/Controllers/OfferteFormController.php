<?php

namespace App\Http\Controllers;

use App\Mail\OfferteFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OfferteFormController extends Controller
{
    public function create()
    {
        return view('offerte.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',

            'street' => 'required',
            'number' => 'required',
            'town' => 'required',
            'postalcode' => 'required',

            'materials' => 'required',
            'volume' => 'required',

            'message' => 'required',
        ]);

        Mail::to('thebox.info2020@gmail.com')->send(new OfferteFormMail($data));

        return redirect('offerte')->with('message', 'Bedankt voor uw bericht! We nemen zo snel mogelijk contact met u op.');
    }
}
