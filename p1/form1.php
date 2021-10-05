<?php
session_start();
ob_start();
error_reporting(0);
    if($_SESSION['userid'] == session_id())
    {
        echo "welcome to you<br>";
        echo "<a href='logout.php'>Logout</a>";
    }
    else
    {
        header('location:login.php');
    }


ob_end_clean();

//for delete code using checkboxes
include 'DBconnection.php'; 

	if(!empty($_POST['check_list'])){
		foreach($_POST['check_list'] as $s){
			$query="delete from form_info where Name='$s';";
			$result=mysqli_query($db,$query);
		}
	}


//for inserting the given form data into sql
$Name=$_POST["name"]; 
$Email=$_POST["email"];
$Mobile=$_POST["mobile"];
$City=$_POST["city"];
$Age=$_POST["age"];
session_start();
$s="";


// define variables and set to empty values
$nameErr = $emailErr = $mobileErr = $cityErr = $ageErr ="";
$name = $email = $mobile = $city = $age ="";
$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
	$nameErr = "";	
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
	  //die();
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	$emailErr = "";
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	  //die();
    }
  }
    
  if (empty($_POST["mobile"])) {
    $mobileErr = "mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
	$mobileErr = "";
    if (!preg_match("/^[0-9]{10}+$/",$mobile)) {
      $wmobileErr = "Invalid mobile"; 
	 // die();
    }
  }

  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
	$cityErr = "";
    // check if city only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed"; 
	  //die();
    }
  }

  if (empty($_POST["age"])) {
    $ageErr = "age is required";
  } else {
    $age = test_input($_POST["age"]);
	$ageErr = "";
    if (!preg_match("/^[0-9]+$/",$age)) {
      $ageErr = "Invalid age"; 
	  //die();
    }
  }
  if($nameErr == "" && $emailErr == "" && $mobileErr == "" && $cityErr == "" &&$ageErr == ""){
	$flag=1;
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($nameErr == "" && $emailErr == "" && $mobileErr == "" && $cityErr == "" &&$ageErr == "" && $flag == 1){
$query = "insert into form_info(Name,Email,Mobile,City,Age) values('$Name','$Email',$Mobile,'$City',$Age)"; 
$result = mysqli_query($db,$query);
$flag=0;
if($result){
	$s="success";
header("Location: form1.php");
die();
}
else{
	$s="Tip: Name must be Unique";
}
}	

?>

<!DOCTYPE HTML>
<html>
<head>
<style>
table,th,td{
border: 1px solid black;
border-spacing: 5px;
border-collapse: collapse;
}
.error {color: #FF0000;}
</style>
</head>
<body>
<center><h2>Form Entry</h2>	
<p><span class="error">* required field</span></p></center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Name :</td>
<td> <input type="text" name="name" value="<?php echo $name;?>" size="48" > 
  <span class="error">* <?php echo $nameErr;?></span>
</td>
</tr>
<tr>
<td> Email :</td>
<td> <input type="text" name="email" value="<?php echo $email;?>" size="48" > 
	<span class="error">* <?php echo $emailErr;?></span>
</td>
</tr>
<tr>
<td> Mobile :</td>
<td> <input type="text" name="mobile" value="<?php echo $mobile;?>" size="48"> 
	<span class="error">* <?php echo $mobileErr;?></span>
 </td>
</tr>
<tr>
<td> City :</td>
<td> <input type="text" name="city" value="<?php echo $city;?>" size="48"> 
	<span class="error">* <?php echo $cityErr;?></span>
 </td>
</tr>
<tr>
<td> Age : </td>
<td> <input type="text" name="age" value="<?php echo $age;?>" size="48"> 
	<span class="error">* <?php echo $ageErr;?></span>
 </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="button" onclick="window.location.href='display.php';" value="Display">
<input type="button" onclick="window.location.href='logout.php';" value="logout">
</td>
</tr>
</table>
</form>
<center><h4>
<?php echo $s; 
//echo $nameErr, $emailErr, $mobileErr, $cityErr, $ageErr;
?>
</h4>	</center>
<h2>Display</h2>
<form action = "form1.php" method="post">
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
</body>
</html>