<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

    <link rel="stylesheet" href="../css/formstyle.css">
</head>
<body>
		<script src="../js/login.js"></script>

	<form method="post" action="../controller/logCheck.php" name="myForm" onclick="return validateForm()">
		
		<div class="formdesign" id="username">
            Username: <input type="text" name="username" required><b><span class="formerrorcheck"> </span></b>
        </div>
        <div class="formdesign" id="password">
            Password: <input type="password" name="password" required><b><span class="formerrorcheck"> </span></b>
        </div>

					<td>
					<div id="d2">
						<input type="submit" name="submit" value="Submit"> 
				    </div>
				    </td>
				    <td>
						<a href="signup.php">Signup</a>
					
					</td>
				</tr>
			</table>
	</form>
</body>
</html>
