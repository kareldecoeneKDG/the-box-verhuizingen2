@extends('layouts.layout')

@section('content')

    <?php
    session_start();
    ?>

    <section class="welcome">
        <h1>Contact</h1>
        <p>
            Voor vragen groot of klein bent u op deze pagina aan het juiste adres. Vraagt u zich af of wij een bepaald soort afval afvoeren, of we tot bij u thuis komen voor een verhuis? Twijfel dan niet om onderstaand contactformulier in te vullen. Na het invullen nemen wij zo snel mogelijk contact met u op.
            Indien u een prijsofferte wenst voor uw afvoerklus, gelieve dan hieronder in het keuzemenu te kiezen voor offerte.
        </p>
    </section>

    <?php if (isset($_SESSION['contactMailSend'])) : ?>
        <p class="message">
            <b><?php echo $_SESSION['contactMailSend']; ?></b>
        </p>
    <?php endif; ?>

    <?php if (isset($_SESSION['contactEmptyFields'])) : ?>
        <p class="message">
            <b><?php echo $_SESSION['contactEmptyFields']; ?></b>
        </p>
    <?php endif; ?>

    <?php if (isset($_SESSION['contactError'])) : ?>
        <p class="message">
            <b><?php echo $_SESSION['contactError']; ?></b>
        </p>
    <?php endif; ?>

    <div class="formArea">
        <div class="toggle">
            <a href="contact" class="bigButton" id="activeToggle">Contact</a>
            <a href="offerte" class="bigButton" id="notActiveToggle">Offerte</a>
        </div>

        <div class="form">
            <form method="POST" action="actions/contactAction.php">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Naam" <?php if (isset($_SESSION['nameContact'])) : ?> value="<?php echo $_SESSION['nameContact'] ?>" <?php endif; ?>>
                    <input type="text" name="email" placeholder="Email" <?php if (isset($_SESSION['emailContact'])) : ?> value="<?php echo $_SESSION['emailContact'] ?>" <?php endif; ?>>
                    <input type="text" name="telephone" placeholder="Telefoon" <?php if (isset($_SESSION['telephoneContact'])) : ?> value="<?php echo $_SESSION['telephoneContact'] ?>" <?php endif; ?>>
                    <input type="text" name="subject" placeholder="Onderwerp" <?php if (isset($_SESSION['subjectContact'])) : ?> value="<?php echo $_SESSION['subjectContact'] ?>" <?php endif; ?>>
                    <textarea type="text" name="message" placeholder="Boodschap" <?php if (isset($_SESSION['messageContact'])) : ?> value="<?php echo $_SESSION['messageContact'] ?>" <?php endif; ?>></textarea>
                </div>

                <input type="submit" name="submit" value="Verzend" class="button" id="submitContact">
            </form>
        </div>
    </div>

@endsection