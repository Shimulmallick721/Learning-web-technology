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

	<a href="create.php"> New Registration </a> |
	<a href="../controller/logout.php"> Logout </a> |

	<br>
<td>
	<a href="bride.php"> Bridal Accessories </a> |
	<a href="groom.php"> Groom Accessories </a> |
	<a href="exclusiveproduct.php"> Exclusive Product  </a> |
	<a href="cart.php"> Cart </a> |
	<a href="wishlist.php"> Wish List </a> |
	<a href="about.php"> About Us </a> |
</td>
	


	
</body>
</html>
