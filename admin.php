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
  width: 1200px;
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
			<th>Activities: (Don't use the sign ')</th>
			<th>Images for activitities</th>
		</tr>
		<tr>
			<td>
				<form action="admin.php" method="post" >
					<label>Title : (please no longer than 7 words)</label><br>
					<input name = "title"><br>
					<label>Brief :</label><br>
					<textarea name = "Brief"></textarea><br>
					<label>Description :</label><br>
					<textarea name = " Description"></textarea><br>
					<label>Link:</label><br>
					<input name="Link"><br>
					<input name = "submit_activities" type="submit">
				</form>
			</td>
			<td>$100</td>
		</tr>
	</table>
	<?php
		if(isset($_POST['submit_activities']))
		{
			$title = $_POST['title'];
			$brief = $_POST['Brief'];
			$description = $_POST['Description'];
			$link = $_POST['Link'];
			if (mysqli_query($conn,"INSERT INTO activities (title,brief,description,update_date,link)VALUES ('$title','$brief','$description',now(),'$link')")) 
									{
										echo '<script language="javascript">';
										echo 'alert("information updated successfully")';
										echo '</script>';
									} 
									else 
									{
										echo '<script language="javascript">';
										echo 'alert("upload was failed, please try again")';
										echo '</script>';
									}
		}
	?>
	<br/>
	<br/>
	<br/>
	<br/>
	<table style="text-align: center">
		<tr>
			<th>Overall description for meet you:</th>
		</tr>
		<tr>
			<td>
				<form action="admin.php" method="post">
					<label>Description (Don't use the sign '):</label><br>
					<textarea type="text" name="desall" style="width: 900px; height: 300px"></textarea><br>
					<input type="submit" name="Submit_description" >
				</form>
			</td>
		</tr>
	</table>
	<?php
		if(isset($_POST['Submit_description']))
		{
			$desc = $_POST['desall'];
			mysqli_query($conn,"Delete from meetyoudescription");
			if (mysqli_query($conn,"INSERT INTO meetyoudescription (Decription)VALUES ('$desc')")) 
			{
				echo '<script language="javascript">';
				echo 'alert("information updated successfully")';
				echo '</script>';
			} 
			else 
			{
				echo '<script language="javascript">';
				echo 'alert("upload was failed, please try again")';
				echo '</script>';
			}
		}
	?>
	<br/>
	<br/>
	<br/>
	<br/>
	<h1 style="text-align: center">Upload new matcher</h1>
	<table>
		<tr>
			<th>Females</th>
			<th>Males</th>
		</tr>
		<tr>
			<td>
				<form action="admin.php" method="post">
					<label for="fname">User ID : </label><br>
					<input type="text" id="fname" name="UserID"><br>
					<label for="lname">User Name :</label><br>
					<input type="text" id="fname" name="UserName"><br>
					<label for="lname">Real Name :</label><br>
					<input type="text" id="fname" name="RealName"><br>
					<label for="lname">Wechat :</label><br>
					<input type="text" id="fname" name="Wechat"><br>
					<label for="lname">location :</label><br>
					<input type="text" id="fname" name="Location"><br>
					<label for="lname">Age :</label><br>
					<input type="text" id="fname" name="Age"><br>
					<label for="lname">Occupation :</label><br>
					<input type="text" id="fname" name="Occupation"><br>
					<input type="submit" value="Submit" name="submit_female">
				</form>
				<?php
					if(isset($_POST['submit_female']))
					{
							$usdid = $_POST['UserID'];
							$usdname = $_POST['UserName'];
							$realname = $_POST['RealName'];
							$wechat = $_POST['Wechat'];
							$location = $_POST['Location'];
							$age= $_POST['Age'];
							$occupation = $_POST['Occupation'];
						if (mysqli_query($conn,"INSERT INTO female (UserID,UserName,RealName,Gender,Wechat,location,Age,Occupation)
						VALUES ('$usdid','$usdname','$realname','female','$wechat','$location','$age','$occupation')"))
						{
							echo '<script language="javascript">';
							echo 'alert("information updated successfully")';
							echo '</script>';
						} 
						else 
						{
							echo '<script language="javascript">';
							echo 'alert("upload was failed, please try again")';
							echo '</script>';
						}
					}
				?>
			</td>
			<td>
				<form action="admin.php" method="post">
					<label for="fname">User ID : </label><br>
					<input type="text" id="fname" name="User_ID_male"><br>
					<label for="lname">User Name :</label><br>
					<input type="text" id="fname" name="User_Name_male"><br>
					<label for="lname">Real Name :</label><br>
					<input type="text" id="fname" name="Real_Name_male"><br>
					<label for="lname">Wechat :</label><br>
					<input type="text" id="fname" name="Wechat_male"><br>
					<label for="lname">location :</label><br>
					<input type="text" id="fname" name="Location_male"><br>
					<label for="lname">Age :</label><br>
					<input type="text" id="fname" name="Age_male"><br>
					<label for="lname">Occupation :</label><br>
					<input type="text" id="fname" name="Occupation_male"><br>
					<input type="submit" value="Submit" name="submit_male">
				</form>
				</form>
				<?php
					if(isset($_POST['submit_male']))
					{
							$usdid = $_POST['User_ID_male'];
							$usdname = $_POST['User_Name_male'];
							$realname = $_POST['Real_Name_male'];
							$wechat = $_POST['Wechat_male'];
							$location = $_POST['Location_male'];
							$age= $_POST['Age_male'];
							$occupation = $_POST['Occupation_male'];
						if (mysqli_query($conn,"INSERT INTO male (UserID,UserName,RealName,Gender,Wechat,location,Age,Occupation)
						VALUES ('$usdid','$usdname','$realname','male','$wechat','$location','$age','$occupation')"))
						{
							echo '<script language="javascript">';
							echo 'alert("information updated successfully")';
							echo '</script>';
						} 
						else 
						{
							echo '<script language="javascript">';
							echo 'alert("upload was failed, please try again")';
							echo '</script>';
						}
					}
				?>
			</td>
		</tr>
		<tr>
			<th>Upload the female photos</th>
			<th>Upload the male photos</th>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Submit">
			</td>
			<td>
				<input type="submit" value="Submit">
			</td>
		</tr>
		<tr>
			<th>Delete the last female : 
				<form action="admin.php" method="post"  >
					<input type="submit" name= "deletelastfemale" value="Delete">
				</form>
			</th>
			<?php 
				if(isset($_POST['deletelastfemale']))
				{
					if(mysqli_query($conn,"DELETE FROM female ORDER BY UserIndex DESC LIMIT 1"))
					{
						echo '<script language="javascript">';
						echo 'alert("information deleted successfully")';
						echo '</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("delete was failed, please try again")';
						echo '</script>';
					}
				}
			?>
			<th>Delete the last male : 
			<form method="post" action="admin.php">
				<input type="submit" name="deletelastmale"value="Delete">
			</form>
			</th>
			
			<?php 
				if(isset($_POST['deletelastmale']))
				{
					if(mysqli_query($conn,"DELETE FROM male ORDER BY UserIndex DESC LIMIT 1"))
					{
						echo '<script language="javascript">';
						echo 'alert("information deleted successfully")';
						echo '</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("delete was failed, please try again")';
						echo '</script>';
					}
				}
			?>			
		</tr>
	</table>
	</br>
	</br>
	</br>
	</br>
	<table style="text-align: center">
		<tr>
			<th>upload new post/successful case:</th>
		</tr>
		<tr>
			<td>
				<form action="admin.php" method="post">
					<label>Post_title/case_title:</label></br>
					<input type="text" name="posttitle"><br>
					<label>Link</label></br>
					<label>(if it donesn't connect to external website,you don't need to change it):</label><br>
					<input type="text" name="linkpost" value = "activities.php"></br>
					<label>Post_description:</label></br>
					<textarea type="text" name="postdescri"></textarea></br>
					<input type="submit" name="postsubmit" value="Submit">
				</form>
			</td>
			<?php 
				if(isset($_POST['postsubmit']))
				{
					$posttitle = $_POST['posttitle'];
					$postdesc = $_POST['postdescri'];
					$linkpo = $_POST['linkpost'];

					if(mysqli_query($conn,"INSERT INTO posts (upload_date,Post_title,Post_description,Link) VALUES (NOW(),'$posttitle','$postdesc','$linkpo')"))
					{
						echo '<script language="javascript">';
						echo 'alert("information update successfully")';
						echo '</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("the update was failed, please try again")';
						echo '</script>';
					}
					
				}
			?>
		</tr>
		<tr>
			<th>
				<form method="post" action="admin.php">
				Delete the last post or successful case  <input type="submit" name="successfulcase" value="Delete">
				</form>
			</th>
			<?php 
				if(isset($_POST['successfulcase']))
				{
					if(mysqli_query($conn,"DELETE FROM posts ORDER BY Post_index DESC LIMIT 1"))
					{
						echo '<script language="javascript">';
						echo 'alert("information deleted successfully")';
						echo '</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("delete was failed, please try again")';
						echo '</script>';
					}
				}
			?>			
		</tr>
	</table>
	
	</br>
	</br>
	</br>
	</br>
	</br>
	<table style="text-align: center">
	  <tr>
		<th>hoster information edit (plz dont use sign ')
	  </tr>
	  <tr>
		<td>
			<form action="admin.php" method="post">
			<label>Hoster Name : </label><br>
			<input type= "text" name="hostername"><br>
			<label>Hoster Email : </label><br>
			<input type= "text" name="hosteremail"><br>
			<label>Company : </label><br>
			<input type= "text" name="Companyname"><br>
			<label>Mobile : </label><br>
			<input type= "text" name="moblienumber"><br>
			<label>Wechat : </label><br>
			<input type= "text" name="wechatnumber"><br>
			<label>Address: </label><br>
			<input type= "text" name="hostaddress"><br>
			<input type="submit" name="hostsubmit"><br>
			</form>
		</td>
	  </tr>
	</table>
	
	<?php 
		if(isset($_POST['hostsubmit']))
		{
			mysqli_query($conn,"DELETE FROM hosterinformation");
			$hostername = $_POST['hostername'];
			$hostersemail = $_POST['hosteremail'];
			$company =$_POST['companyname'];
			$Mobile =$_POST['moblienumber'];
			$wechatHoster =$_POST['wechatnumber'];
			$hosteraddress=$_POST['hostaddress'];
			
			if(mysqli_query($conn,"INSERT INTO hosterinformation (Name,email,Company,mobile,wechat,address)VALUES('$hostername','$email','$company','$Mobile','$wechatHoster','$hosteraddress')"))
			{
						echo '<script language="javascript">';
						echo 'alert("information updated successfully")';
						echo '</script>';
			}
			else
			{
						echo '<script language="javascript">';
						echo 'alert("update was failed, please try again")';
						echo '</script>';
			}
			
			
		
		}
		
	?>
</body>




<?php

	
	mysqli_close($conn);
?>


