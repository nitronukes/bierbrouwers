<?php
include("conn.php");
error_reporting(0);

$username= $_GET['username'];
$query = "DELETE FROM adminaccountmanage WHERE username='$username'";

$data=mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Account is verwijderd uit Database')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://p21t4.lesonline.nu/admin(accountmanage)klantoverzicht.php">
    <?php
}else{
    echo "<script>alert('Het is niet gelukt om account te verwijderen, Probeer later opnieuw')</script>";
}

?>