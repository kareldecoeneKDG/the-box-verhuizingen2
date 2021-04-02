@component('mail::message')
# The Box Offerte

<strong>Name</strong> {{ $data['name'] }} <br>
<strong>Email</strong> {{ $data['email'] }} <br>
<strong>Telephone</strong> {{ $data['telephone'] }} <br>

<strong>Street</strong> {{ $data['street'] }} <br>
<strong>Number</strong> {{ $data['number'] }} <br>
<strong>Town</strong> {{ $data['town'] }} <br>
<strong>Postalcode</strong> {{ $data['postalcode'] }} <br>

<strong>Materials</strong> {{ $data['materials'] }} <br>
<strong>Volume</strong> {{ $data['volume'] }} <br><br>

<strong>Message</strong>

{{ $data['message'] }}

@endcomponent
