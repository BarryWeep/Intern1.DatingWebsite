<?php 
require_once 'supportive_php/connection.php';
?>

<?php
	//activities 
	$sql_one = 'SELECT * FROM activities ORDER BY consequence DESC';	
	$display_one = mysqli_query ($conn,$sql_one);
	///////////////////////////////////////////////////////////////////
	//post
	$sql_post = 'SELECT *  FROM posts ORDER BY Post_index DESC';
	$display_post = mysqli_query ($conn,$sql_post);
	///////////////////////////////////////////////////////////////////
	
	//MeetyouDescription//
	$sql_meetyou = 'SELECT * FROM meetyoudescription ORDER BY indexOne DESC';
	$display_meetyou = mysqli_query ($conn,$sql_meetyou);
	$meetyoudes = mysqli_fetch_array($display_meetyou, MYSQLI_ASSOC);
	//////////////////////////////////////////////////////////////
	
	//hoster
	$sql_hoster = 'SELECT * FROM hosterinformation';
	$display_hoster = mysqli_query ($conn,$sql_hoster);
	$hosters = mysqli_fetch_array($display_hoster,MYSQLI_ASSOC);

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
<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
	</script>
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

</head>
<body>
			<img style="position:fixed;height:150px;width:150px;bottom:15px;right:10px;display:block;" src="8762.jpg" alt="">
	
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
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="activities.php">Activities<span class="sr-only">(current)</span></a></li>
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
		<!---header--->
		<!---banner--->
		<div class="banner-section">
			<div class="container">
				<h2>Activities</h2>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="blog-section">
				<div class="container">
					<div class="blog-grids">
						<div class="col-md-9 blog-grid">
							<?php 
							$row_one = mysqli_num_rows($display_one);
							if($row_one > 4)
							{
								$row_one = 4;
							}
							for ($x=0;$x<$row_one;$x++)
							{?>
							<?php 	$activities = mysqli_fetch_array($display_one, MYSQLI_ASSOC); ?>
								<div class="blog">
									<h3><?php echo htmlspecialchars($activities['title']); ?></h3>
									<p><?php echo htmlspecialchars($activities['update_date']); ?></p>
									<a href="single.html"><img src="images/newfour.jpg" class="img-responsive" alt=""/></a>
									<p><?php echo htmlspecialchars($activities['description']); ?></p>
									<a href="<?php echo $activities['link']; ?>" class="button5 hvr-shutter-out-horizontal">Read More</a>
								</div>
								<br/>
								<br/>
							<?php
							}
							?>
						</div>
						<div class="col-md-3 blog-grid1">
							<div class="feature">
								<h4>Recent Post</h4>
								
								<?php 
								$row_post = mysqli_num_rows($display_post);
								if($row_post>5)
								{
									$row_post = 5;
								}
								for($x=0;$x<$row_post;$x++)
								{?>	
									<?php $posts = mysqli_fetch_array($display_post,MYSQLI_ASSOC); ?>
									<div class="feature-top">
										<img src="images/s4.jpg" class="img-responsive" alt="/">
										<h5><?php echo $posts['Post_title'];?></h5>
										<h6><?php echo $posts['upload_date'];?></h6>
										<p><?php echo $posts['Post_description'];?></p>
									</div>
								<?php
								}?>
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
									$display_one_one = mysqli_query($conn,$sql_one);
									$row_one_one = mysqli_num_rows($display_one_one);
									if($row_one_one >5)
									{
										$row_one_one = 5;
									}
									for ($x=0;$x<$row_one_one;$x++)
									{?>
										<?php  $activitiesindex = mysqli_fetch_array($display_one_one, MYSQLI_ASSOC); ?>
										<li><a href=""><?php echo htmlspecialchars($activitiesindex['title']); ?></a></li>
										
							<?php	}?>
										
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Recent Posts</h4>
									<ul>
									 <?php 
									 $display_post_post = mysqli_query($conn,$sql_post);
									 $row_post_post = mysqli_num_rows($display_post_post);
									 if($row_post_post>5)
									 {
										 $row_post_post = 5;
									 }
									 for ($x=0;$x<$row_post_post;$x++)
									 { ?>
										<?php $posts = mysqli_fetch_array($display_post_post,MYSQLI_ASSOC); ?>
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

<?php 	
	mysqli_close($conn);
?>
</html>