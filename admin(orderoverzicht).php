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
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <header>
    <nav>

    </nav>
  </header>
  <a href="admin(accountmanage)klantoverzicht.php"><button>Klantoverzicht</button></a>
  <table class="center">
    <caption>Orderoverzicht</caption>
    <div>
        <tr>
            <th>Bedrijfsnaam</th>
            <th>Naam</th>
            <th>telnr</th>
            <th>Emailadres</th>
            <th>Bezorgadres</th>
            <th>bezorgpostcode</th>
            <th>factuuradres</th>
            <th>fpostcode</th>
            <th>Plaats</th>
            <th>Aantal</th>
            <th>Totaalbedrag</th>
            </tr>
<?php
include("conn.php");
error_reporting(0);
$query= "select * from bestel";
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
      <td>".$result['plaats']."</td>
      <td>".$result['aantal']."</td>
      <td>".'€'.$result['totaal']."</td>
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


<footer>
  <div class="container">
    
  </div>
</footer>
  
</body>

</html>
