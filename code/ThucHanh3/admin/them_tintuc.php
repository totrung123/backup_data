<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <form name="name1" action="xuly_them_tintuc.php" method="post">
        <div>Mã loại</div>
        <select name="maloai">
            <?php
require 'dbcon.php';
$sql = "select * from loaitin";
$result = mysqli_query($con,$sql);
while ($row2 = mysqli_fetch_array($result)){
?>
            <option value="<?php echo $row2[0]?>">
                <?php echo $row2[1]?>
            </option>
            <?php
}
?>
        </select><br>
        <div>Tên tin</div>
        <input type="text" name="tentin"><br>
        <div>Tóm tắt</div><br>
        <textarea name="tomtat"></textarea>
        <script type="text/javascript">
        CKEDITOR.replace('tomtat');
        </script>
        <br>
        <div>Nội dung</div><br>
        <textarea name="noidung"></textarea>
        <script type="text/javascript">
        CKEDITOR.replace('noidung');
        </script>
        <br>
        <div>Hình ảnh</div>
        <input type="text" name="hinhanh"><br>
        <div>Tác giả</div>
        <input type="text" name="tacgia"><br>
        <div>Tin nổi bật</div>
        <input type="text" name="tinnoibat"><br>
        <div>Tin đọc nhiều</div>
        <input type="text" name="tindocnhieu"><br>
        <div>Trạng thái</div>
        <input type="text" name="trangthai"><br>
        <input class="button" type="submit" value="Thêm">
        <input class="button" type="reset" value="Hủy">
    </form>
</body>

</html>