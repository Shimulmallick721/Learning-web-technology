<?php
	if(isset($_post['submit'])){
	  $gender = $_post['gender'];
	  echo "<h1><i> Select Gender, $gender</i></h1>";

    }
?>
<html>
<head>
	<title>Gender</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset align="Left" >
			<legend>Gender</legend>
			<table align="center" >
				<tr>
					<td>
						<input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
					</td>
				</tr>
				<tr>

					<td colspan="2" align="center">
						<hr>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>	
		
	</form>
</body>
</html>
				
