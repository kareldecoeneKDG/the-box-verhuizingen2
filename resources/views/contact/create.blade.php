@extends('layouts.layout')

@section('content')

    <?php
    session_start();
    ?>

    <section class="welcome">
        <h1>Contact</h1>
        <p>
            Voor vragen bent u op deze pagina aan het juiste adres. Vraagt u zich af of wij een bepaald soort afval afvoeren, of we tot bij u thuis komen voor een verhuis? Twijfel dan niet om onderstaand contactformulier in te vullen. Na het invullen nemen wij zo snel mogelijk contact met u op.
            Indien u een prijsofferte wenst voor uw afvoerklus, gelieve dan hieronder in het keuzemenu te kiezen voor offerte.
        </p>

        @if(session()->has('message'))
            <p>
                <strong> {{ session()->get('message') }} </strong>
            </p>
        @endif

        <p>
            <strong>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br/>
                @endforeach
            </strong>
        </p>
    </section>

    <div class="formArea">
        <div class="toggle">
            <a href="contact" class="bigButton" id="activeToggle">Contact</a>
            <a href="offerte" class="bigButton" id="notActiveToggle">Offerte</a>
        </div>

        <div class="form">
            <form method="POST" action="/contact">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Naam" value="{{ old('name') }}" class="form-control">
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                    <input type="text" name="telephone" placeholder="Telefoon" value="{{ old('telephone') }}" class="form-control">
                    <input type="text" name="subject" placeholder="Onderwerp" value="{{ old('subject') }}" class="form-control">
                    <textarea type="text" name="message" placeholder="Boodschap" value="{{ old('message') }}" class="form-control"></textarea>
                </div>

                @csrf

                <input type="submit" name="submit" value="Verzend" class="button" id="submitContact">
            </form>
        </div>
    </div>

@endsection