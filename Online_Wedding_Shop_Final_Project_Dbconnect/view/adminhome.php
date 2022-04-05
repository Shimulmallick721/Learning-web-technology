<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome To Online Wedding Shop!</h1> 
	<br>
	<h1>Admin page</h1>

	<a href="userlist.php"> Userlist </a> |
	<a href="../controller/logout.php"> Logout </a> |

	<br>
	<br>
<td>
	<a href="bride.php"> Bridal Accessories Edit | Delete </a> |
	<br>
	<br>
	<a href="groom.php"> Groom Accessories  Edit | Delete </a> |
	<br>
	<br>
	<a href="exclusiveproduct.php"> Exclusive Product  Edit | Delete </a> |
</td>
	


	
</body>
</html>
