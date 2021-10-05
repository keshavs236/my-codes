<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "w") or die("Unable to open file!");
$txt="john Doe\n";
fwrite($myfile,$txt);
$txt="jane Doe\n";
fwrite($myfile,$txt);
fclose($myfile);
$myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

</body>
</html>