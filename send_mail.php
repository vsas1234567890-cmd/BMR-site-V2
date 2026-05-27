<?php
$to = '107901@lingecollege.nl';
$naam = htmlspecialchars($_POST['naam'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$tel = htmlspecialchars($_POST['tel'] ?? '');
$datum = htmlspecialchars($_POST['datum'] ?? '');
$dienst = htmlspecialchars($_POST['dienst'] ?? '');
$bericht = htmlspecialchars($_POST['bericht'] ?? '');
$subject = "Afspraak van $naam – BMR Tiel";
$body = "Naam: $naam\nEmail: $email\nTel: $tel\nDatum: $datum\nDienst: $dienst\n\n$bericht";
$headers = "From: valentijn.sas@gmail.com\r\nReply-To: $email";
echo json_encode(['ok' => mail($to,$subject,$body,$headers)]);
?>
