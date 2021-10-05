<?php

/* multidimenstionarray array

*/

// example

$x[3]=(1,2,3); 
$y[3]=(3,2,1);
$z[3][3]=(0,0,0,0,0,0,0,0,0);

for($i=0;$i<3;$i++){
	for($j=0;$j<3;$j++){
		$z[$i][$j]=$x[i]*$y[j];
	}
}

for($i=0;$i<3;$i++){
	for($j=0;$j<3;$j++){
		echo $z[$i][$j]." ";
	}
	echo "  "
}
/*
if($x<$y&&$x<$z){
 echo $x." is lowest  ";
 }else if($y<$x&&$y<$z){
 echo $y." is lowest  ";
 }
 else
	 echo $z." is lowest  ";
*/


?>