<?php
	if(isset($_post['submit'])){
	  $dob = $_post['dob'];
	  echo "<h1><i> Enter Date Of Birth, $dob</i></h1>";

    }
?>
<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>

	<form method="POST" action="" >
		<fieldset align="Left" >
			<legend>Date Of Birth</legend>
			<table align="center" >
				<tr>
					
					<td><input type="date" name="dob" value=""> </td>
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
				
