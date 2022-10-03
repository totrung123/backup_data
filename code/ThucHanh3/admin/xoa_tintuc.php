<?php
require("dbcon.php");
$maso = $_GET["id"];
$sql = "delete from tintuc where matin = $maso";
mysqli_query($con,$sql);
header("location: quanly_tintuc.php");
?>