<?php

if(isset($ POST ['text']) && !empty($ POST ['text']) &&
isset($ POST ['email']) && !empty($ POST ['email']) &&
isset($ POST ['message']) && !empty($ POST ['message']) 
){
    
    $mail = new Mail($ POST ['text'],$ POST ['email'],$ POST ['message']);
    $mail->send();


    

}
?>
