<?php 
require_once 'supportive_php/connection.php';


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Meet you</title>
<link rel="shortcut icon" href="./images/1234.ico" />
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Space Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<!-- FlexSlider -->
	 <script src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			<script>
			// Can also be used with $(document).ready()
				$(window).load(function() {
				$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
				});
				});
			</script>
			<!-- //FlexSlider-->

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


</head>
<body style="background:url(./images/background/background1.jpg);background-repeat:inherit;"> 
		<!---header--->
			<?php 
				$barcode = mysqli_query($conn,"SELECT * FROM barcode");
				$barcode_display = mysqli_fetch_array($barcode);
				$data_barcode = $barcode_display['bin_date'];
				$type_barcode  = $barcode_display['filetype'];
			?>
			<img style="position:fixed;height: auto;width:170px;bottom:15px;right:10px;display:block;" src="data:<?php echo $type_barcode?>;charset=utf8;base64,<?php echo base64_encode($data_barcode); ?>">
		
			<div class="header-section">
				<div class="container">
					<div class="head-top">
						<div class="email">
						<ul>
							<?php
								$select_main_page = Mysqli_query($conn,"SELECT * FROM hosterinformation");
								$select_main_page_show = mysqli_fetch_array($select_main_page);
							?>
							<li><i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>Wechat : <a><?php echo $select_main_page_show['wechat']; echo "/"; echo $select_main_page_show['wechatTwo']?></a></li>
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<nav class="navbar navbar-default">
					<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<div class="navbar-brand">
								<h1><a href="index.php"><span>Meet </span>You~</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="activities.php">Activities</a></li>
								<li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find The One<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="male.php">Him</a></li>
												<li><a href="female.php">Her</a></
											</ul>
								</li>
							</ul>
							<li><a href="contact.php">Contact</a></li>
							<div class="clearfix"></div>
						</div>
						
					</nav>
				</div>
			</div>
		<!---header--->
		<!---banner--->
		<div class="banner-section">
			<div class="container">
				<h2>Personal Information</h2>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="properties-section">
				<div class="container">
				<div class="properties-grids">
					<div class="col-md-9 properties-left">
						<div class="flexslider">
						<ul class="slides">
						<?php  $genderselect = $_GET['gender']; 
							   $userID = $_GET['new'];
							   if ($genderselect=="female")
							   {
								  $selection = mysqli_query($conn,"SELECT * FROM femaleimg WHERE UserID = '$userID' ");
								  while($display_actimg = mysqli_fetch_array($selection))
								  {
									 $data = $display_actimg['bin_date'];
								    $type = $display_actimg['filetype'];?>
									<li data-thumb="data:<?php echo $type?>;charset=utf8;base64,<?php echo base64_encode($data); ?>">
								   <div class="thumb-image"> <img style= "width:700px; height:auto"src="data:<?php echo $type?>;charset=utf8;base64,<?php echo base64_encode($data); ?>" data-imagezoom="true" class="img-responsive"> </div>
								  </li>
							<?php }
							 }
							   elseif ($genderselect=="male") 
							   {
								  $selection_male = mysqli_query($conn,"SELECT * FROM maleimgtable WHERE UserID = '$userID' ");
								  while($display_actimg_male = mysqli_fetch_array($selection_male))
								  {
									 $data_male = $display_actimg_male['bin_date'];
								     $type_male = $display_actimg_male['filetype'];?>
									<li data-thumb="data:<?php echo $type_male?>;charset=utf8;base64,<?php echo base64_encode($data_male); ?>">
								   <div class="thumb-image"> <img style= "width:700px; height:auto"src="data:<?php echo $type_male?>;charset=utf8;base64,<?php echo base64_encode($data_male); ?>" data-imagezoom="true" class="img-responsive"> </div>
								  </li>
							<?php }
							   }
							   else
							   {
							   }
							   
						?>
							</ul>
						</div>
						<div class="clearfix"></div>
						<div class="properties-details">
							<?php 
								$information = mysqli_query($conn,"SELECT * FROM $genderselect WHERE UserID= $userID" );
								$information_display = mysqli_fetch_array($information,MYSQLI_ASSOC);
							?>
							<div class="col-md-2 properties-detail">
								<!-- <h4><span></span></h4> -->
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="additional-details">
							<h3>Personal Information</h3>
							<ul>
								<li><span>RealName : </span><?php echo htmlspecialchars($information_display['RealName']); ?></li>
								<li><span>Wechat :  </span><?php echo htmlspecialchars($information_display['Wechat']); ?></li>
								<li><span>Email :  </span><?php echo htmlspecialchars($information_display['email']); ?></li>
								<li><span>Gender : </span><?php echo htmlspecialchars($genderselect); ?></li>
								<li><span>Age : </span><?php echo htmlspecialchars($information_display['Age']); ?> </li>
								<li><span>Country : </span><?php echo htmlspecialchars($information_display['location']); ?> </li>
								<li><span>Occupation : </span><?php echo htmlspecialchars($information_display['Occupation']); ?> </li>
							</ul>
						</div>
						<div class="note">
							<h4>Comment note : </h4>
							<p><?php 
								 if(empty($information_display['Comment']))
								 {
									 ?>This person does not have any comment note.
								<?php
								 }
								 else
								 {
								?>
								<?php echo htmlspecialchars($information_display['Comment']);
								 }

							?></p>
						</div>
					<div class="similar-grids">
						<h4>similar matcher</h4>
						
						<?php 
							$similar = mysqli_query($conn,"SELECT * FROM $genderselect EXCEPT SELECT * FROM $genderselect WHERE UserID = $userID");
							$similar_dispaly =mysqli_fetch_array($similar,MYSQLI_ASSOC);
							$rownumber = mysqli_num_rows($similar);
							$similar_ID = $similar_dispaly['UserID'];
							
							if(empty($similar_ID))
							{
								$genderselect = "nothing";
							}
							
							 if ($genderselect=="female")
							 {
								 $img_similar = mysqli_query($conn,"SELECT * FROM femaleimg WHERE UserID = $similar_ID LIMIT 1 ");
								 $img_similar_female = mysqli_fetch_array($img_similar);
								 $data_similarfemale = $img_similar_female['bin_date'];
								 $type_similarfemale = $img_similar_female['filetype'];
								 for ($x=0;$x<$rownumber;$x++)
								{ ?>
									<div class="col-md-4 similar-grid">
									<img src="data:<?php echo $type_similarfemale?>;charset=utf8;base64,<?php echo base64_encode($data_similarfemale); ?>" class="img-responsive" alt="/">
									<h5>60 Merrick Way, Miami</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer  elit,… <a href="#">Know More</a></p>
									</div>
								<?php
								}
							 }
							 elseif($genderselect=="male")
							 {
								  $img_similar_male = mysqli_query($conn,"SELECT * FROM maleimgtable WHERE UserID = $similar_ID LIMIT 1 ");
								  $img_similar_male_dis = mysqli_fetch_array($img_similar_male);
								  $data_similarmale = $img_similar_male_dis['bin_date'];
								  $type_similarmale = $img_similar_male_dis['filetype'];
								  for ($x=0;$x<$rownumber;$x++)
								{ ?>
									<div class="col-md-4 similar-grid">
									<img src="data:<?php echo $type_similarmale?>;charset=utf8;base64,<?php echo base64_encode($data_similarmale); ?>" class="img-responsive" alt="/">
									<h5>60 Merrick Way, Miami</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer  elit,… <a href="#">Know More</a></p>
									</div>
								<?php
								}
							 }
							 else
							 {
								 exit();
							 }
							
						?>
						<div class="clearfix"></div>
					</div>
					</div>
					<div class="col-md-3 properties-right">
						<div class="properties-top">
							<h4><span>User ID : </span></h4>
							<!--<img src="images/a.jpg" class="img-responsive" alt=""/> -->
							<ul>
								<li><i class="glyphicon glyphicon-comment	" aria-hidden="false"></i> UserID : <?php echo htmlspecialchars($information_display['UserID']); ?></li>
								<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i> UserName : <?php echo htmlspecialchars($information_display['UserName']); ?></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
			</div>
		</div>
			<!---footer--->
					<div class="footer-section">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About MeetYou</h4>
									<p id="aboutMeSub"></p>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Recent Posts</h4>
									<ul>
										<li><a href="#" id="postOne"></a></li>
										<li><a href="#" id="postTwo"></a></li>
										<li><a href="#" id="postThree"></a></li>
										<li><a href="#" id="postFour"></a></li>
										<li><a href="#" id="postFive"></a></li>
										<li><a id="postSix" href="#"></a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Useful links</h4>
									<ul>
										<li><a href="terms.html">Terms of Use</a></li>
										<li><a href="privacy.html">Privacy Policy</a></li>
										<li><a href="contact.html">Contact Support </a></li>
										<li><a href="faqs.html">FAQs</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Get In Touch</h4>
									<p id= "TouchOne"></p>
									<p id= "TouchTwo"></p>
									<p id= "TouchThree"></p>
									<p id= "TouchFou"><a href="#"> @mail.com</a></p>
								</div>
							<div class="clearfix"> </div>
							</div>

						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p id= "copyright_main"></p>
						</div>
					</div>
				<!--copy-->
</body>
</html>

<?php

	
	mysqli_close($conn);
?>


