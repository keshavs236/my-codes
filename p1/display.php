<?php
session_start();
$db = mysqli_connect("localhost","root","","books");
ob_start();
    if($_SESSION['userid'] == session_id())
    {
        echo "welcome to you<br>";
        echo "<a href='logout.php'>Logout</a>";
    }
    else
    {
        header('location:adminlogin.php');
    }
ob_end_clean();
$i=0;


include 'DBconnection.php'; 

	if(!empty($_POST['check_list'])){
		foreach($_POST['check_list'] as $s){
			$query="delete from form_info where Name='$s';";
			$result=mysqli_query($db,$query);
		}
	}



$Name=$_POST["Name"]; 
$Email=$_POST["Email"];
$Mobile=$_POST["Mobile"];
$City=$_POST["City"];
$Age=$_POST["Age"];
session_start();


$query = "insert into form_info(Name,Email,Mobile,City,Age) values('$Name','$Email',$Mobile,'$City',$Age)"; 
$result = mysqli_query($db,$query);
if($result){
header("Location: form1.php");
die();
}
?>

<!DOCTYPE HTML>
<html><head>
<style>
table,th,td{
border: 1px solid black;
border-spacing: 5px;
border-collapse: collapse;
}
</style>
</head>
<body>
<center><h2>Display</h2></center>	
<form action = "display.php" method="post">
<table><h1>
<tr>
<th></th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>Age</th></h1>
<center>
<?php
include 'DBConnection.php';	
$query= 'select * from form_info';
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)) {
?>
	</tr> <tr>
	<td><input type="checkbox" name="check_list[]" value="<?php echo $row["Name"]; ?>"> </td><?php foreach($row as $b){ echo "<td>".$b ."&nbsp</td>"; } ?>
<?php } } ?>

</tr>
</table>
<input type="submit" value="Delete">
</form>
<br>
<?php
if (isset($_SESSION['msg']))
{
    echo '*'.$_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
</center>
</body>
</html>