<?php 
require_once 'supportive_php/connection.php';
?>

<?php

	// activities_banner//
	$sql_activities = 'SELECT * FROM activities ORDER BY consequence DESC';
	$display_activities = mysqli_query ($conn,$sql_activities);
	$row_activities = mysqli_num_rows($display_activities);
	//////////////////////////////////////////////////////////////
	//MeetyouDescription//
	$sql_meetyou = 'SELECT * FROM meetyoudescription ORDER BY indexOne DESC';
	$display_meetyou = mysqli_query ($conn,$sql_meetyou);
	$meetyoudes = mysqli_fetch_array($display_meetyou, MYSQLI_ASSOC);
	//////////////////////////////////////////////////////////////
	//post
	$sql_post = 'SELECT * FROM posts ORDER BY Post_index DESC';
	$display_post = mysqli_query ($conn,$sql_post);
	$row_post = mysqli_num_rows($display_post);
	/////////////////////////////////////////////////////////////
	
	
	//female select
	$sql_female = 'SELECT * FROM female ORDER BY UserIndex DESC';
	$display_female = mysqli_query ($conn,$sql_female);
	$row_female = mysqli_num_rows($display_female);
	/////////////////////////////////////////////////////////////
	
	//male select
	$sql_male = 'SELECT * FROM male ORDER BY UserIndex DESC';
	$display_male = mysqli_query ($conn,$sql_male);
	$row_male = mysqli_num_rows($display_male);
	/////////////////////////////////////////////////////////////
	
	//hoster
	$sql_hoster = 'SELECT * FROM hosterinformation';
	$display_hoster = mysqli_query ($conn,$sql_hoster);
	$hosters = mysqli_fetch_array($display_hoster,MYSQLI_ASSOC);
	/////////////////////////////////////////////////////////////
	
//	print_r($activities);
	
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
<!--
<style type="text/css">
html,body{
            width:100%;
            height:100%
        }
        body{
            background:url("./images/background/background.jpg") no-repeat;
            background-size: 100%;
        }
}
</style>
-->

</head>
<body>
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
								<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
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
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<div class="slid banner1">
						  <div class="caption">
								<h3>Understand You</h3>
								<p>The problem with persons have a lack of love is they don't know love looks like,<br/> so its easy from they get tricked,<br/> to see thing aren't there,<br/> but i guess we are lying to ourselves all the time</p>
								<a href="#" class="button">know more</a>
							</div>
					</div>
					<div class="slid banner2">
						  <div class="caption">
								<h3>Face your weakness</h3>
								<p>in our pitifuly short lives,<br> we are all going to lose anything eventually, <br/>why not just be more brave, <br/>to climb a mountain,<br/> to chase a unrealistic dream or<br/> to exhaustively love a person</p>
								<a href="#" class="button">know more</a>
						  </div>
					</div>
					<div class="slid banner3">
						<div class="caption">
							<h3>Try to believe</h3>
							<p>It doesn’t matter if the guy is perfect or the girl is perfect, <br/>as long as they are perfect for each other.<br/></p>
							<a href="#" class="button">know more</a>
						</div>
					</div>
				</ul>
			</div>
		</div>
		<div class="copyrights">Authorized by<a href="" >Meet You</a></div>
