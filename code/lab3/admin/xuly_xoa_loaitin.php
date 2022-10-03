<?php
require_once 'dbcon.php';
// B2. Thuc thi Truy van
try{
    $id = $_GET['txtCatID'];
    $sql = "DELETE FROM loaitin WHERE maloai='$id';";
    //Tự xóa giá trị
    $stmt = $conn->prepare($sql); //MySQL hãy chuẩn bị thực thi
    $stmt->execute();
    header("location:loaitin.php");
}
catch(PDOException $e){
    echo $sql;
    echo $e->getMessage();
}
?>