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
$sql_update="SELECT * FROM member WHERE MID ='$_GET[MID]'";
$result=mysqli_query($objConnect ,$sql_update);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editcustomersuccess.php">
<p>
<label for="MID">รหัสสมาชิก</label>
<input type="text" name="MID" id="MID" value="<?=$data['MID'];?>"/>
</p>
<p>
<label for="MName">ชื่อ</label>
<input type="text" name="MName" id="MName" value="<?=$data['MName'];?>"/>
</p>
<p>
<label for="MLastname">นามสกุล</label>
<input type="text" name="MLastname" id="MLastname" value="<?=$data['MLastname'];?>" />
</p>
<p>
<label for="MEmail">Email</label>
<input type="text" name="MEmail" id="MEmail" value="<?=$data['MEmail'];?>" />
</p>
<p>
<label for="MTel">เบอร์โทร</label>
<input type="text" name="MTel" id="MTel" value="<?=$data['MTel'];?>" />
</p>


<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>
</body>
</html>