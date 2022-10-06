<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="screen">
<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"moivevidio");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO dvdmovie(DID,DName,Genre,Time,Date) VALUES ('$_GET[DID]','$_GET[DName]','$_GET[Genre]','$_GET[Time]','$_GET[Date]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!! <br>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='dvd.php'> กลับไปหน้าก่อนหน้า </a>";
}
?>
</body>
</html>