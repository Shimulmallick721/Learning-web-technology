<?php
	$title = "Edit Page";
	require('header.php');
	$connection = mysqli_connect('localhost','root', '', 'usersDB');
	$id=$_GET['id'];
	$sql="select username, password, email from users where id=$id";
	$Data=mysqli_query($connection,$sql);
	$userdata=mysqli_fetch_assoc($Data);
	$_SESSION['id']=$id;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/formstyle.css">

</head>

<body>
    <script src="../js/reg.js"></script>
	<form method="post" action="../controller/update.php" name="myForm" onclick ="return validateForm()">
		<fieldset>
			<legend>update user information ID No=<?php echo $_SESSION['id']; ?></legend>
			<h1>
	
		<div class="formdesign" id="username">
            Username: <input type="text" name="username" required><b><span class="formerrorcheck"> </span></b>
        </div>

        <div class="formdesign" id="email">
            Email: <input type="email" name="email" required><b><span class="formerrorcheck"> </span></b>
        </div>
        <div class="formdesign" id="password">
            Password: <input type="password" name="password" required><b><span class="formerrorcheck"> </span></b>
        </div>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Update"> 
						<a href="user_list.php">Back</a> |
						<a href="../upload/upload.php"> upload user information</a>

					</td>
				</tr>
			</table>
			</h1>
		</fieldset>
	</form>
	</body>
	</html>
