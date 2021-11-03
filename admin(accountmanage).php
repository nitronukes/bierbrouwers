<?php
      $bedrijfsnaam     = $_POST['bedrijfsnaam'];
      $naam             = $_POST['naam'];
      $telef            = $_POST['telef'];
      $email            = $_POST['email'];
      $bezorgadres      = $_POST['bezorgadres'];
      $bpostcode        = $_POST['bpostcode'];
      $factuuradres     = $_POST['factuuradres'];
      $fpostcode        = $_POST['fpostcode'];
      $username         = $_POST['username'];
      $password         = $_POST['password'];
      
      $conn = new mysqli('localhost','root','','biermanagement');
      if($conn->connect_error){
          die('Connection Failed : '.$conn->connect_error);
      }else{
          $SELECT = "SELECT username from adminaccountmanage Where username = ? Limit 1";
          $INSERT = "INSERT Into adminaccountmanage (bedrijfsnaam, naam, telef,email,bezorgadres,bpostcode,factuuradres,fpostcode,username,password) values(?,?,?,?,?,?,?,?,?,?)";
          
          $stmt = $conn->prepare($SELECT);
          $stmt->bind_param("s", $username);
          $stmt->execute();
          $stmt->bind_result($username);
          $stmt->store_result();
          $rnum = $stmt->num_rows;

          if ($rnum==0){
              $stmt->close();

              $stmt = $conn->prepare($INSERT);
              $stmt->bind_param("ssssssssss",$bedrijfsnaam,$naam,$telef,$email,$bedrijfsnaam,$bpostcode,$factuuradres,$fpostcode,$username,$password);
              $stmt->execute();
              echo "Het is gelukt om een account te maken";
          }else{
              echo"Er bestaat al een account met dit username '$username'";
          }
          $stmt->close();
          $conn->close();
      }