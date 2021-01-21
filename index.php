<?php 
require_once 'supportive_php/connection.php';
?>

<?php

/*
	$sql_one = 'SELECT * FROM news Where ID = 1';
	$display_one = mysqli_query ($conn,$sql_one);
	$news_one = mysqli_fetch_all($display_one, MYSQLI_ASSOC);
	
	$sql_two = 'SELECT * FROM news Where ID = 2';
	$display_two = mysqli_query ($conn,$sql_two);
	$news_two = mysqli_fetch_all($display_two, MYSQLI_ASSOC);
	
	
	$sql_three = 'SELECT * FROM news Where ID = 3';
	$display_three = mysqli_query ($conn,$sql_three);
	$news_three = mysqli_fetch_all($display_three, MYSQLI_ASSOC);
	
	
	$sql_four  = 'SELECT * FROM news Where ID = 4';
	$display_four = mysqli_query ($conn,$sql_four);
	$news_four = mysqli_fetch_all($display_four, MYSQLI_ASSOC);
	
	$sql_post = 'SELECT * FROM post';
	$display_post = mysqli_query ($conn,$sql_post);
	$posts = mysqli_fetch_all($display_post,MYSQLI_ASSOC);
	*/
	// activities//
	$sql_activities = 'SELECT * FROM activities ORDER BY consequence DESC';
	$display_activities = mysqli_query ($conn,$sql_activities);
	$row_activities = mysqli_num_rows($display_activities);
	//////////////////////////////////////////////////////////////
	
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
								<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="blog.php">Activities</a></li>
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
					<div class="offer-grids">
						<div class="col-md-6 offer-grid">
							<div class="offer-grid1">
								<div class="offer1">
									<div class="offer-left">
										<a href="Personal.html" class="mask"><img src="images/a3.jpg" class="img-responsive zoom-img" alt=""/></a>
									</div>
									<div class="offer-right">
										<h5><label id= "first_name_one"></label> </h5>
										<p><label>Gender interested: </label><span id = "gender_one"></span></p> 
										<p><label>Location: </label><span id= "country_one"></span></p> 
										<p><label>Age: </label><span id = "age_one"></span></p>  
										<p><label>Occupation: </label><span id="occupation_one"></span></p> 
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
							<div class="col-md-6 offer-grid">
								<div class="offer-grid1">
									<div class="offer1">
										<div class="offer-left">
											<a href="Personal.html" class="mask"><img src="images/a2.jpg" class="img-responsive zoom-img" alt=""/></a>
									</div>
										<div class="offer-right">
											<h5><label id= "first_name_two"></label></h5>
											<p><label>Gender interested: </label><span id= "gender_two"> </span></p> 
											<p><label>Location: </label><span id = "country_two"> </span></p> 
											<p><label>Age: </label><span id= "age_two"></span></p>  
											<p><label>Occupation: </label><span id="occupation_two"></span></p> 
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
					<div class="offer-grids">
						<div class="col-md-6 offer-grid">
							<div class="offer-grid1">
			
								<div class="offer1">
									<div class="offer-left">
										<a href="Personal.html" class="mask"><img src="images/a.jpg" class="img-responsive zoom-img" alt=""/></a>
									</div>
									<div class="offer-right">
											<h5><label id= "first_name_three"></label></h5>
										<p><label>Gender interested: </label><span id= "gender_three"> </span></p> 
										<p><label>Location: </label><span id ="country_three"> </span></p> 
										<p><label>Age: </label><span id ="age_three"> </span></p>  
										<p><label>Occupation: </label><span id ="occupation_three"></span></p> 
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
							<div class="col-md-6 offer-grid">
								<div class="offer-grid1">
									<div class="offer1">
										<div class="offer-left">
											<a href="Personal.html" class="mask"><img src="images/a4.jpg" class="img-responsive zoom-img" alt=""/></a>
									</div>
										<div class="offer-right">
											<h5><label id="first_name_four"></label></h5>
										<p><label>Gender interested: </label><span id="gender_four"> </span></p> 
										<p><label>Location: </label><span id="country_four"> </span></p> 
										<p><label>Age: </label><span id ="age_four"> </span></p>  
										<p><label>Occupation: </label><span id="occupation_four"></span></p> 
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
					<div class="offer-grids">
						<div class="col-md-6 offer-grid">
							<div class="offer-grid1">
								<div class="offer1">
									<div class="offer-left">
										<a href="Personal.html" class="mask"><img src="images/a5.jpg" class="img-responsive zoom-img" alt=""/></a>
									</div>
									<div class="offer-right">
										<h5><label id= "first_name_five"></label></h5>
										<p><label>Gender interested: </label><span id="gender_five"> </span></p> 
										<p><label>Location: </label><span id="country_five"> </span></p> 
										<p><label>Age: </label><span id="age_five"> </span></p>  
										<p><label>Occupation: </label><span id="occupation_five"></span></p> 
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-6 offer-grid">
								<div class="offer-grid1">
									<div class="offer1">
										<div class="offer-left">
											<a href="Personal.html" class="mask"><img src="images/a6.jpg" class="img-responsive zoom-img" alt=""/></a>
									</div>
										<div class="offer-right">
											<h5><label id="first_name_six"> </label></h5>
											<p><label>Gender interested: </label><span id="gender_six"> </span></p> 
											<p><label>Location: </label><span id="country_six"> </span></p> 
											<p><label>Age: </label><span id="age_six"> </span></p>  
											<p><label>Occupation: </label><span id="occupation_six"></span></p> 
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---Featured Properties--->
				<div class="feature-section">
					<div class="container">
						<h3>Activities</h3>
						<div class="feature-grids">
							<?php 
								unlink('8762.jpg');
								for ($x=0;$x<4;$x++)
									{?>
										<?php  $activities = mysqli_fetch_array($display_activities, MYSQLI_ASSOC); ?>
										<div class="col-md-3 feature-grid">
										<img src="images/newone.jpg" class="img-responsive" alt="/">
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
									<p id="aboutMeSub"></p>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Recent Posts</h4>
									<ul>
										<?php foreach ($posts as $post) { ?>
										<li><a href=<?php echo htmlspecialchars($post['Link']); ?>><?php echo htmlspecialchars($post['Post_name']); ?></a></li>
										<?php } ?>
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
</html>>

<?php mysqli_close($conn); ?>