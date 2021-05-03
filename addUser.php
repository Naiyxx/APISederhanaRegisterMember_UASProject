<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		require_once('dbConnect.php');
		
		$sql ="SELECT id FROM user_detail ORDER BY id ASC";

        $res = mysqli_query($con,$sql);

		$id=1;
        while($row = mysqli_fetch_array($res)){
                $id = $row['id']+1;
        }

		
		//Creating an sql query
		$sql = "INSERT INTO user_detail(name,email,password) VALUES ('$name','$email','$password')";
		
		//Importing our db connection script
		
		
		//Executing query to database
		if(mysqli_query($con,$sql)){			
			echo 'User Register Successfully';
		}else{
			echo 'Could Not Register User Try Again';
		}
		
		//Closing the database 
		mysqli_close($con);
	}