<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="../css/style.css" type="text/css">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form name="name1" action="xuly_sua_tintuc.php" method="post">
<?php
require 'dbcon.php';
$id = $_GET["id"];
$sql = "select * from tintuc where matin = ".$id;
$result = mysql_query($sql);
if($row = mysql_fetch_array($result)){
?>
<div>Mã tin</div>

<input type="text" name="matin" value="<?php echo $row[0]?>"
readonly><br>
<div>Mã loại</div>
<?php require 'select.php';?><br>
<div>Tên tin</div>
<input type="text" name="tentin" value="<?php echo $row[2]?>"><br>
<div>Tóm tắt</div><br>
<textarea name="tomtat" ><?php echo $row[3]?></textarea>
<script type="text/javascript">
CKEDITOR.replace( 'tomtat' );
</script>
<br>
<div>Nội dung</div><br>
<textarea name="noidung" ><?php echo $row[4]?></textarea>
<script type="text/javascript">
CKEDITOR.replace( 'noidung' );
</script>
<br>
<div>Hình ảnh</div>
<input type="text" name="hinhanh" value="<?php echo $row[5]?>"><br>
<div>Tác giả</div>
<input type="text" name="tacgia" value="<?php echo $row[6]?>"><br>
<div>Tin nổi bật</div>
<input type="text" name="tinnoibat" value="<?php echo $row[7]?>"><br>
<div>Tin đọc nhiều</div>
<input type="text" name="tindocnhieu" value="<?php echo $row[8]?>"><br>
<div>Trạng thái</div>
<input type="text" name="trangthai" value="<?php echo $row[9]?>"><br>
<?php
}
?>
<input class="button" type="submit" value="Lưu thay đổi">
<input class="button" type="reset" value="Hủy">
</form>
</body>
</html>