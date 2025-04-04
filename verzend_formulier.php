<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de gegevens van het formulier
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

    // Ontvanger van het bericht
    $ontvanger = "kjeldvanbeek@outlook.com"; // Vervang dit door jouw e-mailadres

    // Onderwerp van de e-mail
    $onderwerp = "Nieuw bericht van $naam";

    // De inhoud van de e-mail
    $inhoud = "Naam: $naam\n";
    $inhoud .= "Email: $email\n\n";
    $inhoud .= "Bericht:\n$bericht\n";

    // De headers van de e-mail
    $headers = "From: $email";

    // Verstuur de e-mail
    if (mail($ontvanger, $onderwerp, $inhoud, $headers)) {
        echo "Bericht succesvol verstuurd!";
    } else {
        echo "Er is een probleem opgetreden bij het versturen van het bericht.";
    }
}
?>
