<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = $_POST['id'];
		$name = $_POST['name'];
		
		require_once('dbConnect.php');
		
		$sql = "UPDATE user_detail SET name = '$name' WHERE id = $id;";
		
		if(mysqli_query($con,$sql)){
			echo 'User Updated Successfully';
		}else{
			echo 'Could Not Update User Try Again';
		}
		
		mysqli_close($con);
	}