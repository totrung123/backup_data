<style type="text/css">
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a {
    text-decoration: none;
}

a:hover {
    color: #FF00FF;
}

/* mouse over link */
a:link.css,
a:visited.css {
    display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    //background-color: #98bf21;
    background-color: #00a6eb;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover.css,
a:active.css {
    background-color: #7A991A;
}
</style>
<table width=100%>
    <tr>
        <td style="background: #00a6eb">
            <div id="main_nav">
                <ul>
                    <li><a class="css" href="index.php">Trang chủ</a></li>
                    <?php
require '../admin/dbcon.php';
$sql = "select * from loaitin";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)) {
?>
                    <li><a class="css" href="loaitin.php?id=<?php echo
$row[0]?>"><?php echo $row[1]?></a></li>
                    <?php
}
mysqli_close($con);
?>
                </ul>
            </div>
        </td>
    </tr>
</table>