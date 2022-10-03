<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("test2.txt", "r") or die("Unable to open file!");
$data= fread($myfile,filesize("test2.txt"));
echo $data;
fclose($myfile);
?>

</body>
</html>