<?php

session_start();

if(isset($_POST['submit']))
{
    if(!empty($_POST['name']))
    {
        $_SESSION['nameContact'] = $_POST['name'];
    }
    if(!empty($_POST['email']))
    {
        $_SESSION['emailContact'] = $_POST['email'];
    }
    if(!empty($_POST['telephone']))
    {
        $_SESSION['telephoneContact'] = $_POST['telephone'];
    }
    if(!empty($_POST['subject']))
    {
        $_SESSION['subjectContact'] = $_POST['subject'];
    }
    if(!empty($_POST['message']))
    {
        $_SESSION['messageContact'] = $_POST['message'];
    }

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['subject']) && !empty($_POST['message']))
    {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
        $telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);
        $subjectForm = htmlspecialchars($_POST['subject'], ENT_QUOTES);
        $messageForm = htmlspecialchars($_POST['message'], ENT_QUOTES);

        $myEmail = 'karel.decoene@hotmail.com';
        $utahMail = 'thebox.info2020@gmail.com';
        $subject = 'The Box contact/offerte';

        $message = "Contact" . PHP_EOL . PHP_EOL . PHP_EOL . "Naam: " . $name . PHP_EOL . PHP_EOL . "Email: " . $email . PHP_EOL . PHP_EOL . "Telefoonnummer: " . $telephone . PHP_EOL . PHP_EOL . "Onderwerp: " . $subjectForm . PHP_EOL . PHP_EOL . "Boodschap: " . PHP_EOL . $messageForm;

        $headers = 'From: The Box Contact <info@theboxverhuizingen.be>' . "\r\n" .
        'Reply-To: ' . $email . '' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        if(mail($myEmail, $subject, $message, $headers))
        {
            mail($utahMail, $subject, $message, $headers);
            unset($_SESSION['contactEmptyFields']);

            unset($_SESSION['nameContact']);
            unset($_SESSION['emailContact']);
            unset($_SESSION['telephoneContact']);
            unset($_SESSION['subjectContact']);
            unset($_SESSION['messageContact']);

            $_SESSION['contactMailSend'] = "Wij hebben uw bericht succesvol ontvangen en nemen zo snel mogelijk contact met u op.";
            header("Location: contact");
        }
        else
        {
            unset($_SESSION['contactMailSend']);
            unset($_SESSION['contactEmptyFields']);
            $_SESSION['contactError'] = "Er is iets fout gegaan. Probeer het later opnieuw of contacteer ons via onze social media (Facebook/Instagram)";
            header("Location: contact");
        }
    }
    else
    {
        unset($_SESSION['contactMailSend']);
        $_SESSION['contactEmptyFields'] = "Gelieve alle velden in te vullen.";            
        header("Location: contact");
    }
}
else
{
    header("Location: contact");
}