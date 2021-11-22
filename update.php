<?php
include("conn.php");
error_reporting(0);
$bedrijfsnaam=$_GET['bedrijfsnaam'];
$naam=$_GET['naam'];
$telef=$_GET['telef'];
$email=$_GET['email'];
$bezorgadres=$_GET['bezorgadres'];
$bpostcode=$_GET['bpostcode'];
$username=$_GET['username'];
?>
<html>
    <style>
        table{
            color:white;
            border-radius:20px;
        }
        #editbtn{
            background-color:yellow;
            color:white;
            width:110px;
            height:35px;
            font-size:18px;
        }
        #deletebtn{
            background-color:red;
            color:white;
            width:130px;
            height:35px;
            font-size:18px
        }
    </style>
    <br><br><br><br><br><br><br>
    <body>
        <form action="" method="GET">
        <table border="0" bgcolor="black" align="center" cellspacing="20">
        <tr>
        <td>Bedrijfsnaam</td>
        <td><input type="text" value="<?php echo "$bedrijfsnaam" ?>" name='bedrijfsnaam' required"></td>
        </tr>
        <tr>
        <td>naam</td>
        <td><input type="text" value="<?php echo "$naam" ?>" name='naam' required"></td>
        </tr>
        <tr>
        <td>Telef</td>
        <td><input type="tel" value="<?php echo "$telef" ?>" name='telef' required></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type="text" value="<?php echo "$email" ?>" name='email' required></td>
        </tr>
        <tr>
        <td>Bezorgadres</td>
        <td><input type="text" value="<?php echo "$bezorgadres" ?>" name='bezorgadres' required></td>
        </tr>
        <tr>
        <td>bpostcode</td>
        <td><input type="text" value="<?php echo "$bpostcode" ?>" name='bpostcode' required></td>
        </tr>
        <tr>
        <td hidden>Username</td>
        <td><input type="text" value="<?php echo "$username" ?>" name='username' hidden></td>
        </tr>
        <tr><td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Gegevens opslaan"></a></td>
        </tr>
    </form>
    </table>
    </body>
    </html>
<?php
if($_GET['submit']){
    $bedrijfsnaam=$_GET['bedrijfsnaam'];
    $naam=$_GET['naam'];
    $telef=$_GET['telef'];
    $email=$_GET['email'];
    $bezorgadres=$_GET['bezorgadres'];
    $bpostcode=$_GET['bpostcode'];
    $username=$_GET['username'];
$query = "UPDATE adminaccountmanage SET bedrijfsnaam='$bedrijfsnaam',
naam='$naam',telef='$telef',email='$email',bezorgadres='$bezorgadres',
bpostcode='$bpostcode',username='$username'WHERE username='$username'";

$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('gegevens opgeslagen')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/test/admin(accountmanage)klantoverzicht.php">
    <?php
}else{
    echo "<script>alert('Het is niet gelukt om uw gegevens te wijzigen, Probeer later opnieuw')</script>";
}
}
?>