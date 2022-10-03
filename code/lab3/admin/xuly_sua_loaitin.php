<?php
require_once 'dbcon.php';

// B2. Thuc thi Truy van
try{
    $id= $_POST['txtCatID'];
    $catName = $_POST['txtCatName'];
    $sql = "UPDATE loaitin SET  tenloai='$catName' WHERE maloai='$id'";
    //Tự sửa để BIND giá trị
    $stmt = $conn->prepare($sql); //MySQL hãy chuẩn bị thực thi
    $stmt->execute();
    header("location:loaitin.php");
}catch(PDOException $e){
    echo $sql;
    echo $e->getMessage();
}