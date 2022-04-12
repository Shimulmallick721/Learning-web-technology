<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>

	<link rel="stylesheet" type="text/css" href="../model/style.css">
</head>
<body>
	<form method="post" action="../controller/regCheck.php">
		<fieldset>
			<legend>Sign Up</legend>
			<table>
				<tr>
					<td><div id="d1">Username</div></td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td><div id="d1">Password</div></td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td><div id="d5">Confirm Password</div></td>
					<td><input type="password" name="repass" value=""></td>
				</tr>
				<tr>
					<td><div id="d1">Email</div></td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<div id="d2">
						<input type="submit" name="signup" value="Submit"> 
					</div>
						<a href="login.php"><div id="d3">Login</div></a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>