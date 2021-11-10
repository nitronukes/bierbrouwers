<?php
include 'conn.php';

$sql=" SELECT * FROM adminaccountmanage";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin(accountmanage)</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <header>
    <nav>

    </nav>
  </header>
  <a href="admin(orderoverzicht).html"><button>Dashboard</button></a>
  <table class="center1">
    <caption>Klanten</caption>
    <div>
        <tr>
            <th>Bedrijfsnaam</th>
            <th>Naam</th>
            <th>telnr</th>
            <th>Emailadres</th>
            <th>adres</th>
            <th>postcode</th>
            <th>Username</th>
            </tr>
<?php
if($result->num_rows >0){
while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['bedrijfsnaam']; ?></td>
    <td><?php echo $row['naam']; ?></td>
    <td><?php echo $row['telef']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['bezorgadres']; ?></td>
    <td><?php echo $row['bpostcode']; ?></td>
    <td><?php echo $row['username']; ?></td>
</tr>
<?php
}
}
else{
?>
<tr>
<th colspan="2">Er is geen data gevonden!!!</th>
</tr>
<?php
}
?>
</table>
<br>
  <table class="contactf">  
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

<footer>
  <div class="container">
    
  </div>
</footer>
  
</body>
<script>
function toogleInput(e) {
  var list = document.getElementsByClassName('passwords');
  for (let item of list) {
    item.type = e.checked ? 'text' : 'password';
  }
}

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>
