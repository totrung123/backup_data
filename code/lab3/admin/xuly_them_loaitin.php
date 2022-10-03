
/*require("dbcon.php"); //gọi file kết nối CSDL
$maloai = $_POST["maloai"];
$tenloai = $_POST["tenloai"];
$trangthai = $_POST["trangthai"];
$sql = "insert into LoaiTin values($maloai, '$tenloai', $trangthai)";
//echo $sql;
mysql_query($sql);
mysql_close($con);
header("location: loaitin.php");*/
<?php

       require_once 'dbcon.php';
       // B2. Thuc thi Truy van
       try
       {
           $catName = $_POST['txt_Ma'];
       $sql = "INSERT INTO loaitin (tenloai) VALUES (:cn)";
       $stmt = $conn->prepare($sql); //MySQL hãy chuẩn bị thực thi
       $stmt->bindParam(':cn',$catName,PDO::PARAM_STR);
       $stmt->execute();
       header("location:loaitin.php");
       }
       
       catch(PDOException $e)
       {
           echo $sql;
           echo $e->getMessage();
       }
?>