<!DOCTYPE html>
<html lang="nl">
<head>
  <link rel="stylesheet" href="main.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin(accountmanage)</title>
  
</head>
<body>

<header>
    <div class="login-button">
      <a href="mainphp.php"> <button type="submit">loguit</button></a>
   </div>
     <div class="NAV">
      <nav>
        <ul>
          <li><a href="admin(orderoverzicht).php">Orderoverzicht</a></li>
          <li><a href="admin(accountmanage)klantenmaken.php">Klantenmaken</a></li>
        </ul>
      </nav>
    </div>
  </header>



  <table class="center1">
    <caption>Klantenoverzicht</caption>
    <tr>
        <th>Bedrijfsnaam</th>
        <th>Naam</th>
        <th>telnr</th>
        <th>Emailadres</th>
        <th>Bezorgadres</th>
        <th>postcode</th>
        <th>Username</th>
        <th colspan="2" align="center">Wijzigen/Verwijderen</th>
        </tr>
<?php
include("conn.php");
error_reporting(0);
$query= "select * from adminaccountmanage";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
    while($result=mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$result['bedrijfsnaam']."</td>
        <td>".$result['naam']."</td>
        <td>".$result['telef']."</td>
        <td>".$result['email']."</td>
        <td>".$result['bezorgadres']."</td>
        <td>".$result['bpostcode']."</td>
        <td>".$result['username']."</td>
        <td><a href='update.php?bedrijfsnaam=$result[bedrijfsnaam]&naam=$result[naam]&telef=$result[telef]&email=$result[email]&bezorgadres=$result[bezorgadres]&bpostcode=$result[bpostcode]&username=$result[username]'><input type='submit' value='Wijzigen' id='editbtn'></a></td>
        <td><a href='delete.php?username=$result[username]' onclick='return checkdelete()'><input type='submit' value='Verwijderen' id='deletebtn'></a></td>
        </tr>
        ";
    }
}else{
    echo "
    <tr>
    <th colspan='2'>Er is geen data gevonden!!!</th>
    </tr>
    ";
}
?>
</table>
<br>
  <table style="float: right; width: 20%;">
    <td class="cof">
    <form action="admin(accountmanage)klantenmaken.php" method="POST">
     <p>Bedrijfsnaam:  <input type="text" id="name" name="bedrijfsnaam" placeholder="Uw bedrijfsnaam" required></p>
     <p>Naam:  <input type="text" id="name" name="naam" placeholder="Uw naam" required></p>
     <p>Telefoonnummer: <input type="tel" id="phone" name="telef" placeholder="Uw telefoonnummer" required></p>
     <P>Emailadres: <input type="text" id="email" name="email" placeholder="Uw Emailadres" required></P>
     <p>Bezorgadres: <input type="text" name="bezorgadres" placeholder="Uw bezorgadres" required></p>
     <p>Postcode: <input type="text" name="bpostcode"placeholder="Uw bezorgpostcode" required></p>
     <p>Factuuradres: <input type="text" name="factuuradres"placeholder="Uw factuuradres" required></p>
     <p>Postcode: <input type="text" name="fpostcode" placeholder="Uw factuurpostcode" required></p>
     <p>..............................................................................................................</p>
     <p>Username: <input type="text" id="username" name="username" placeholder="Uw gebruiksnaam" required></p>
     Password: <input type="password" id="myInput" name="password" placeholder="Uw wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
     <input type="checkbox" onclick="myFunction()">Show password<br><i>(minimaal een Hoofdletter, kleineletter, en een cijfer, en minimaal 8 karakters)</i>
    <br><input type="submit" value="Account aanmaken" class="button1">
     </form>
   </td>
</table>

  
</body>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function checkdelete(){
  return confirm('Weet je zeker dat je deze account willen verwijderen?');
}
</script>
</html>
