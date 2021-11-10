<?php
$name= $_POST['name'];
$adres=  $_POST['adres'];
$postcode =  $_POST['postcode'];
$plaats =  $_POST['plaats'];
$visitor_email= $_POST['email'];
$telefoonnummer =  $_POST['telefoonnummer'];

$receiver = "panshibin2000@gmail.com";
$subject="bestelling";
$body = "$name $adres $postcode $plaats $visitor_email $telefoonnummer";

if(mail($receiver, $subject, $body)){
  echo "bestelling is gelukt";
}else{
  echo"Sorry, bestelling is niet gelukt";
}
?>