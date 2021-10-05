<?php

/* multidimenstionarray array

*/

// example

$x=array(2,4,6,9);
foreach($x as $v){
	echo "<h1>$v </H1> <br>";
}


$y=array(array(3,5,2,7),array(1,2,5,3), array(3,4,7,2));
foreach($y as $a){echo " <br/>"; 
foreach($a as $b){ echo $b ."&nbsp &nbsp";
}}

?>