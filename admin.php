<?php 
require_once 'supportive_php/connection.php';


?>                        
<!---css--->
<link href="./css/owncss.css" rel='stylesheet' type='text/css'/>
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



<style type="text/css">
html,body{
            width:100%;
            height:100%
        }
        body{
            background:url("./images/background/background.jpg") no-repeat;
            background-size: 100%;
        }
		
table, th, td {
  border: 4px solid black;
  width: 1200px;
  margin:auto;
}


</style>



<html>

<!-- <body style="background-image: url(./images/background/background.jpg); no-repeat 50% 0;">-->
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
<!-----------------------------------------------------------------------------------activity ----------------------------->
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
					<input name="Link" value="activities"><br>
					<input name = "submit_activities" type="submit">
				</form>
			</td>
			<td>
				<form style= "text-align:center" action="admin.php" method = "post" enctype= "multipart/form-data">
					<label>Upload activities Files</label>
					<input style="margin: 5 auto" type= "file" name="activity_img"/>
					</br>
					</br>
					</br>
					<input type= "submit" name= "activitimage_upload"/>
				</form>
			</td>
		</tr>
		<tr>
			<th> Delete last activities : </th>
			<th style = "text-align: center;height: 100px"><form action="admin.php" method="post">
				<input type = "submit" value ="delete" name = "deleteActivties" style= " height: 50px">
				</form>
			</th>
		</tr>
	</table>
	<?php
		/////////////////////////////////upload  activtiy
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
		
		////////////////////////////////upload image
		if(isset($_POST['activitimage_upload']))
		{
				 $file_name = $_FILES['activity_img']['name'];
				 $file_type = $_FILES['activity_img']['type'];
				 $file_location = $_FILES['activity_img']['tmp_name'];
				 
				 if(empty($file_location))
				 {
					 echo '<script language="javascript">';
					 echo 'alert("plz upload img")';
					 echo '</script>';
					 exit();
				 }
				 
				 $data = addslashes(fread(fopen($file_location,"r"),filesize($file_location)));
				 $getConsequence = mysqli_query($conn,"SELECT consequence FROM activities ORDER BY consequence DESC LIMIT 1");
				 $resultConsequence = mysqli_fetch_array($getConsequence,MYSQLI_ASSOC);
				 
				 if(empty($getConsequence))
				 {
					 echo '<script language="javascript">';
					 echo 'alert("no data ")';
					 echo '</script>';
					 exit();
				 }
				 $number = $resultConsequence['consequence'];
				$actimge= mysqli_query($conn,"INSERT INTO imgact(Consequence,bin_date,filename,filetype)VALUES('$number','$data','$file_name','$file_type')");

				if($actimge)
				{	 echo '<script>';
					 echo 'alert("successful ")';
					 echo '</script>';
				}
				else
				{   echo '<script>';
					echo 'alert("fail")';
					echo '</script>';
				}
				 
		}	
		/////////////////////////////////////////////////////////////////delete
		if(isset($_POST['deleteActivties']))
		{
			
			if(mysqli_query($conn,"DELETE FROM imgact ORDER BY consequence DESC LIMIT 1"))
			{
				echo '<script language="javascript">';
				echo 'alert("information deleted successfully")';
				echo '</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("deleting was failed, please try again")';
				echo '</script>';
			}
			
			if(mysqli_query($conn,"DELETE FROM activities ORDER BY consequence DESC LIMIT 1"))
			{
				echo '<script language="javascript">';
				echo 'alert("information deleted successfully")';
				echo '</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("deleting was failed, please try again")';
				echo '</script>';
			}
		}
	?>
	<!-----------------------------------------------------activities------------------------------------------->
	</br>
	</br>
	</br>
	</br>
	</br>
	<!-----------------------------------------------------post ------------------------------------------------>
	<table style="text-align: center">
		<tr>
			<th>upload new post/successful case : (Don't use the sign ' )</th>
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
		</tr>
		<tr>
			<th>
				<form method="post" action="admin.php">
				Delete the last post or successful case  <input type="submit" name="successfulcase" value="Delete">
				</form>
			</th>
		</tr>
		<tr>
			<th>
				<form  style= "text-align:center" action="admin.php" method = "post" enctype= "multipart/form-data">
					<label>Upload post image </label>
					<input style="margin: 5 auto" type= "file" name="post_img"/>
					</br>
					</br>
					</br>
					<input type= "submit" name= "imgpost_upload"/>
				</form>
			</th>
		</tr>
	</table>
			<?php 
				if(isset($_POST['imgpost_upload']))
				{
						 $file_name_post = $_FILES['post_img']['name'];
						 $file_type_post = $_FILES['post_img']['type'];
						 $file_location_post = $_FILES['post_img']['tmp_name'];
						 
						 if(empty($file_location_post))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("plz upload img")';
							 echo '</script>';
							 exit();
						 }
						 
						 $data_post = addslashes(fread(fopen($file_location_post,"r"),filesize($file_location_post)));
						 $getConsequence_post = mysqli_query($conn,"SELECT Post_index FROM posts ORDER BY Post_index DESC LIMIT 1");
						 $resultConsequence_post = mysqli_fetch_array($getConsequence_post,MYSQLI_ASSOC);
						 
						 if(empty($getConsequence_post))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("no data ")';
							 echo '</script>';
							 exit();
						 }
						$number_post = $resultConsequence_post['Post_index'];
						$actimge_post = mysqli_query($conn,"INSERT INTO postsimg(Post_index,bin_date,filename,filetype)VALUES('$number_post','$data_post','$file_name_post','$file_type_post')");

						if($actimge_post)
						{	 echo '<script>';
							 echo 'alert("successful ")';
							 echo '</script>';
						}
						else
						{   echo '<script>';
							echo 'alert("fail")';
							echo '</script>';
						}
						
				}
				
				
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
				
				if(isset($_POST['successfulcase']))
				{
					if(mysqli_query($conn,"DELETE FROM postsimg ORDER BY Post_index DESC LIMIT 1"))
					{
						echo '<script language="javascript">';
						echo 'alert("information deleted successfully1")';
						echo '</script>';
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("delete was failed, please try again1")';
						echo '</script>';
					}
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
<!-------------------------------------------------------------------------------------------overall description-------------->
	<br/>
	<br/>
	<br/>
	<br/>
	<table style="text-align: center">
		<tr>
			<th>Overall description for meet you : (Don't use the sign ' )</th>
		</tr>
		<tr>
			<td>
				<form action="admin.php" method="post">
					<label>Description:</label><br>
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
<!----------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------male female----->
	<br/>
	<br/>
	<br/>
	<br/>
	<h1 style="text-align: center">Upload new matcher (Don't use the sign ' )</h1>
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
					<label>User ID : </label><br>
					<input type="text" id="fname" name="User_ID_male"><br>
					<label>User Name :</label><br>
					<input type="text" id="fname" name="User_Name_male"><br>
					<label>Real Name :</label><br>
					<input type="text" id="fname" name="Real_Name_male"><br>
					<label>Wechat :</label><br>
					<input type="text" id="fname" name="Wechat_male"><br>
					<label> location :</label><br>
					<input type="text" id="fname" name="Location_male"><br>
					<label>Age :</label><br>
					<input type="text" id="fname" name="Age_male"><br>
					<label>Occupation :</label><br>
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
			<th>Upload the female photos </th>
			<th>Upload the male photos </th>

		</tr>
		<tr>
			<td>
				<form action="admin.php" method ="post" enctype= "multipart/form-data">
					<label>input female user ID : </label><br>
					<input type="text" name="UserID_female"><br>
					<label>Upload post image : </label>
					<input  type= "file" name="FemaleImageUpload"/>
						</br>
						</br>
						</br>
					<input type="submit" name= "FemaleImgSubmit" value="Submit" enctype= "multipart/form-data">
				</form>
			</td>
			<td>
				<form action="admin.php" method="post" enctype= "multipart/form-data">
					<label>input male user ID : </label><br>
					<input type="text" name="UserID_male"><br>
					<label>Upload post image : </label>
					<input type= "file" name="male_img"/>
					</br>
					</br>
					</br>
					<input type="submit" name= "MaleImgSubmit" value="Submit">
				</form>
			</td>
<?php
//////////////////////////////////////////////upload photo////////////////////////
	if(isset($_POST['FemaleImgSubmit']))
				{
						 $file_name_female = $_FILES['FemaleImageUpload']['name'];
						 $file_type_female = $_FILES['FemaleImageUpload']['type'];
						 $filelocationfemale = $_FILES['FemaleImageUpload']['tmp_name'];

						 if(empty($filelocationfemale))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("plz upload img123123")';
							 echo '</script>';
							 exit();
						 }
						 
						 
						 $userID_femle = $_POST['UserID_female'];
						 if(empty($userID_femle))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("plz fill userID")';
							 echo '</script>';
							 exit();
						 }
						 
						 
						$data_female = addslashes(fread(fopen($filelocationfemale,"r"),filesize($filelocationfemale)));
						 
						$actimg_female_count = mysqli_num_rows(mysqli_query($conn,"SELECT* FROM femaleimg WHERE UserID = '$userID_femle'"));
						
						
						if($actimg_female_count+1>5)
						{
							 echo '<script language="javascript">';
							 echo 'alert("you only can upload 5 photos for one person")';
							 echo '</script>';
							 exit();
						}
						 
						$actimge_female = mysqli_query($conn,"INSERT INTO femaleimg(bin_date,filename,filetype,UserID)VALUES('$data_female','$file_name_female','$file_type_female','$userID_femle')");
				
						
						if($actimge_female)
						{	 echo '<script language="javascript">';
							 echo 'alert("successful ")';
							 echo '</script>';
						}
						else
						{   echo '<script language="javascript">';
							echo 'alert("fail")';
							echo '</script>';
						}
						
				}
