<?php
	if(isset($_post['submit'])){
	  $group = $_post['group'];
	  echo "<h1><i> Select Group, $group</i></h1>";

    }
?>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset align="Left">
			<legend>DEGREE</legend>

				<select> name="group">
					<option> A+  </option>
					<option> A-  </option>
					<option> B+  </option>
					<option> B-  </option>
					<option> AB+ </option>
					<option> Ab- </option>
					<option> O+  </option>
					<option> O-  </option>
				</select>
			<table>

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
				
