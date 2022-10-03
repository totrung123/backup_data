<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <a href="them_loaitin.php">Thêm loại tin</a>
    <table width="350">
        <tr>
            <td>Mã số</td>
            <td>Tên loại</td>
            <td>Trạng thái</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <?php
require_once 'dbcon.php';
$sql = "SELECT * FROM loaitin";
            $stmt = $conn->prepare($sql); //MySQL hãy chuẩn bị thực thi
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC); //Tập bản ghi
            if($stmt->rowCount() > 0){
                foreach($results as $row){
?>
        <tr>
            <td><?php echo $row['maloai']?></td>
            <td><?php echo $row['tenloai']?></td>
            <td><?php echo $row['trangthai']?></td>
            <td><a href="sua_loaitin.php?id=<?php echo $row['maloai']?>">Sửa</a></td>
            <td><a href="xoa_loaitin.php?id=<?php echo $row['maloai']?>">Xóa</a></td>
        </tr>
        <?php
                }
            }
?>
    </table>
</body>

</html>