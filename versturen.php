<?php

$naam= $_GET['naam'];
$bezorgadres=  $_GET['bezorgadres'];
$bpostcode =  $_GET['bpostcode'];
$plaats =  $_GET['plaats'];
$datum = $_GET['datum'];
$email= $_GET['email'];
$telef =  $_GET['telef'];
$aantal = $_GET['aantal'];
$totaal = $_GET['totaal'];
$username = $_GET['username'];

$receiver = array($email, 'banditappletje@gmail.com');
$subject="Uw bestelling is verzonden";
$body = "Uw bestelling op $datum voor $aantal bier is onderweg, u krijgt het binnen 2-3 werkdagen";

if(mail(implode(',',$receiver), $subject, $body)){
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/test/admin(orderoverzicht).php">
  <?php
}


include("conn.php");
error_reporting(0);

$query1 = "DELETE FROM bestel WHERE naam='$naam'";

$data1=mysqli_query($conn, $query1);

if($data1){
    echo "<script>alert('Bestelling is verzonden')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/test/admin(orderoverzicht).php">
    <?php
}else{
    echo "<script>alert('Sorry, bestelling versturen is mislukt, Probeer het late opnieuw')</script>";
}
?>


?>