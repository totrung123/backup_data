<?php
require("dbcon.php");
$maso = $_GET["id"];
$sql = "delete from loaitin where maloai = $maso";
mysqli_query($con,$sql);
header("location: loaitin.php");
?>