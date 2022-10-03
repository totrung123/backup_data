<table style="margin-bottom: 10px;">
<?php
require '../admin/dbcon.php';
$sql = "select tentin,tomtat,hinhanh from TinTuc";
//echo $sql;
CSE485 – Công nghệ Web Khoa CNTT – Trường ĐH Thuỷ lợi
19
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
?>
<tr >
<td><img src="../<?php echo $row[2]?>"
width=100 height=60>
</td>
<td>
<a href=""><?php echo $row[0]?></a><br>
<?php echo $row[1]?>
</td>
</tr>
<?php
}
mysql_close($con);
?>
</table>
