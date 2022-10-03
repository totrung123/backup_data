<table width="100%" frame="box">
    <tr>
        <td style="width:100%; background-color:#00a6eb; color:white;fontweight:bold">&nbsp; Tin nổi bật</td>
    </tr>
    <?php
require '../admin/dbcon.php';
$sql = "select matin, tentin from tintuc where noibat != 0";
$result = mysqli_query($con,$sql);
$i=0;
while ($row = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><a href="tintuc_chitiet.php?id=<?php echo
$row[0]?>">&nbsp;<?php echo $row[1]?></a></td>
    </tr>
    <?php
}
mysqli_close($con);
?>
</table>