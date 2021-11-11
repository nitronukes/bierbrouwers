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
  <a href="admin(accountmanage)klantoverzicht.php"><button>Dashboard</button></a>
  <table class="center">
    <caption>Admin</caption>
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
            <th>Totaal</th>
            <th>Situaties</th>
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
    <td><?php echo $row['factuuradres']; ?></td>
    <td><?php echo $row['fpostcode']; ?></td>
    <td><?php echo $row['plaats']; ?></td>
    <td><?php echo $row['aantal']; ?></td>
    <td><?php echo $row['totaal']; ?></td>
    <td><button id="btnAdd" onclick="myFunction()"><b>Nieuw</b></button></td>
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


<footer>
  <div class="container">
    
  </div>
</footer>
  
</body>

</html>
