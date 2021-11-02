<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "biermanagement";

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       
       // Check connection
       if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
       }
       echo "Connected successfully";


  if (isset($_POST)) {
      $un=$_POST['username'];
      $pw=$_POST['password'];

      $sql = "SELECT  username, password FROM users where username = 'admin'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo " - Name: " . $row["username"]. " " . $row["password"]. $pw . "<br>";
        }
      } else {
        echo "0 results";
      }
      
      
      
      
      
      if ($pw==$row["password"]) {
          header("location:bestel(zakelijk).html");
          exit();
        }
        else
        echo  "<script>alert('invalid password')</script>";  
        
    }
    else
        echo  "<script>alert('invalid username')</script>";  
    
    
    mysqli_close($conn);
      
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
            placeholder="username"><br><hr><br>
            <input type="password" name="password" class="text" required 
            placeholder="password"><br><hr><br>
            <input type="Submit" name="submit" id="sub"> 
      </form>
   </div>
</center>


<div id="main2">
     <h2>wilt u een account maken?</h2>
      neem dan nu contact met ons op.
</body>
</html>