<!---banner--->
	<div class="content">		
			<div class="offering">
				<div class="container">
					<h3>Popular Matchers</h3>
				<!--                     start                       -->
				<?php
				if($row_female>$row_male)
				{
					$row_female = $row_male;
				}
				
				if($row_female>4&&$row_male>4)
				{
					$row_female = 4;
				}
				for ($x=0;$x<$row_female;$x++)
				{ ?>	
					<!-- female display -->
					<div class="offer-grids">
						<div class="col-md-6 offer-grid">
							<div class="offer-grid1">
								<div class="offer1">
									<div class="offer-left">
									
									<?php
										  $females = mysqli_fetch_array($display_female, MYSQLI_ASSOC);
										  $user_id = $females['UserID'];
										/////////////////////////////female  image
											$actimg_female = mysqli_query($conn,"SELECT * FROM femaleimg WHERE UserID ='$user_id' LIMIT 1");
											$display_actimg_female = mysqli_fetch_array($actimg_female);
											$data_female = $display_actimg_female['bin_date'];
											$type_female = $display_actimg_female['filetype'];
											
										?>
										<a href="female.php"  class="mask"><img src="data:<?php echo $type_female?>;charset=utf8;base64,<?php echo base64_encode($data_female); ?>" class="img-responsive zoom-img" alt=""/></a>
									</div>
									<div class="offer-right">
										<h5><label><?php echo htmlspecialchars($females['UserName']);?></label> </h5>
										<p><label>Gender: </label><span><?php echo htmlspecialchars($females['Gender']);?></span></p> 
										<p><label>Location: </label><span><?php echo htmlspecialchars($females['location']);?></span></p> 
										<p><label>Age: </label><span><?php echo htmlspecialchars($females['Age']);?></span></p>  
										<p><label>Occupation: </label><span><?php echo htmlspecialchars($females['Occupation']);?></span></p> 
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- male display -->
					<div class="offer-grids">
						<div class="col-md-6 offer-grid">
							<div class="offer-grid1">
								<div class="offer1">
									<div class="offer-left">
									<?php 
										  $males = mysqli_fetch_array($display_male, MYSQLI_ASSOC); 
										  $user_id_males = $males['UserID'];
										/////////////////////////////female  image
											$actimg_male = mysqli_query($conn,"SELECT * FROM maleimgtable WHERE UserID ='$user_id_males' LIMIT 1");
											$display_actimg_male = mysqli_fetch_array($actimg_male);
											$data_male = $display_actimg_male['bin_date'];
											$type_male = $display_actimg_male['filetype'];
									?>
										<a href="male.php"  class="mask"><img src="data:<?php echo $type_male?>;charset=utf8;base64,<?php echo base64_encode($data_male); ?>" class="img-responsive zoom-img" alt=""/></a>
									</div>
									<div class="offer-right">
										<h5><label><?php echo htmlspecialchars($males['UserName']); ?></label> </h5>
										<p><label>Gender: </label><span><?php echo htmlspecialchars($males['Gender']); ?></span></p> 
										<p><label>Location: </label><span><?php echo htmlspecialchars($males['location']); ?></span></p> 
										<p><label>Age: </label><span><?php echo htmlspecialchars($males['Age']); ?></span></p>  
										<p><label>Occupation: </label><span><?php echo htmlspecialchars($males['Occupation']); ?></span></p> 
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				<?php	
				} ?>
			</div>
			<!---Featured Properties--->
				<div class="feature-section">
					<div class="container">
						<h3>Activities</h3>
						<div class="feature-grids">
							<?php 
								if($row_activities>4)
								{
									$row_activities=4;
								}
								for ($x=0;$x<$row_activities;$x++)
									{?>
										<?php  $activities = mysqli_fetch_array($display_activities, MYSQLI_ASSOC); ?>
										<div class="col-md-3 feature-grid">
										<?php
		
											$getconsequnce = mysqli_query($conn,"SELECT consequence FROM activities ORDER BY consequence DESC");
											$resultconse = mysqli_fetch_array($getconsequnce,MYSQLI_ASSOC);
											$number = $resultconse['consequence'];
											$actimg = mysqli_query($conn ,"SELECT bin_date,filetype FROM imgact WHERE consequence=$number");
											$display_actimg = mysqli_fetch_array($actimg);
											$data = $display_actimg['bin_date'];
											$type = $display_actimg['filetype'];
											
										?>
										<img style =" width: 200px; height: auto"src="data:<?php echo $type?>;charset=utf8;base64,<?php echo base64_encode($data); ?>" />
										<h5><?php echo htmlspecialchars($activities['title']); ?></h5>
										<p><?php echo htmlspecialchars($activities['brief']); ?></p>
										<a href= <?php echo htmlspecialchars($activities['link']); ?>>
										<span>Know More</span></a>
										</div>
										
							<?php	}?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!---testimonials--->
					<div class="testimonials">
						<div class="container">
							<h3>Business Partner</h3>
							<span></span>
							<div id="owl-demo" class="owl-carousel">
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/businessPartner.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>TechCrunch is an American online newspaper focusing on high tech and startup companies. It was founded in June 2005 by partners of Archimedes Ventures</p>
										<h4><a href="https://techcrunch.com/">Know More</a></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
					<!---testmonials--->
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
									$display_activities_index = mysqli_query ($conn,$sql_activities);
									if($row_activities>5)
									{
										$row_activities = 5;
									}
									for ($x=0;$x<$row_activities;$x++)
									{?>
										<?php  $activitiesindex = mysqli_fetch_array($display_activities_index, MYSQLI_ASSOC); ?>
										<li><a href=""><?php echo htmlspecialchars($activitiesindex['title']); ?></a></li>
										
							<?php	}?>
										
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Recent Posts</h4>
									<ul>
									 <?php 
									 if ($row_post >5)
									 {
										 $row_post = 5;
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
