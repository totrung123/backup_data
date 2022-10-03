<?php
require("dbcon.php"); //gọi file kết nối CSDL
//$matin = $_POST["matin"];
$maloai = $_POST["maloai"];
$tentin = $_POST["tentin"];
$tomtat = $_POST["tomtat"];
$noidung = $_POST["noidung"];
$hinhanh = $_POST["hinhanh"];
$tacgia = $_POST["tacgia"];
$tinnoibat = $_POST["tinnoibat"];
$tindocnhieu = $_POST["tindocnhieu"];
$trangthai = $_POST["trangthai"];
$sql = "insert into TinTuc(maloai, tentin, tomtat, noidung,
hinhanh,tacgia,noibat,docnhieu,trangthai)
values($maloai, '$tentin', '$tomtat',
'$noidung', '$hinhanh', '$tacgia',
$tinnoibat, $tindocnhieu, $trangthai)";
//echo $sql;
mysql_query($sql);
mysql_close($con);
header("location: quanly_tintuc.php");
?>