?>
<?php
////////////////////////////////////////////////////////////////female


///////////////////////////////////////////////////////////////male

	if(isset($_POST['MaleImgSubmit']))
				{
						 $file_name_male = $_FILES['male_img']['name'];
						 $file_type_male = $_FILES['male_img']['type'];
						 $filelocationmale = $_FILES['male_img']['tmp_name'];

						 if(empty($filelocationmale))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("plz upload img")';
							 echo '</script>';
							 exit();
						 }
						 
						 
						 $userID_male = $_POST['UserID_male'];
						 if(empty($userID_male))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("plz fill userID")';
							 echo '</script>';
							 exit();
						 }
						 
						 
						$data_male = addslashes(fread(fopen($filelocationmale,"r"),filesize($filelocationmale)));
						 
						$actimg_male_count = mysqli_num_rows(mysqli_query($conn,"SELECT* FROM maleimgtable WHERE UserID = '$userID_male'"));
						
						if($actimg_male_count+1>5)
						{
							 echo '<script language="javascript">';
							 echo 'alert("you only can upload 5 photos for one person")';
							 echo '</script>';
							 exit();
						}
						 
						$actimge_male = mysqli_query($conn,"INSERT INTO maleimgtable(bin_date,filename,filetype,UserID)VALUES('$data_male','$file_name_male','$file_type_male','$userID_male')");
				
						
						if($actimge_male)
						{	 echo '<script language="javascript">';
							 echo 'alert("successful ")';
							 echo '</script>';
						}
						else
						{   echo '<script language="javascript">';
							echo 'alert("fail")';
							echo '</script>';
						}
						
				}

