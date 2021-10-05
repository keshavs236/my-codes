<?php

/* multidimenstionarray array

*/

// example

echo 
"
<style>
table,th,td{
border: 1px solid black;
border-spacing: 5px;
border-collapse: collapse;
}
</style>
<table><h1>
<tr>
<th>Name</th>
<th>Maths</th>
<th>Science</th>
<th>S.St</th>
<th>IT</th></h1>
";
$y=array(array('Keshav',26,'july',1997,22),
		array('Rishabh',21,'july',1998,21),
		array('Suraj',12,'november',2000,19));
foreach($y as $a){echo "</tr> <tr>"; 
foreach($a as $b){ echo "<td>".$b ."</td>";
}}
echo "</tr>
</table>"
?>