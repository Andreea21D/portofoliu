<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Preia datele din formular
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"]; // Am adăugat preluarea numărului de telefon
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Adresa ta de email
  $to = "andreeadenisa921@yahoo.com";

  // Subiectul emailului
  $email_subject = "Mesaj nou de la formularul de contact";

  // Construiește corpul emailului
  $email_body = "Ai primit un mesaj nou de la $name ($email).\n\n";
  $email_body .= "Număr de telefon: $phone\n"; // Am adăugat numărul de telefon în corpul emailului
  $email_body .= "Subiect: $subject\n";
  $email_body .= "Mesaj:\n$message";

  // Setează antetul pentru email
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Trimite emailul
  if (mail($to, $email_subject, $email_body, $headers)) {
      echo "Mesajul a fost trimis cu succes.";
  } else {
      echo "Eroare la trimiterea mesajului. Te rugăm să încerci din nou mai târziu.";
  }
}
?>