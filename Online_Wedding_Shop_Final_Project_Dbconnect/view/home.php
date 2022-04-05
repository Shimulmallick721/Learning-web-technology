<?php
	$title = "Home Page";

	require('header.php');
?>
	
	<h1>Welcome To Online Wedding Shop!, <?php echo $_SESSION['username']; ?></h1>
	
	<a href="create.php"> Create User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logout.php"> Logout</a>

	<br>
<td>
	<a href="bride.php"> Bridal Accessories </a> |
	<a href="groom.php"> Groom Accessories </a> |
	<a href="exclusiveproduct.php"> Exclusive Product  </a> |
	<a href="cart.php"> Cart </a> |
	<a href="wishlist.php"> Wish List </a> |
	<a href="about.php"> About Us </a> |

<?php
	include('footer.php');
?>