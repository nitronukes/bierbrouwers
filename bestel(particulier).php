<?php
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <link rel="stylesheet" href="main.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bestel</title>

</head>
<body>
  <header>

    <div class="login-button">

       <a href="mainphp.php"> <button type="submit">Login</button></a>
    </div>

  </header>

<div class="container1">

  <h1>Appel Bandit</h1>

  <img src="https://media.foox.nl/FT/AFB/high/35033.jpg" id="besimg">

  <p class="prijs">€1.75 per fles <strong>excl BTW.</strong></p>

  <form method="GET"><p id="pp"><strong>Max 24</strong> flesjes per order <input type="number" name="aantal" placeholder="aantal" min="1" max="24" required></P>
  <button type="submit" class="sub" value="Aantal Bevestigen">Aantal Bevestigen</button>
</form>
</div>

<br>
<br>
<br>


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
<br>
<br>
<br>

<div class="container2">
  <h1 id="pp">Bezorgkosten</h1>
  <p id="pp">Onder €25 = €7.50</p>
  <p id="pp">Vanaf €25 = €5.00</p>
</div>



<div class="container3">

<form action="form.php" method="POST">
  <label>Naam:</label> 
  <input name="name" type="text" class="formc" placeholder="Uw Naam" required>
  <br><br>
  <label>Adres:</label> 
  <input name="bezorgadres" type="text" class="formc" placeholder="Uw Adres" required>
  <br><br>
  <label>Postcode:</label> 
  <input name="bpostcode" type="text" class="formc" placeholder="Uw Postcode" required>
  <br><br>
  <label>Plaats:</label> 
  <input name="plaats" type="text" class="formc" placeholder="Uw Plaats" required>
  <br><br>
  <label>Emailadres:</label> 
  <input name="email" type="email" class="formc" placeholder="Uw Emailadres" required>
  <br><br>
  <label>Telefoonnummer:</label> 
  <input name="telef" type="tel" class="formc" placeholder="Uw Telefoonnummer" required>
  <br><br>
  <input name="aantal" value="<?php echo $aantal;?>" hidden>
  <input name="totaal" value="<?php echo $totaal;?>" hidden>
  <button type="submit" class="sub" value="Bestel">BESTEL</button>
</form>
</div>

</body>
</html>