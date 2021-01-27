<?php 
require_once 'supportive_php/connection.php';
?>

<?php
	// activities_banner//
	$sql_activities = 'SELECT * FROM activities ORDER BY consequence DESC';
	$display_activities = mysqli_query ($conn,$sql_activities);
	//////////////////////////////////////////////////////////////
	//MeetyouDescription//
	$sql_meetyou = 'SELECT * FROM meetyoudescription ORDER BY indexOne DESC';
	$display_meetyou = mysqli_query ($conn,$sql_meetyou);
	$meetyoudes = mysqli_fetch_array($display_meetyou, MYSQLI_ASSOC);
	//////////////////////////////////////////////////////////////
	//post
	$sql_post = 'SELECT * FROM posts ORDER BY Post_index DESC';
	$display_post = mysqli_query ($conn,$sql_post);
	/////////////////////////////////////////////////////////////
	
	//hoster
	$sql_hoster = 'SELECT * FROM hosterinformation';
	$display_hoster = mysqli_query ($conn,$sql_hoster);
	$hosters = mysqli_fetch_array($display_hoster,MYSQLI_ASSOC);
	/////////////////////////////////////////////////////////////

?>

<html>
<head>
<title>Male Gallery</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/owncss.css" rel='stylesheet' type='text/css' />
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
<!-- pop-up -->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
<!-- pop-up -->

</head>
<body>
		<img style="position:fixed;height:150px;width:150px;bottom:15px;right:10px;display:block;" src="8762.jpg" alt="">
		<!---header--->
			<div class="header-section">
				<div class="container">
					<div class="head-top">
						<div class="email">
						<ul>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a> </li>
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
								<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="activities.php">Activities</a></li>
								<li class="dropdown active">
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
				<h2>Gallery</h2>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="gallery-section">
				<div class="container">
					<div class="gallery-grids">
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="1">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="2">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="3">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="4">
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="gallery-grids galry">
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="5">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="6">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="7">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="8">
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="gallery-grids galry">
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="9">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="10">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="11">
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="size">
								<a href="Personal.html" class="swipebox"><span class="rollover1"> </span></a>
								<img src="images/male/a2.jpg" width="100%" height="100%" alt="12">
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
									<h4>About Meet you</h4>
									<p><?php echo htmlspecialchars($meetyoudes['Decription']); ?></p>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Activities</h4>
									<ul>
									<?php 
									$row_activities = mysqli_num_rows($display_activities);
									if($row_activities>5)
									{
										$row_activities=5;
									}
									for ($x=0;$x<$row_activities;$x++)
									{?>
										<?php  $activitiesindex = mysqli_fetch_array($display_activities, MYSQLI_ASSOC); ?>
										<li><a href=""><?php echo htmlspecialchars($activitiesindex['title']); ?></a></li>
										
							<?php	}?>
										
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Recent Posts</h4>
									<ul>
									 <?php 
									 $row_post = mysqli_num_rows($display_post);
									 if($row_post>5)
									 {
										 $row_post=5;
									 }
									 for ($x=0;$x<$row_post;$x++)
									 { ?>
										<?php $posts = mysqli_fetch_array($display_post,MYSQLI_ASSOC); ?>
										<li><a href="activities.php"><?php echo $posts['Post_title']; ?></a></li>
									<?php 
									 }?>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Get In Touch</h4>
									<ul>
										<li><a href="contact.php">Name : <?php echo htmlspecialchars($hosters['Name'])?></a></li>
										<li><a href="contact.php">Email : <?php echo htmlspecialchars($hosters['email'])?></a></li>
										<li><a href="contact.php">Wechat : <?php echo htmlspecialchars($hosters['wechat'])?></a></li>
										<li><a href="contact.php">Office : <?php echo htmlspecialchars($hosters['address'])?></a></li>
									</ul>
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
				<?php 	mysqli_close($conn); ?>

</body>
</html>