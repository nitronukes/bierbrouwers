<?php
include 'conn.php';

$sql=" SELECT * FROM bestel";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin(accountmanage)</title>
</head>
<style>
    header{
    background-color: rgb(46, 35, 35);
  }

 .NAV {
    position: relative;
    display: flex;
  }
  
  ul {
    list-style: none;
    text-align: right;
    display: inline-block;
  }
  
nav li {
  display: inline-flex;
  margin-right: 50px;
  margin-left: 100px;
  margin-bottom: 5px;
}

nav a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  font-size: 17px;
}

  .login-button {
  float: right;
  text-align: center;
  }
  table {
    width:100%;
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
  caption {
    text-align: center;
    padding-top: 10px;
    color: rgb(0, 0, 0);
    font-size:30px;
    font-weight:bold ;
  } 
  #deletebtn{
    background-color:red;
    color:white;
    width:120px;
    height:25px;
    font-size:18px
}
  
</style>
<header>
    <div class="login-button">
      <a href="mainphp.php"> <button type="submit">loguit</button></a>
   </div>
     <div class="NAV">
      <nav>
        <ul>
          <li>  <a href="admin(orderoverzicht).php">Orderoverzicht</a></li>
          <li>  <a href="admin(accountmanage)klantoverzicht.php">Klantoverzicht</a></li>
        </ul>
      </nav>
    </div>
</header>


<body>
  <table class="center">
    <caption>Orderoverzicht</caption>
        <tr>
            <th>Bedrijfsnaam</th>
            <th>Naam</th>
            <th>Telnr</th>
            <th>Emailadres</th>
            <th>Bezorgadres</th>
            <th>bezorgpostcode</th>
            <th>factuuradres</th>
            <th>fpostcode</th>
            <th>Datum</th>
            <th>Plaats</th>
            <th>Aantal</th>
            <th>Totaalbedrag</th>
            </tr>
<?php
include("conn.php");
error_reporting(0);
$query= "SELECT * FROM bestel";
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
      <td>".$result['factuuradres']."</td>
      <td>".$result['fpostcode']."</td>
      <td>".$result['datum']."</td>
      <td>".$result['plaats']."</td>
      <td>".$result['aantal']."</td>
      <td>".'€'.$result['totaal']."</td>
      <td><a href='versturen.php?naam=$result[naam]&telef=$result[telef]&aantal=$result[aantal]&email=$result[email]&username=$result[username]&datum=$result[datum]' onclick='return checkdelete()'><input type='submit' value='Versturen' id='deletebtn'></a></td>
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

  
</body>
<script>
function checkdelete(){
  return confirm('Weet je zeker dat je deze bestelling hebt verzonden?');
}
</script>
</html>
