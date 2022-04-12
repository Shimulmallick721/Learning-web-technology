<?php
	$title = "User List Page";
	require('header.php');
	require_once('../model/userModel.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../model/style.css">
</head>
	<a href="home.php"><div id="d1">BackHome</div></a> 
	<a href="../controller/logout.php"><div id="d3">logout</div></a>	
	<br>
	
	<h1>User list</h1>

	<table border="1">
		<tr>
		
			<td><div id="d1">ID</div></td>
			<td><div id="d1">NAME</div></td>
			<td><div id="d1">EMAIL</div></td>
			<td><div id="d1">ACTION</div></td>
		
		</tr>
		<?php
		$users=getAllUser();
		foreach($users as $user){
	echo "
			<tr>
				<td>{$user['id']}</td>
				<td>{$user['username']}</td>
				<td>{$user['email']}</td>
				<td><a href='edit.php?id={$user['id']}'>edit</a> |
				    <a href='../controller/delete.php?id={$user['id']}'>delete</a>
				</td>
				
			</tr>";
}
?>


<?php
	require('footer.php');
?>