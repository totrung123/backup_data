<?php //Trang xuly_sua_tintuc.php
require 'dbcon.php';
$matin = $_POST["matin"];
$maloai = $_POST["maloai"];
$tentin = $_POST["tentin"];
$tomtat = $_POST["tomtat"];
$noidung = $_POST["noidung"];
$hinhanh = $_POST["hinhanh"];
$tacgia = $_POST["tacgia"];
$tinnoibat = $_POST["tinnoibat"];
$tindocnhieu = $_POST["tindocnhieu"];
$trangthai = $_POST["trangthai"];
CSE485 – Công nghệ Web Khoa CNTT – Trường ĐH Thuỷ lợi
16
$sql = "update TinTuc set maloai = $maloai ,tentin = '$tentin' ,tomtat =
'$tomtat',
noidung = '$noidung', hinhanh = '$hinhanh',tacgia = '$tacgia',
noibat = $tinnoibat, docnhieu = $tindocnhieu, trangthai =
$trangthai
where matin = $matin";
//echo $sql;
mysql_query($sql);
header("location: quanly_tintuc.php");
?>
