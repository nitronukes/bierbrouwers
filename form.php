<?php
$name= $_POST['name'];
$bezorgadres=  $_POST['bezorgadres'];
$bpostcode =  $_POST['bpostcode'];
$plaats =  $_POST['plaats'];
$datum = $_POST['datum'];
$email= $_POST['email'];
$telef =  $_POST['telef'];
$aantal = $_POST['aantal'];
$totaal = $_POST['totaal'];

$receiver = array($email, 'banditappletje@gmail.com');
$subject="bestelling";
$body = "Naam= $name \r\nBezorgadres= $bezorgadres \r\nBezorgpostcode= $bpostcode \r\nPlaats= $plaats \r\nDatum= $datum \r\nE mailadres= $email \r\nTelefoonnr= $telef \r\nAantal bier=$aantal \r\nTotaalbedrag=$totaal";

if(mail(implode(',',$receiver), $subject, $body)){
  echo "<script>alert('bestelling is gelukt, We gaan meteen aan de slag met inpakken, U krijgt ook een bevestiging')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://p21t4.lesonline.nu/bestel(particulier).php">
  <?php
}else{
  echo "<script>alert('Sorry, bestelling is niet gelukt')</script>";
}


$conn = new mysqli('localhost','deb85590_p21t4','UtvCWEGA','deb85590_p21t4');
      if($conn->connect_error){
          die('Connection Failed : '.$conn->connect_error);
      }else{
          $stmt = $conn->prepare("insert into bestel(naam, telef,email,bezorgadres,bpostcode,datum,plaats,aantal,totaal) values(?,?,?,?,?,?,?,?,?)");
          $stmt->bind_param("sssssssss",$name,$telef,$email,$bezorgadres,$bpostcode,$datum,$plaats,$aantal,$totaal);
          $stmt->execute();
          $stmt->close();
          $conn->close();
      }
?>