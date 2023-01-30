<?php
session_start();

	include("connection.php");	

	if(isset($_POST['login']))
	{
		//SOMETHING WAS POSTED
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if(!empty($email) && !empty($password))
		   {
			   
			//read from database
		
			$query="select * from trainee where email = '$email' limit 1";
			
			$result = mysqli_query($con, $query);
			
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				
				if($user_data['passwordd'] == $password)
				{
					$query=mysqli_query($con,"SELECT * FROM trainee WHERE email = '$email' AND passwordd = '$password'");
					$num_rows=mysqli_num_rows($query);
					$row=mysqli_fetch_array($query);
					$_SESSION["email"]=$row['email'];
					header("Location: indexUser.html");
					die;
				}
			}
		}
			echo "<script>alert('Wrong email or password!');</script>";
		   }
?>