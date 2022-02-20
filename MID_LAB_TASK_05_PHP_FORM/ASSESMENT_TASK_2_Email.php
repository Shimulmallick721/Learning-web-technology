<?php
	if(isset($_post['submit'])){
	  $email = $_post['email'];
	  echo "<h1><i> Enter your mail, $email</i></h1>";

    }
?>
<html>
<head>
	<title>Email</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset align="Left">
			<legend>EMAIL</legend>
		
			<table align="center">
				<tr>
					<td colspan="2" align="left">  </td>

				</tr>
				<tr>
					<td><input type="email" name="email" value=""> </td>
				</tr>
				
				<tr>
					<td colspan="2" align="left">
						<hr>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>	
		</fieldset>
		
	</form>
</body>
</html>