<?php

  if (isset($_POST)) {
      $un=$_POST['username'];
      $pw=$_POST['password'];

      if ($un=='username' && $pw=='password') {
          header("location:bestel(zakelijk).html");
          exit();
      }
      else
            echo"<script>alert('invalid password')</script>";  
       
    }
    else
        echo  "<script>alert('invalid username')</script>";  
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
</body>
</html>