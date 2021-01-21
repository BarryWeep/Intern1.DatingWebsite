<?php 
require_once 'supportive_php/connection.php';
?>                        
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/owncss.css" rel='stylesheet' type='text/css' />
<!---css--->
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/ownwork.js"></script>
<!---js--->
<!---fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<!---fonts-->

<style>
table, th, td {
  border: 4px solid black;
  width: 1900px;
  margin:auto;
}
</style>

<body>

	<div class="header-section">
		<div class="container">
			<div class="head-top">
				<div  align="center">
					<img src="./images/logos/logo.jpg" width=auto height="282" >
				</div>
			</div>
		</div>
	</div>
	<h1 style="text-align: center">Main Page</h1>
	<table>
		<tr>
			<th>Activities:</th>
			<th>Images for activitities</th>
		</tr>
		<tr>
			<td>
				<form>
					<label for="fname">Title :</label><br>
					<input type="text" id="fname" name="fname"><br>
					<label for="lname">Brief :</label><br>
					<textarea type="text" id="lname" name="lname"></textarea><br>
					<label for="lname">Description :</label><br>
					<textarea type="text" id="lname" name="lname"></textarea><br>
					<label for="lname">Link:</label><br>
					<input type="text" id="lname" name="lname"><br>
					<input type="submit" value="Submit">
				</form>
			</td>
			<td>$100</td>
		</tr>
</table>
	
</body>




<?php

	
	mysqli_close($conn);
?>


