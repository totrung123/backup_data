<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
</svg>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
a:hover {color:#FF00FF;} /* mouse over link */
a, img{text-decoration:none;color:blue}
tr{background-color:gray;color:white;font-weight:bold;}
tr.id1{background-color:#EEEEEE;color:black;font-weight:normal;}
tr.id2{background-color:#DDDDDD;color:black;font-weight:normal;}
</style>
</head>
<body>
<a href="them_tintuc.php">Thêm tin tức</a>
<table width="100%" align=center>
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
require_once 'dbcon.php';
$sql = "SELECT * FROM tintuc";
            $stmt = $conn->prepare($sql); //MySQL hãy chuẩn bị thực thi
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC); //Tập bản ghi
            if($stmt->rowCount() > 0){
                foreach($results as $row){
?>
<tr class="id<?php if($i++ % 2==0) echo "1"; else echo "2";?>">

<td><?php echo $row['matin']?></td>
<td><?php echo $row['maloai']?></td>
<td><?php echo $row['tentin']?></td>
<td><?php echo $row['tomtat']?></td>
<td><?php echo $row['noidung']?></td>
<td><img src="../<?php echo $row['hinhanh']?>" width=10 height=10></td>
<td><?php echo $row['tacgia']?></td>
<td><?php echo $row['noibat']?></td>
<td><?php echo $row['docnhieu']?></td>
<td><?php echo $row['trangthai']?></td>
<td><a href="sua_tintuc.php?id=<?php echo $row['matin']?>">Sửa</a></td>
<td><a href="xoa_tintuc.php?id=<?php echo $row['matin']?>">Xóa</a></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>