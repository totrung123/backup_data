<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
    a:hover {
        color: #FF00FF;
    }

    /* mouse over link */
    a,
    img {
        text-decoration: none;
        color: blue
    }

    tr {
        background-color: gray;
        color: white;
        font-weight: bold;
    }

    tr.id1 {
        background-color: #EEEEEE;
        color: black;
        font-weight: normal;
    }

    tr.id2 {
        background-color: #DDDDDD;
        color: black;
        font-weight: normal;
    }
    </style>
</head>

<body>
    <a href="them_tintuc.php">Thêm tin tức</a>
    <table width="100%" style="align-item:center">
        <tr>
            <td>Mã số</td>
            <td>Mã loại</td>
            <td>Tên tin</td>
            <td>Tóm tắt</td>
            <td>Nội dung</td>
            <td>Hình ảnh</td>
            <td>Tác giả</td>
            <td>Tin nổi bật</td>
            <td>Tin đọc nhiều</td>
            <td>Trạng thái</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <?php
require 'dbcon.php';
$sql = "select * from tintuc";
$result = mysqli_query($con,$sql);
$i=0;
while ($row = mysqli_fetch_array($result)) {
?>
        <tr class="id<?php if($i++ % 2==0) echo "1"; else echo "2";?>">
            <td><?php echo $row[0]?></td>
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <td><?php echo $row[3]?></td>
            <td><?php echo $row[4]?></td>
            <td><img src="https://timanhdep.com/wp-content/uploads/2022/06/hinh-avatar-anime-nu-de-thuong-cuc-cute-01.jpg"
                    alt="" width=10 height=10></td>
            <!-- <td><img src="../<?php echo $row[5]?>" width=10 height=10></td> -->
            <td><?php echo $row[6]?></td>
            <td><?php echo $row[7]?></td>
            <td><?php echo $row[8]?></td>
            <td><?php echo $row[9]?></td>
            <td><a href="sua_tintuc.php?id=<?php echo $row[0]?>">Sửa</a></td>
            <td><a href="xoa_tintuc.php?id=<?php echo $row[0]?>">Xóa</a></td>
        </tr>
        <?php
}
?>
    </table>
</body>

</html>