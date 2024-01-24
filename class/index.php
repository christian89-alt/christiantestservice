<?php

Use Controller\Mail;
require 'vendor/autoload.php';

if(isset($POST ['text']) && !empty($POST ['text']) &&
isset($POST ['email']) && !empty($POST ['email']) &&
isset($POST ['message']) && !empty($POST ['message']) 
){
    
    $mail= new Mail($POST ['text'],$POST ['email'],$POST ['message']);
    $resp= $mail->send ();
    $info= $resp 'succès': 'danger'?;
    $info= 'Votre message à bien été envoyé':'Message non envoyé. Vérifier que tout les champs sont biens remplis.';



    

}
?>
