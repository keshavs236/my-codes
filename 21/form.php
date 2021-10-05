
<?php

echo 
"
<html>
<head>
<style>
table,th,td{
border: 1px solid black;
border-spacing: 5px;
border-collapse: collapse;
}
</style>
</head>
<body>
<table><h1>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>Age</th></h1>
";
$db = mysqli_connect('localhost','root','','form');
$query= 'select * from form_info';
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0) {
while($row = mysqli_fetch_assoc($result)){echo	 "</tr> <tr>"; 
foreach($row as $b){ echo "<td>".$b ."&nbsp</td>";
}}
echo "</tr>
</table>
</body>
</html>
";
}?>