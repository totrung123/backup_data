<table width="100%" frame="border">
    <tr style="margin-left:5px;">
        <td style="width:100%; backgroundcolor:#00a6eb; color:white;font-weight:bold">&nbsp; Tin đọc nhiều</td>
    </tr>
    <?php
require '../admin/dbcon.php';
$sql = "select * from tintuc";
$result = mysqli_query($con,$sql);
$i=0;
while ($row = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><a href="tintuc_chitiet.php?id=<?php echo
$row[0]?>">&nbsp;<?php echo $row[2]?></a></td>
    </tr>
    <?php
}
mysqli_close($con);
?>
</table>