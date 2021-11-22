<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "biermanagement";

       // Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  if (isset($_POST)) {
      $un=$_POST['username'];
      $pw=$_POST['password'];
      
      if($un=='Admin' AND $pw=='Admin'){
        header("location:admin(orderoverzicht).php");
        exit();    
    }

      $sql = "SELECT `username`, `password` FROM `adminaccountmanage` WHERE `username` = '".$un."' AND `password` = '".$pw."'";
      $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // succes   if ($pw==$row["password"]) {
            
            header("location:zakelijk(orderoverzicht).html");
            exit();
            
    }
    else{
    // failed  
    
        echo  "<script>alert('gebruiksnaam en wachtwoord kloppen niet, Probeer opnieuw')</script>";  
            
        
        
    }
}
$conn->close();



      
    //     $result = mysqli_($conn, 'SELECT * FROM `users');
    //     $result = mysqli_fetch_assoc($result)
    //    print_r($result);
    //    echo 'hoihoi';
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('ss', $un, $pw);
    // $stmt->execute();
    // $stmt = $stmt->get_results();
    // echo $stmt->error;
      
    //   if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo " - Name: " . $row["username"]. " " . $row["password"].  "<br>";
    //     }
    //    else {
    //     echo "0 results";
    //   }
      
      
      
      
    //   if ($pw==$row["password"]) {
    //       header("location:bestel(zakelijk).html");
    //       exit();
    //     }
    //     else {
    //     echo  "<script>alert('invalid password')</script>";  
        
    // }
    // else
    //     echo  "<script>alert('invalid username')</script>";  
    
    
    // mysqli_close($conn);
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login.html</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
 <center>
    <div id="main">
        <h1>login</h1>
        <form method="post" action="">
            <input type="text" name="username" class="text" autocomplete="off" required 
            placeholder="gebruikersnaam"><br><hr><br>
            <input type="password" name="password" class="text" required 
            placeholder="wachtwoord"><br><hr><br>
            <input type="submit" name="submit" id="sub"> 
      </form>
  

        <h2>wilt u een account maken?</h2>
    
        neem dan nu contact met ons op de email banditappletje@gmail.com of bel ons 0611264386
    </center>
    </div>
</body>
</html>