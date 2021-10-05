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
$y=array(array('Keshav',76,78,80,95),
		array('Rishabh',80,85,87,89),
		array('Suraj',92,94,96,98));
foreach($y as $a){echo "</tr> <tr>"; 
foreach($a as $b){ echo "<td>".$b ."</td>";
}}
echo "</tr>
</table>"
?>