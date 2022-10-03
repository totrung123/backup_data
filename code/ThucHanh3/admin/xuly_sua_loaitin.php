<?php
require ('dbcon.php');
$maso = $_POST["maso"];
$ten = $_POST["ten"];
$trangthai = $_POST["trangthai"];
$sql = "update Loaitin set tenloai = '$ten', trangthai = '$trangthai'";
$sql = " where maloai = '$maso'";
mysqli_query($con,$sql);
mysqli_close($sql);
header("location: loaitin.php");
?>