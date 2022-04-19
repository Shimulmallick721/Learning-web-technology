<?php 
	session_start();

    $current_username = $_SESSION['cur_username'];

    
    $json = $_GET['myjson'];
	$student = json_decode($json, true);
	$username = $student['username'];
    $email = $student['email'];

    $ok = true;

    if(empty($username))
    {
    	$username = "user name cannot be blank";
    	$ok = false;
    }
    $student['username'] = $username;
    if(empty($email))
    {
    	$email = "email cannot be blank";
    	$ok = false;
    }
    $student['email'] = $email;
    if($ok == true)
    {
    	$student['ok'] = true;
    	$current_username['email'] = $email;
    	$current_username['username'] = $username;
    	$_SESSION['current_username'] = $current_username;
    }
	echo json_encode($student);
   
?>