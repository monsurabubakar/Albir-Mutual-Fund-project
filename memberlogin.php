				 
<?php
session_start();
mysqli_connect('localhost', 'root', '', 'albirr_investment_club');
$conn=mysqli_connect('localhost', 'root', '', 'albirr_investment_club');

//if ($conn) {
//	echo "db connected";
//}else {echo mysqli_connect_error();
//}

if ($_POST) {
$username = $_POST['username'];
$password = $_POST['password'];
$query= "SELECT * FROM members WHERE member_username='$username' AND member_password=md5('$password')";

$result = mysqli_query($conn, "$query");
$total = mysqli_num_rows($result);

if ($total>0) {
$_SESSION['username'] = $username;
header("location:profile.php");
}else {
header("location:newmember.php");
		
}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>member login :: Albir investment club Bootstrap Responsive Website | member login :: Monsur</title>    
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	 
<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->
</head>
<body>
	<div class="w3-slider">	
	<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container-fluid">
				<div class="w3ls-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+234 803-820-6436</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:bakierhyme@gmail.com">monsur@albir.com</a></li>
					</ul>
				</div>
				<div class="logo text-center">
					<h1><a href="index.php">Albir Investment Club</a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
		<div class="w3layouts-inner-banner">
		</div>
	</div>
	<div class="clearfix"></div>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="dropdown">
					   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members Portal <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="memberlogin.php">Member Login</a></li>
						<li><a href="newmember.php">New Member signup</a></li>
					  </ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //main-content -->
		<div class="wthree-main-content">
					<div class="container">
				<h2 class="agile-inner-title">Member Login</h2>
			
<div class='col-md-9' style='height:430px; padding:40px'>

<div class='col-md-7'>

<form class='form-horizontal' action="" method="POST">
	<div class='form-group'>
    <label class='control-label' for='pd'>Username: </label>
    <input type='text' class='form-control' name='username' id='username'>
       </div>

       <div class='form-group'>
    <label class='control-label' for='pd'>Password: </label>
    <input type='password' class='form-control' name='password' id='pwd'>
       </div>

       <button type="submit" class="btn btn-success" onchange="check();">Login</button>
       <div id="response"></div>
       <a href='recoverpass.php'><button type="button" class="btn btn-warning">Forgot password?</a></button>
       
</form>
		</div>
		</div>
		</div>
		
		<!-- //main-content -->
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="w3ls-footer-grids">					
					<div class="col-md-3 w3l-footer-grid">
						<h4>ADDRESS</h4>
						<ul>
							<li>Albir Investment Club</li>
							<li>Block 4, Akesan st, Akesan Bust stop,
						  Lasu Ojo Road, Lagos </li>
							<li>Hours: Mon-Fri 9am - 6:00pm</li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>GET IN TOUCH</h4>
						<ul>
							<li>Tel: +234 803-820-6436</li>
							<li>Fax: +000 803-820-6436</li>
							<li>Email: <a href="mailto:bakierhyme@gmail.com">monsur@albirr.com </a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>SUBSCRIBE NOW</h4>
						<form action="#" method="post">
							<input type="email" name="email" placeholder="Enter your email" required="required">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>Copy Rights</h4>
						<p>&copy; 2017 Albir Invesment. All Rights Reserved | Design by <a href="https://www.linkedin.com/in/abubakar-monsur-omotayo-mcpn-ccnp-2a2a1522/"> Monsur Abubakar</a></p>
							</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
		<!-- //footer -->
			

</body>
</html>