/////////////////////////////////////////////////////////////////////////////////
?>
		</tr>
		<tr>
			<th>Delete the last female : </br>
				<form action="admin.php" method="post"  >
					<label>Input UserId you want to delete : </label>
					<input type="text" name ="deletefemaleID"></br>
					<input type="submit" name= "deletelastfemale" value="Delete">
				</form>
			</th>
			<?php 
				if(isset($_POST['deletelastfemale']))
				{
					$deleteID = $_POST['deletefemaleID'];
					if(empty($deleteID))
					{
						echo '<script language="javascript">';
						echo 'alert("please input User ID you want to delete")';
						echo '</script>';
						exit();
					}
					mysqli_query($conn,"DELETE FROM femaleimg WHERE UserID = '$deleteID'");

					
					if(mysqli_query($conn,"DELETE FROM female WHERE UserID ='$deleteID'"))
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
			<th>Delete the last male : </br>
			<form method="post" action="admin.php">
				<label>Input UserId you want to delete : </label>
				<input type="text" name ="deletemaleID"></br>
				<input type="submit" name="deletelastmale"value="Delete">
			</form>
			</th>
			
			<?php 
				if(isset($_POST['deletelastmale']))
				{
					$deleteID_male = $_POST['deletemaleID'];
					if(empty($deleteID))
					{
						echo '<script language="javascript">';
						echo 'alert("please input User ID you want to delete")';
						echo '</script>';
						exit();
					}
					mysqli_query($conn,"DELETE FROM maleimgtable WHERE UserID = '$deleteID_male'");

					
					if(mysqli_query($conn,"DELETE FROM male WHERE UserID ='$deleteID_male'"))
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
<!------------------------------------------------------------------------------------------------------------>

	
	</br>
	</br>
	</br>
	</br>
	</br>
	<table style="text-align: center">
	  <tr>
		<th>hoster information edit (plz dont use sign ' )</th>
		<th>Upload BarCode Image </th>
	  </tr>
	  <tr>
		<th>
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
			<label>Second Wechat : </label><br>
			<input type= "text" name="wechatnumbertwo"><br>
			<label>Address: </label><br>
			<input type= "text" name="hostaddress"><br>
			<label>Second Address: </label><br>
			<input type= "text" name="hostaddresstwo"><br>
			<input type="submit" name="hostsubmit"><br>
			</form>
		</th>
	  	<th>
			<form action="admin.php" method="post" enctype= "multipart/form-data">
				<label>Upload barcode image : </label>
				<input type= "file" name="barcode_img"/>
				</br>
				</br>
				</br>
				<input type="submit" name= "barcodeimgsub" value="Submit">
				</form>
		</th>
	  </tr>
	</table>
	
	<?php 
	
		if(isset($_POST['barcodeimgsub']))
		{
				 $file_name_barcode = $_FILES['barcode_img']['name'];
				 $file_type_barcode = $_FILES['barcode_img']['type'];
				 $filelocationbarcode = $_FILES['barcode_img']['tmp_name'];

						 if(empty($filelocationbarcode))
						 {
							 echo '<script language="javascript">';
							 echo 'alert("plz upload img")';
							 echo '</script>';
							 exit();
						 }
						 
						$actimg_delete = Mysqli_query($conn,"DELETE FROM barcode");
						$data_barcode = addslashes(fread(fopen($filelocationbarcode,"r"),filesize($filelocationbarcode)));
						
						
						$actimge_barcode = mysqli_query($conn,"INSERT INTO barcode (bin_date,filename,filetype)VALUES('$data_barcode','$file_name_barcode','$file_type_barcode')");
				
						
						if($actimge_barcode)
						{	
							echo '<script language="javascript">';
							echo 'alert("successful ")';
							echo '</script>';
						}
						else
						{   echo '<script language="javascript">';
							echo 'alert("fail")';
							echo '</script>';
						}
						
		}

			
///////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
		if(isset($_POST['hostsubmit']))
		{
			mysqli_query($conn,"DELETE FROM hosterinformation");
			$hostername = $_POST['hostername'];
			$hostersemail = $_POST['hosteremail'];
			$company =$_POST['Companyname'];
			$Mobile =$_POST['moblienumber'];
			$wechatHoster =$_POST['wechatnumber'];
			$wechatHostertwo =$_POST['wechatnumbertwo'];
			$hosteraddress=$_POST['hostaddress'];
			$hosteraddresstwo=$_POST['hostaddresstwo'];
			
			if(mysqli_query($conn,"INSERT INTO hosterinformation (Name,email,Company,mobile,wechat,wechatTwo,address,addressTwo)VALUES('$hostername','$hostersemail','$company','$Mobile','$wechatHoster','$wechatHostertwo','$hosteraddress','$hosteraddresstwo')"))
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
</html>


<?php

	
	mysqli_close($conn);
?>


