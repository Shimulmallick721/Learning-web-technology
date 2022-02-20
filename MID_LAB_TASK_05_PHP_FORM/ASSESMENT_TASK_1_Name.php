<?php
	if(isset($_post['submit'])){
	  $name = $_post['name'];
	  echo "<h1><i> Enter your name, $name</i></h1>";

    }
?>
<html>
<head>
	<title>Name</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset align="Left">
			<legend>NAME</legend>

		
			<table align="center">
				<tr>
					<td colspan="2" align="left"> </td>

				</tr>
				<tr>
					<td><input type="text" name="myname" value="" /> </td>
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