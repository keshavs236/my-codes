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
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>Age</th></h1>
";
$y=array(array('Keshav','keshav@gmail.com',9911173692,'Noida',22),
		array('Rishabh','rishbh@gmail.com',9911123456,'Noida',20),
		array('Suraj','suraj@gmail.com',9911145678,'Noida',18));
foreach($y as $a){echo "</tr> <tr>"; 
foreach($a as $b){ echo "<td>".$b ."&nbsp</td>";
}}
echo "</tr>
</table>"
?>