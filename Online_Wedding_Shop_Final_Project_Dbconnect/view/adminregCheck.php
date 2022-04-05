<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null)
		{
			$user = $username."|".$password."|".$email;
			$file = fopen("admin.txt", 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: adminlogin.php');
		}
		else{
			echo "null submission..";
		}
	}	
?>