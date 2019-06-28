
<?php
session_start();
mysqli_connect('localhost', 'root', '', 'albirr_investment_club');
$conn=mysqli_connect('localhost', 'root', '', 'albirr_investment_club');

if ($conn) {
	echo "DB connected";
}else {echo mysqli_connect_error();
   }

if ($_POST) {
$title = $_POST['title'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$resident = $_POST['resident'];
$office = $_POST['office'];
$state = $_POST['state'];
$country = $_POST['country'];
$occupation = $_POST['occupation'];
$account = $_POST['account'];
$bank = $_POST['bank'];
$kin = $_POST['kin'];
$pkin = $_POST['pkin'];
$username = $_POST['username'];
$password = $_POST['password'];

$query= "INSERT INTO albirr_investment_club.members SET member_title='$title', member_fname='$firstname', member_surname='$surname', member_email='$email', member_phone='$mobileno', member_residential_add='$resident', member_office_add='$office', member_state_origin='$state', member_occupation='$occupation', account_no='$account', bank_name='$bank', member_next_of_kin='$kin', member_phone_next_of_kin='$pkin', member_username='$username', member_password=md5('$password')";

$result = mysqli_query($conn, "$query")or die(mysqli_error($conn));
$total = mysqli_insert_id($conn);
header("location:regsuccess.php");

}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>newmember SignUp :: Albir investment club Bootstrap Responsive Website | newmember SignUp :: Monsur</title> 
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<!--//fonts-->
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
					<li><a href="contact.php">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- main-content -->
				<div class="container">
			<h2 class="agile-inner-title">New Member signup</h2>
              
			<div class='col-md-6'><h3 style='font-family:book antiqua'> 
  All field marked * are required </h3> </div>

  <div class='col-md-8'>
	<form class='form-horizontal' action="" method="POST">
	
	<div class='form-group'>
    <label for='title' class='control-label col-md-4'>Title: </label> 
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='title' name="title" placeholder='Mr.  Ustaz.  Sheik.  Alhaji'>
       </div>
	   </div>
	<div class='form-group'>
    <label for='firstname' class='control-label col-md-4'>Firstname: * </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='Firstname' name="Firstname" placeholder='Enter your surname'>
       </div>
	   </div>
	<div class='form-group'>
    <label for='surname' class='control-label col-md-4'>Surname: * </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='Surnam' name="surname" placeholder='Enter your firstname'>
       </div>
	   </div>
	<div class='form-group'>
    <label for='email' class='control-label col-md-4'>Email: </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='email' name="email" placeholder='Enter only a gmail account'>
       </div>
	   </div>
    <div class='form-group'>
    <label for='mobileno' class='control-label col-md-4'>Mobile No: * </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='mobileno' name="mobileno" placeholder='Enter your mobile no'>
       </div>
	   </div>
	 <div class='form-group'>
    <label for='resident' class='control-label col-md-4'>Residential Address: * </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='resident' name="resident">
       </div>
	   </div>
	 <div class='form-group'>
    <label for='office' class='control-label col-md-4'>Office Address: </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='office' name="office">
       </div>
	   </div>
	   
	 <div class='form-group'>
    <label for='origin' class='control-label col-md-4'>State of Origin: </label>
    
	<div class='col-md-8'>
		 <select class='form-control' id='origin' name="state" >
		 <option value='Abia'> Choose your state of origin</option>
		 <option value='Abia'> Abia </option>
		 <option value='Adamawa'> Adamawa </option>
		 <option value='Akwaibom'> Akwaibom </option>
		 <option value='Anambra'> Anambra </option>
		 <option value='Bauchi'> Bauchi </option>
		 <option value='Benue'> Benue </option>
		 <option value='Borno'> Borno </option>
		 <option value='Cross River'> Cross River </option>
		 <option value='Delta'> Delta </option>
		 <option value='Edo'> Edo </option>
		 <option value='Enugu'> Enugu </option>
		 <option value='Imo'> Imo </option>
		 <option value='Jigawa'> Jigawa </option>
		 <option value='Kebbi'> Kebbi </option>
		 <option value='Kogi'> Kogi </option>
		 <option value='Kwara'> Kwara </option>
		 <option value='Lagos'> Lagos </option>
		 <option value='Niger'> Niger </option>
		 <option value='Ogun'> Ogun </option>
		 <option value='Ondo'> Ondo </option>
		 <option value='Osun'> Osun </option>
		 <option value='Oyo'> Oyo </option>
		 <option value='Plateu'> Plateu </option>
		 <option value='River'> River </option>
		 <option value='Sokoto'> Sokoto </option>
		 <option value='Taraba'> Taraba </option>
		 <option value='Yobe'> Yobe </option>
		 <option value='Nasarawa'> Nasarawa </option>
		 <option value='Zamfara'> Zamfara </option>
		 <option value='Gombe'> Gombe </option>
		 <option value='Emboyi'> Emboyi </option>
		 <option value='FCT'> FCT </option>
		 		 		       </select>  
       </div>
	   </div>
	 
	   <div class='form-group'>
       <label for='nationalty' class='control-label col-md-4'>Nationalty: </label>
	   
	   <div class='col-md-8'>
	   <input type='radio'  id='nationalty' name='country' value='Nigerian' > <label for='nationalty'>Nigerian </label>
	   <input type='radio'  id='inationalty' name='country' value='Non Nigerian' ><label for='inationalty'>Non Nigerian </label>
       </div>
	   </div>
	     
       <div class='form-group'>
    <label for='occupation' class='control-label col-md-4'>Occupation: </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='occupation' name="occupation">
       </div>
	   </div>
	   
    <div class='form-group'>
    <label for='account' class='control-label col-md-4'>Account No: * </label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='account' name="account" placeholder='Only NUBAN ten digit accepted'>
       </div>
	   </div>

	  <div class='form-group'>
    <label for='bank' class='control-label col-md-4'>Bank Name: *</label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='bank' name="bank">
       </div>
	   </div>

	 <div class='form-group'>
    <label for='kin' class='control-label col-md-4'>Next of kin: *</label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='kin' name="kin" >
       </div>
	   </div>

	  <div class='form-group'>
    <label for='account' class='control-label col-md-4'>Phone No of next of kin: *</label>
    
	<div class='col-md-8'>
	<input type='pkin' class='form-control' id='pkin' name="pkin">
	       </div>
	   </div>
  
      <div class='form-group'>
    <label for='username' class='control-label col-md-4'>Username: *</label>
    
	<div class='col-md-8'>
	<input type='text' class='form-control' id='user' name="username">
       </div>
	   </div>

     <div class='form-group'>
    <label for='Password' class='control-label col-md-4'>Password: *</label>
    
	<div class='col-md-8'>
	<input type='Password' class='form-control' id='Password' name="password" placeholder='Alphanumeric is saver'>
       </div>
	   </div>

	   <div class='form-group'>
    <label for='repassword' class='control-label col-md-4'>Re-enter Password: *</label>
    
	<div class='col-md-8'>
	<input type='Password' class='form-control' id='rePassword' name="password2" placeholder='Password must match'>
    				</div>
				</div>
				
	<div>
    <input type='checkbox'> I agree to terms of Albir investment Club </input>
	       </div>
		   
    <button type='submit' class='btn btn-success'>Submit </botton> 
	
   </form>
   
</div>
</div>


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
		
</body>
</html>