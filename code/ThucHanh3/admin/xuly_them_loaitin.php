<?php
require("dbcon.php"); //gọi file kết nối CSDL
$maloai = $_POST["maloai"];
$tenloai = $_POST["tenloai"];
$trangthai = $_POST["trangthai"];
$sql = "insert into LoaiTin values('$maloai', '$tenloai', '$trangthai')";
echo $sql;
mysqli_query($con,$sql);
header("location: loaitin.php");
?>