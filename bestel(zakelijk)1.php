<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
</head>

<?php
include("conn.php");
error_reporting(0);
$query= "select * from adminaccountmanage";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
    while($result=mysqli_fetch_assoc($data)){
        echo "
        <a href='update(zakelijk).php?bedrijfsnaam=$result[bedrijfsnaam]&naam=$result[naam]&telef=$result[telef]&email=$result[email]&bezorgadres=$result[bezorgadres]&bpostcode=$result[bpostcode]&username=$result[username]'>account</a>
        ";
    }
  }
?>

<div class="container1">
    <h1>appel Bandit</h1>
  <img src="https://media.foox.nl/FT/AFB/high/35033.jpg" id="besimg">

  <form method="GET"><p id="pp"><input type="number" name="aantal" placeholder="aantal" min="1" max="99999999" required></P>
  <button type="submit" class="sub" value="Aantal Bevestigen">Aantal Bevestigen</button>
      
</div>
<div class="table">
    <table>
    <tr>
    <th>Omschrijving</th>
    <th>Aantal</th>
    <th>Prijs</th>
    <th>BTW</th>
    <th>Bezorgkosten</th>
    <th>Totaalbedrag</th>
  </tr>

  <tr>
    <td>Apple Bandit</td>
    <td><?php $aantal = $_GET['aantal'] ?? '0'; echo $aantal; ?></td>
    <td>€1.75</td>
    <td><?php $btw=$aantal * '1.75'* '0.21'; echo round($btw,2); ?></td>
    <td><?php $subtotaal=$aantal * '1.75'; 
    if($subtotaal<25){
      $bk='7.5'; echo '€'.$bk;
    }elseif($subtotaal>25){
      $bk='5'; echo '€'.$bk;
    }?></td>
    <td><?php $totaal=$subtotaal+$bk+$btw; echo '€'.round($totaal, 2); ?></td>
  </tr>
    </table>
    </div>
    <br>
    <br>
    <br>
    
    <div class="container2">
      <h1 id="pp">Bezorgkosten</h1>
      <p id="pp">Onder de €25 = €7.50</p>
      <p id="pp">Vanaf €25 = €5.00</p>
    </div>
    
    
    <div class="container3">
    <button type="submit" class="sub" value="Bestel">BESTEL</button>
    </div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</html>