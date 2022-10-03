<?php //Trang xuly_sua_tintuc.php
require ("dbcon.php");
$con = mysqli_connect("localhost","root","","quanly");
$id=$_GET['id'];
if($id){
    echo $id;
}
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
$sql = "update TinTuc set maloai(maloai, tentin, tomtat, noidung,
hinhanh,tacgia,noibat,docnhieu,trangthai)
values($maloai, '$tentin', '$tomtat',
'$noidung', '$hinhanh', '$tacgia',
'$tinnoibat', '$tindocnhieu', '$trangthai')";
$sql = " where maloai = $matin";
// if($mysqli->query($sql) === true{
//     echo "Bản ghi được cập nhật thành công";
// }else{
//     echo "ERROR: Không thể cập nhật bản ghi $sql. " .$mysqli->error;
// }
echo $sql;
mysqli_query($con,$sql);
mysqli_close($sql);
header("location: quanly_tintuc.php");
?>