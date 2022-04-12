<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="../model/style.css">
</head>
<body>
	<form method="post" action="../controller/logCheck.php">
		<fieldset>
			<legend><div id="d2">LOGIN</div></legend>
			<table>
				<tr>
					<td><div id="d1">Username</div></td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>
					<div id="d1">Password</div>
					</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<div id="d2">
						<input type="submit" name="submit" value="Submit"> 
				    </div>
				    </td>
				    <td>
						<a href="signup.php"><div id="d3">Signup</div></a>
					
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>