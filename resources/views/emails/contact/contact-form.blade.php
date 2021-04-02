@component('mail::message')
# The Box Contact

<strong>Name</strong> {{ $data['name'] }} <br>
<strong>Email</strong> {{ $data['email'] }} <br>
<strong>Telephone</strong> {{ $data['telephone'] }} <br>
<strong>Subject</strong> {{ $data['subject'] }} <br><br>
<strong>Message</strong>

{{ $data['message'] }}
@endcomponent
