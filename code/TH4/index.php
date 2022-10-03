<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
        <small><h6>BỘ NN & PTNT</h6></small>
        <h5>TRƯỜNG ĐẠI HỌC THỦY LỢI</h5>
        <h5 class="TT">Danh Sách Tổng Hợp Kết Quả Thi Của Thí Sinh</h5>
    </div>
<table border="1" >
    <tr style="background:black; color:white;" >
        <th>Số thứ tự</th>
        <th>Số báo danh</th>
        <th>Mã bài thi</th>
        <th>Ngày thi</th>
        <th>Giờ nộp bài</th>
        <th>Kết quả thi</th>
        <Th>Tệp kết quả</th>
        <th>Kí tên</th>
    </tr>
    <?php
            $myfile = fopen("test1.txt", "r") or die("Unable to open file!");
            $arr = file("test2.txt");
            $intLine=Count($arr);
        ?>
                <tr>
                    <td>1</td>
                    <td>CHY01024</td>
                    <td><?php echo $arr[0] ?></td>
                    <td><?php echo $arr[6] ?></td>
                    <td><?php echo $arr[7] ?></td>
                    <td><?php echo $arr[4] ?></td>
                    <td><a href="test1.txt</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CHY01024</td>
                    <td><?php echo $arr[0] ?></td>
                    <td><?php echo $arr[6] ?></td>
                    <td><?php echo $arr[7] ?></td>
                    <td><?php echo $arr[4] ?></td>
                    <td><a href="test2.txt">test2.txt</a></td>
                    <td></td><br>
                </tr>
        <?php 
    
            fclose($myfile)
        ?>

</table>
<table border="1" ><br>
    <tr >
        <th>Giám thị 1</th>
        <th>Giám thị 2</th>
        <th>Trưởng ban coi thi</th>
    </tr>
    <td width="350" height="100"></td>
    <td width="350" height="100"></td>
    <td width="350" height="100"></td>
</table>
<?php 
echo phpinfo();
?>
</body>
</html>