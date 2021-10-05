<?php

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
include 'DBconnection.php';	
$query= 'select * from form_info';
$result = mysqli_query($db,$query);

		
foreach($y as $a){echo "</tr> <tr>"; 
foreach($a as $b){ echo "<td>".$b ."&nbsp</td>";
}}
echo "</tr>
</table>"
?>