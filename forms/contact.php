<?php
 
 if(isset ($_POST['submit'])){



  $nom =  $_POST['name'];
  $prenom =  $_POST['surname'];
  $from =  $_POST['email'];
  $message =  $_POST['message'];
  $newmessage="Nom: "+$nom+"  Prenom: " + $prenom+ " "+ $message;


  $to="deograciadilou@yahoo.fr";
  $subject="";
  $headers="De :" .$from;
  if(!mail($to, $subject, $newmessage, $headers)){
      echo 'erreur' ;
  }else{
    echo "L'email a été envoyé.";
  }
 
  

 }

?>
