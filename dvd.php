<!DOCTYPE html>
<html>
    <head><meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>หน้าจัดการข้อมูลDVD</title>
    </head>
    <body>
        <div class="screen" >

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect,"moivevidio");
mysqli_query($objConnect,"SET NAMES utf8");

$sql="SELECT * FROM dvdmovie";
$result=$objConnect ->query($sql);

echo "<h1 >ข้อมูลภาพยนต์ในร้าน</h1>";
        echo "<table border='1px'>";
        echo "<tr bgcolor='pink'>";
        echo "<th width='200px'>รหัสดีวีดี: "; echo "</th>";echo "<th> ชื่อภาพยนต์: ";echo "</th>"; echo "<th> ประเภทของภาพยนต์ </th>"; echo "<th> เวลา </th>"; echo "<th> วันที่จำหน่าย </th>";
        echo "</tr>";
while ($row = $result-> fetch_assoc()) {
echo "<tr><td><a href='editdvd.php?DID=$row[DID]'>".$row["DID"]."</td>"."</a><td>"."</a>".$row["DName"]."</td>"."<td>".$row["Genre"]."</td>"."<td>".$row["Time"]."</td>"."<td>".$row["Date"]."</td>";
echo "</tr>";
}
echo "</table>";
?>

<br>
<a class="menu-item" href='insertdvd.php'> เพิ่มข้อมูล </a>
<br><br><br><br>
<a href='main.html'> <<< กลับกลับหน้าหลัง </a>
    </div>
    </body>
</html>#   t e s t _ P r o j e c t  
 