<?php
include 'DBConnection.php';		
	if(!empty($_POST['check_list'])){
		foreach($_POST['check_list'] as $selected){
			$query="delete from form_info where Name='$selected';";
			$result=mysqli_query($db,$query);
			var_dump($result);
			echo $selected."</br>";
		}
	}
?>
