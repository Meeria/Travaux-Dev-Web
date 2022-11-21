
<?php 

// $to      = 'meria.dap@hotmail.fr';
// $subject = 'le sujet';
// $message = 'Bonjour !';
// $headers = 'From: meria.dap@gmail.com' . "\r\n" ;


// if(mail($to, $subject, $message, $headers))
// echo 'envoyé !';
// else
// echo 'erreur';

$to = 'meria.dap@hotmail.fr';
$name = htmlspecialchars($POST['name']);
$mail = htmlspecialchars($POST['mail']);
$message = htmlspecialchars($POST['message']);


if(isset($POST['mailform'])){

if (!empty($POST['mail']) and !empty($POST['nom']) and !empty($POST['message'])){
mail($to, $subject, $message, $mail)
}
}

