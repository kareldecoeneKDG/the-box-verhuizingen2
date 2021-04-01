<?php

session_start();

if(isset($_POST['submit']))
{
    if(!empty($_POST['name']))
    {
        $_SESSION['nameOfferte'] = $_POST['name'];
    }
    if(!empty($_POST['email']))
    {
        $_SESSION['emailOfferte'] = $_POST['email'];
    }
    if(!empty($_POST['telephone']))
    {
        $_SESSION['telephoneOfferte'] = $_POST['telephone'];
    }

    if(!empty($_POST['street']))
    {
        $_SESSION['streetOfferte'] = $_POST['street'];
    }
    if(!empty($_POST['number']))
    {
        $_SESSION['numberOfferte'] = $_POST['number'];
    }
    if(!empty($_POST['town']))
    {
        $_SESSION['townOfferte'] = $_POST['town'];
    }
    if(!empty($_POST['postalcode']))
    {
        $_SESSION['postalcodeOfferte'] = $_POST['postalcode'];
    }

    if(!empty($_POST['materials']))
    {
        $_SESSION['materialsOfferte'] = $_POST['materials'];
    }
    if(!empty($_POST['volume']))
    {
        $_SESSION['volumeOfferte'] = $_POST['volume'];
    }

    if(!empty($_POST['message']))
    {
        $_SESSION['messageOfferte'] = $_POST['message'];
    }

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['street']) && !empty($_POST['number']) && !empty($_POST['town']) && !empty($_POST['postalcode']) && !empty($_POST['materials']) && !empty($_POST['volume']) && !empty($_POST['message']))
    {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
        $telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);

        $street = htmlspecialchars($_POST['street'], ENT_QUOTES);
        $number = htmlspecialchars($_POST['number'], ENT_QUOTES);
        $town = htmlspecialchars($_POST['town'], ENT_QUOTES);
        $postalcode = htmlspecialchars($_POST['postalcode'], ENT_QUOTES);

        $materials = htmlspecialchars($_POST['materials'], ENT_QUOTES);
        $volume = htmlspecialchars($_POST['volume'], ENT_QUOTES);
        
        $messageForm = htmlspecialchars($_POST['message'], ENT_QUOTES);

        $myEmail = 'karel.decoene@hotmail.com';
        $utahMail = 'thebox.info2020@gmail.com';
        $subject = 'The Box contact/offerte';

        $message = "Offerte" . PHP_EOL . PHP_EOL . PHP_EOL . "Naam: " . $name . PHP_EOL . "Email: " . $email . PHP_EOL . "Telefoonnummer: " . $telephone . PHP_EOL . PHP_EOL . "Straat: " . $street . PHP_EOL . "Nummer: " . $number . PHP_EOL . "Stad/Gemeente: " . $town . PHP_EOL . "Postcode: " . $postalcode . PHP_EOL . PHP_EOL . "Materialen: " . $materials . PHP_EOL . "Volume: " . $volume . PHP_EOL . PHP_EOL . "Beschrijving: " . PHP_EOL . $messageForm;

        $headers = 'From: The Box Contact <info@theboxverhuizingen.be>' . "\r\n" .
        'Reply-To: ' . $email . '' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        if(mail($myEmail, $subject, $message, $headers))
        {
            mail($utahMail, $subject, $message, $headers);
            unset($_SESSION['offerteEmptyFields']);

            unset($_SESSION['nameOfferte']);
            unset($_SESSION['emailOfferte']);
            unset($_SESSION['telephoneOfferte']);

            unset($_SESSION['streetOfferte']);
            unset($_SESSION['numberOfferte']);
            unset($_SESSION['townOfferte']);
            unset($_SESSION['postalcodeOfferte']);

            unset($_SESSION['materialsOfferte']);
            unset($_SESSION['volumeOfferte']);

            unset($_SESSION['messageOfferte']);

            $_SESSION['offerteMailSend'] = "Wij hebben uw offerteaanvraag succesvol ontvangen en nemen zo snel mogelijk contact met u op.";
            header("Location: ../offerte");
        }
        else
        {
            unset($_SESSION['offerteMailSend']);
            unset($_SESSION['offerteEmptyFields']);
            $_SESSION['offerteError'] = "Er is iets fout gegaan. Probeer het later opnieuw of contacteer ons via onze social media (Facebook/Instagram)";
            header("Location: ../offerte");
        }
    }
    else
    {
        unset($_SESSION['offerteMailSend']);
        $_SESSION['offerteEmptyFields'] = "Gelieve alle velden in te vullen.";            
        header("Location: ../offerte");
    }
}
else
{
    header("Location: ../offerte");
}