@extends('layouts.layout')

@section('content')

<?php
session_start();
?>

<section class="welcome">
    <h1>Prijsofferte</h1>
    <p>
        Voor een prijsofferte voor uw afvoerklus kan u steeds onderstaand formulier invullen. Op basis van uw vracht en zijn omschrijving zullen wij een prijsschatting doen. Wij nemen dan zo snel mogelijk contact met u op om verder af te spreken wanneer en hoe we deze klus voor u zullen klaren.
    </p>

    @if(session()->has('message'))
        <p>
            <strong> {{ session()->get('message') }} </strong>
        </p>
    @endif

    <p>
        <strong>
            @foreach ($errors->all() as $error)
            {{ $error }}<br />
            @endforeach
        </strong>
    </p>
</section>

<div class="formArea">
    <div class="toggle">
        <a href="contact" class="bigButton" id="notActiveToggleOfferte">Contact</a>
        <a href="offerte" class="bigButton" id="activeToggleOfferte">Offerte</a>
    </div>

    <div class="form">
        <form method="POST" action="/offerte">
            <div class="inputs">

                <h3>Contactgegevens</h3>

                <input type="text" name="name" placeholder="Naam" value="{{ old('name') }}" class="form-control">
                <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                <input type="text" name="telephone" placeholder="Telefoon" value="{{ old('telephone') }}" class="form-control">


                <h3>Woonplaats</h3>

                <input type="text" name="street" placeholder="Straat" value="{{ old('street') }}" class="form-control">
                <input type="text" name="number" placeholder="Nummer" value="{{ old('number') }}" class="form-control">
                <input type="text" name="town" placeholder="Gemeente" value="{{ old('town') }}" class="form-control">
                <input type="text" name="postalcode" placeholder="Postcode" value="{{ old('postalcode') }}" class="form-control">


                <div class="wrapper">
                    <div class="cloneme">
                        <div name="vracht-1" id="vracht-1">
                            <div id="vrachtTitle" name="vrachttitle-1">
                                <h3>Vracht</h3>
                            </div>

                            <input type="text" name="materials" placeholder="Materialen" value="{{ old('materials') }}" class="form-control">
                            <input type="text" name="volume" placeholder="Volume m³" value="{{ old('volume') }}" class="form-control">
                        </div>
                    </div>
                </div>

                <h3 id="extraInfo">Extra info</h3>

                <textarea type="text" name="message" placeholder="Boodschap" value="{{ old('message') }}" class="form-control"></textarea>
            </div>

            @csrf

            <input type="submit" name="submit" value="Verzend" class="button" id="submitContact">
        </form>
    </div>
</div>

@endsection