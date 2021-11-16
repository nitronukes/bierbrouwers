<?php
include("conn.php");
error_reporting(0);

$username=$_GET[un'];
$query = "DELETE FROM adminaccountmanage WHERE 'username'='$username'";

$data=mysqli_query($conn, $query);

if($data){
    echo "Account is verwijderd uit Database";
}else{
    echo "Het is niet gelukt om account te verwijderen";
}

?>