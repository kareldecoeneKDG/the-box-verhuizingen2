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
</section>

<?php if (isset($_SESSION['offerteMailSend'])) : ?>
    <p class="message">
        <b><?php echo $_SESSION['offerteMailSend']; ?></b>
    </p>
<?php endif; ?>

<?php if (isset($_SESSION['offerteEmptyFields'])) : ?>
    <p class="message">
        <b><?php echo $_SESSION['offerteEmptyFields']; ?></b>
    </p>
<?php endif; ?>

<?php if (isset($_SESSION['offerteError'])) : ?>
    <p class="message">
        <b><?php echo $_SESSION['offerteError']; ?></b>
    </p>
<?php endif; ?>

<div class="formArea">
    <div class="toggle">
        <a href="contact" class="bigButton" id="notActiveToggleOfferte">Contact</a>
        <a href="offerte" class="bigButton" id="activeToggleOfferte">Offerte</a>
    </div>

    <div class="form">
        <form method="post" action="actions/offerteAction.php">
            <div class="inputs">

                <h3>Contactgegevens</h3>

                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="name" placeholder="Naam">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="telephone" placeholder="Telefoon">


                <h3>Woonplaats</h3>

                <input type="text" name="street" placeholder="Straat">
                <input type="text" name="number" placeholder="Nummer">
                <input type="text" name="town" placeholder="Gemeente">
                <input type="text" name="postalcode" placeholder="Postcode">


                <div class="wrapper">
                    <div class="cloneme">
                        <div name="vracht-1" id="vracht-1">
                            <div id="vrachtTitle" name="vrachttitle-1">
                                <h3>Vracht</h3>
                            </div>

                            <input type="text" name="materials" placeholder="Materialen">

                            <input type="text" name="volume" placeholder="Volume m³">
                        </div>
                    </div>
                </div>

                <h3 id="extraInfo">Extra info</h3>

                <textarea type="text" name="message" placeholder="Boodschap"></textarea>
            </div>

            <input type="submit" name="submit" value="Verzend" class="button" id="submitContact">
        </form>
    </div>
</div>

@endsection