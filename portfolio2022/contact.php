
<?php 

// $to      = 'meria.dap@hotmail.fr';
// $subject = 'le sujet';
// $message = 'Bonjour !';
// $headers = 'From: meria.dap@gmail.com' . "\r\n" ;


// if(mail($to, $subject, $message, $headers))
// echo 'envoyé !';
// else
// echo 'erreur';



if(isset($POST['mailform']))

if (!empty($post['mail']) and !empty($post['nom']) and !empty($post['message'])){

}
else{
    $msg='tous les champs doivent être remplis';
}



			if (isset($msg)){
				echo $msg;
			}
