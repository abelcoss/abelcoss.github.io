<?php
$name = $_Post['name'];
$name = $_Post['name'];
$name = $_Post['name'];
$message = $_Post['message'];

$email_from = 'abelcoss@gmail.com';

$email_subject = 'Requisito de Informacion Chile';

$email_body = "User Name: $name.\n".
               "User LastName: $lastname.\n".
                "User Email: $visito_email.\n".
                "User Number: $number.\n".
                  "User Message: $message.\n".;

$to = "abelcoss@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>
