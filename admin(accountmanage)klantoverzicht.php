<!DOCTYPE html>
<html lang="nl">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin(accountmanage)</title>
  <style>
    table {
    width:50%;
  }
  table, th, td {
    border: 3px solid;
  }
  .table th, .table td { 
    text-align: center; 
    padding: 0.25em;
    font-size:16px;
  }
  th {
    background-color: yellow;
  }
  td.edit-buttons { text-align: right; }
  button { 
    border-radius: 3px; 
    border: none; 
    margin: 0 0.25em; 
    transition: all 0.3s;
  }
  
  button:hover { 
    box-shadow: 0 0 4px rgba(3,3,3,0.8); 
    opacity: 0.9;
  }
  
  button.edit { background: yellow; }
  button.delete { background: #F69; }
  @media screen and (max-width: 800px) {
    tr { 
      display: flex; 
      flex-direction: row;
      flex-wrap: wrap;
      margin: 0.5em 0;
    }
    td, th {
      flex: 1 1 150px;
      border: 0.5px solid rgba(3,3,3,0.2);
    }
   
    }

  * {-ms-ime-mode: border-box; font-family: 'futura'; }
 * { mask-mode: border-box; font-family: 'futura'; }
 .cof {
   position: fixed;
   text-align: left;
   width: 30%;
   font-size:larger;
  }
  input.button1{
    display:inline-block;
    padding:0.3em 1.2em;
    margin:0 0.3em 0.3em 0;
    border-radius:2em;
    box-sizing: border-box;
    text-decoration:none;
    font-family:'Roboto',sans-serif;
    font-weight:300;
    color:#FFFFFF;
    background-color:#4eb5f1;
    text-align:center;
    transition: all 0.2s;
  }
  input.button1:hover{
    background-color:#4095c6;
  }
  #editbtn{
    background-color:green;
    color:white;
    width:120px;
    height:25px;
    font-size:18px;
}
#deletebtn{
    background-color:red;
    color:white;
    width:120px;
    height:25px;
    font-size:18px
}
caption {
    text-align: center;
    padding-top: 10px;
    color: rgb(0, 0, 0);
    font-size:30px;
    font-weight:bold ;
  }  
  </style>
</head>
<body>
  
  <a href="admin(orderoverzicht).php"><button>Orderoverzicht</button></a>
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

  <table>
    <td class="cof" style="right:30px;top:70px;">
    <form action="admin(accountmanage)klantenmaken.php" method="POST">
     <p>Bedrijfsnaam:  <input type="text" id="name" name="bedrijfsnaam" placeholder="Uw bedrijfsnaam" required></p>
     <p>Naam:  <input type="text" id="name" name="naam" placeholder="Uw naam" required></p>
     <p>Telefoonnummer: <input type="tel" id="phone" name="telef" placeholder="Uw telefoonnummer" required></p>
     <P>Emailadres: <input type="text" id="email" name="email" placeholder="Uw Emailadres" required></P>
     <p>Bezorgadres: <input type="text" name="bezorgadres" placeholder="Uw bezorgadres" required></p>
     <p>Postcode: <input type="text" name="bpostcode"placeholder="Uw bezorgpostcode" required></p>
     <p>Factuuradres: <input type="text" name="factuuradres"placeholder="Uw factuuradres" required></p>
     <p>Postcode: <input type="text" name="fpostcode" placeholder="Uw factuurpostcode" required></p>
     <p>................................................................................................</p>
     <p>Username: <input type="text" id="username" name="username" placeholder="Uw gebruiksnaam" required></p>
     Password: <input type="password" id="myInput" name="password" placeholder="Uw wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
     <i><input type="checkbox" onclick="myFunction()">Show password</p><i>(minimaal een Hoofdletter, kleineletter, en een cijfer, en minimaal 8 karakters)</i>
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
