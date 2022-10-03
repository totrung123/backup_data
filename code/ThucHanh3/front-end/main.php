<table style="margin-bottom: 10px;">
    <?php
require '../admin/dbcon.php';
$sql = "select tentin,tomtat,hinhanh from TinTuc";
//echo $sql;
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
?>
    <tr>
        <td><img src="../<?php echo $row[2]?>" width=100 height=60>
        </td>
        <td>
            <a href=""><?php echo $row[0]?></a><br>
            <?php echo $row[1]?>
        </td>
    </tr>
    <?php
}
mysqli_close($con);
?>
</table>