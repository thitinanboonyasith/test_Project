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
mysqli_select_db( $objConnect, "moivevidio");
mysqli_query($objConnect, "SET NAMES utf8");
$sql_update="SELECT * FROM dvdmovie WHERE DID='$_GET[DID]'";
$result=mysqli_query($objConnect ,$sql_update);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editdvdsuccess.php">
<p>
<label for="DID">รหัสสินค้า</label>
<input type="text" name="DID" id="DID" value="<?=$data['DID'];?>"/>
</p>
<p>
<label for="DName">ชื่อ</label>
<input type="text" name="DName" id="DName" value="<?=$data['DName'];?>"/>
</p>
<p>
<label for="Genre">ประเภทของภาพยนต์</label>
<input type="text" name="Genre" id="Genre" value="<?=$data['Genre'];?>" />
</p>
<p>
<label for="Time">เวลา</label>
<input type="text" name="Time" id="Time" value="<?=$data['Time'];?>" />
</p>
<p>
<label for="Date">วันที่จำหน่าย</label>
<input type="date" name="Date" id="Date" value="<?=$data['Date'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>
</body>
</html>