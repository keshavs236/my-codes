<!DOCTYPE HTML>
<html>
<body>
<?php
$myfile=fopen("newfile.txt","w") or die("Unable to open file!");
$x=57;
$y=108;
$z=$x+$y;
fwrite($myfile, $z);
fclose($myfile);
$myfile=fopen("newfile.txt","r") or die("Unable to open file!");
//echo $z;
echo fgets($myfile);
fclose($myfile);
?>
</body>
</html> 