<!DOCTYPE html>
<html>
<body>
<?php


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n end of file";
fwrite($myfile, $txt);
fclose($myfile);




$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>" ;
}
fclose($myfile);
?>
</body>
</html>