<?php
 
 if(isset ($_POST['submit'])){

  $receiving_email_address = 'deograciadilou@yahoo.fr';

  $nom =  $_POST['name'];
  $prenom =  $_POST['surname'];
  $sender_email =  $_POST['email'];
  $message =  $_POST['message'];


  $to="deograciadilou@yahoo.fr";
  $subject="";
  $header="De :" .$sender_email;
  mail($to, $subject, $message, $header);

 }

?>
