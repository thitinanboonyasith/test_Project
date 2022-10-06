<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="screen">
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "moivevidio");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE dvdmovie SET DID ='$_GET[DID]',DName='$_GET[DName]',Genre='$_GET[Genre]',Time='$_GET[Time]',Date='$_GET[Date]'
 WHERE DID = '$_GET[DID]'";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='dvd.php'>กลับสู่หน้าหลัก</a>";
}
?>
</body>
</html>