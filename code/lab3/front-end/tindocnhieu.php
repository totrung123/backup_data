<table width="100%" frame="border">
<tr style="margin-left:5px;" ><td style="width:100%; backgroundcolor:#00a6eb; color:white;font-weight:bold">&nbsp; Tin đọc nhiều</td></tr>
<?php
require '../admin/dbcon.php';
$sql = "select * from tintuc";
$result = mysql_query($sql);
$i=0;
while ($row = mysql_fetch_array($result)) {
?>
<tr>
<td><a href="tintuc_chitiet.php?id=<?php echo
$row[0]?>">&nbsp;<?php echo $row[2]?></a></td>
</tr>
<?php
}
mysql_close($con);
?>
</table>