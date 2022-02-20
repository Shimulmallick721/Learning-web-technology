<?php
	if(isset($_post['submit'])){
	  $degree = $_post['degree'];
	  echo "<h1><i> Select Degree, $degree</i></h1>";

    }
?>
<html>
<head>
	<title>DEGREE</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset align="Left">
			<legend>DEGREE</legend>
			<table align="center">
				<tr>
					<td>
						<input type="radio" name="degree" value=""> SSC
						<input type="radio" name="degree" value=""> HSC
						<input type="radio" name="degree" value=""> BSC
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
				
