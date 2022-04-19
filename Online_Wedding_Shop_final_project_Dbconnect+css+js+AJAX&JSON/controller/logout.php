<?php

	session_start();
	//unset($_SESSION['flag']);
	setcookie('status', 'true', time()-10, '/');

	header('location: ../view/login.php');

?>