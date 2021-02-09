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
	/////////////////////////////////////////////////////////////
	
	//hoster
	$sql_hoster = 'SELECT * FROM hosterinformation';
	$display_hoster = mysqli_query ($conn,$sql_hoster);
	$hosters = mysqli_fetch_array($display_hoster,MYSQLI_ASSOC);
	
	function langswitch()
{
	if($_GET["lang"] == "eng")
	{
			$json_string = file_get_contents('json/en.json');
			$GLOBALS['data'] = json_decode($json_string, true);
	}
	elseif($_GET["lang"] == "zho")
	{
				$json_string = file_get_contents('json/zh.json');
				$GLOBALS['data'] = json_decode($json_string, true);
	}
	else
	{
		$json_string = file_get_contents('json/zh.json');
		$GLOBALS['data'] = json_decode($json_string, true);
	}
}

langswitch();

	
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
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
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<!-- pop-up -->
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


</head>
<body style="background-image: url(./images/background/background.jpg);">
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
						<div class="language">
							<a href="contact.php?lang=eng">English</a>
							<a href="contact.php?lang=zho">中文</a>
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
								<li><a href="index.php"><?php echo $GLOBALS['data']["HEAD_HOME"]?></a></li>
								<li><a href="activities.php"><?php echo $GLOBALS['data']["HEAD_ACTIVITIES"]?></a></li>
								<li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find The One<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="male.php"><?php echo $GLOBALS['data']["HEAD_HIM"]?></a></li>
												<li><a href="female.php"><?php echo $GLOBALS['data']["HEAD_HER"]?></a></li>
											</ul>
											
								</li>
								<li class="active" ><a href="contact.php"><?php echo $GLOBALS['data']["HEAD_CONTACT"]?><span class="sr-only">(current)</span></a></li>
							</ul>
							<div>
						</div>
						
					</nav>
				</div>
			</div>
		<!---banner--->
		<div class="banner-section">
			<div class="container">
				<h2>Contact</h2>
				<div  align="center">
					<img src="./images/logos/logo.jpg" width="270" height="282" >
				</div>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="contact-section">
				<div class="container">
					<div class="contact-grids">
						<div class="col-md-8 contact-grid">
							<h5>Fill out the form and we will get back to you within 24 hours</h5>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<div class="clearfix"></div>
							<form action="contact.php" method="post">
								<input name ="fullname" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input name ="wechat" type="text" value="Wechat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<input name ="phone" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<input name ="email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">	
								<textarea name ="comment" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
								<input type="submit" value="Submit" name="submit">
							</form>
							<?php 
								if(isset($_POST['submit']))
								{
									$name = $_POST['fullname'];
									$wechat =$_POST['wechat'];
									$phone = $_POST['phone'];
									$email = $_POST['email'];
									$comment =$_POST['comment'];
									
									//mysql_query("INSERT INTO feedback ('fullname','wechat','phone','comment')VALUES ($_POST['fullname'],$_POST['wechat'],$_POST['phone'],$_POST['email'],$_POST['comment'])");
									
									if (mysqli_query($conn,"INSERT INTO feedback (fullname,wechat,phone,email,comment_feedback)VALUES ('$name','$wechat','$phone','$email','$comment')")) 
									{
										echo '<script language="javascript">';
										echo 'alert("message successfully sent")';
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
						</div>
						<div class="col-md-4 contact-grid1">
							<h4>Hoster</h4>
							<div class="contact-top">
								<div class="agent-img">
									<img src="images/a3.jpg" class="img-responsive" alt="">
								</div>
								<div class="agent-info">
									<h5><?php echo htmlspecialchars($hosters['Name'])?></h5>
									<h6><?php echo htmlspecialchars($hosters['Company'])?></h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<ul>
									<li><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> <?php echo $GLOBALS['data']["MOBILE"]?> : <?php echo htmlspecialchars($hosters['mobile'])?></li>
									<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <?php echo $GLOBALS['data']["HEAD_EMAIL"]?> : <?php echo htmlspecialchars($hosters['email'])?></li>
									<li><i class="glyphicon glyphicon-cloud" aria-hidden="true"></i> <?php echo $GLOBALS['data']["WECHAT"]?> : <?php echo htmlspecialchars($hosters['wechat'])?></li>
									<li><i class="glyphicon glyphicon-cloud" aria-hidden="true"></i><?php echo $GLOBALS['data']["WECHATTWO"]?> : <?php echo htmlspecialchars($hosters['wechatTwo'])?></li>
									<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i> <?php echo $GLOBALS['data']["HEAD_ADDRESS"]?> : <?php echo htmlspecialchars($hosters['address'])?></li>
									<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i><?php echo $GLOBALS['data']["ADDRESSTWO"]?> : <?php echo htmlspecialchars($hosters['addressTwo'])?></li>
									<li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i> Barcode : </li>
									<img style="height:150px;width:200px;" src="8762.jpg" alt="">
								</ul>

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
										$row_activities = 5;
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
										<li><a href="contact.php"><?php echo $GLOBALS['data']["HEAD_NAME"]?> : <?php echo htmlspecialchars($hosters['Name'])?></a></li>
										<li><a href="contact.php"><?php echo $GLOBALS['data']["HEAD_EMAIL"]?> : <?php echo htmlspecialchars($hosters['email'])?></a></li>
										<li><a href="contact.php">Wechat : <?php echo htmlspecialchars($hosters['wechat'])?></a></li>
										<li><a href="contact.php"><?php echo $GLOBALS['data']["HEAD_ADDRESS"]?> : <?php echo htmlspecialchars($hosters['address'])?></a></li>
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>

						</div>
					</div>
					<!---footer--->
			<!--copy-->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p id= "copyright_main"><?php echo $GLOBALS['data']["AuthorizationBy"]?><a href="" >&copy;2021<?php echo $GLOBALS['data']["MEETYOU"]?></a></p>
						</div>
					</div>
				<!--copy-->
		<!--copy-->
		<?php 	mysqli_close($conn); ?>
</body>
</html>