
<?php
session_start();
//connect to db
$db=mysqli_connect("localhost","root","","authentication");

if(isset($_POST['submit']))
{
session_start();
$rollnumber=mysql_real_escape_string($_POST['rollnumber']);
$email=mysql_real_escape_string($_POST['email']);
$Password=mysql_real_escape_string($_POST['Password']);
$Password2=mysql_real_escape_string($_POST['Password2']);
if($Password == $Password2)
{
//create user
$Password = md5($Password); //hash pswd before storing for security purposes
$sql = "INSERT INTO user(rollnumber,email,password) VALUES('$rollnumber','$email','$Password')";
mysqli_query($db,$sql);
$_SESSION['message'] = "you are now logged in";
$_SESSION['username'] = $username;
header("location: main page.html"); //redirect to home page
}
else{
$_SESSION['message']= " the two passwords do not match";
}
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Mess Management</title>
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Exact login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

	<!-- Custom Theme files -->
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css1/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom Theme files -->
	
	<!-- web font --> 
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web font --> 
	<!--w3-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
	
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<a href="main page.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="menu.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Menu for the week</a>
    <a href="admin_login.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin login</a>
	<a href="student_signup.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Student Signup</a>
    <a href="student_login.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Student login</a>
    <a href="gallery.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Gallery</a>
	</div>
	<!-- main -->
	<div class="main">
		<h1></h1>
		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					<div class="head">
						<h2>Student SignUp</h2>
						<span class="fa fa-lock"></span>
					</div>					
					<div class="clear"></div>
					<div class="login-agileits-top"> 	
						<form action="#" method="post"> 
							<input type="number" class="name" name="rollnumber" Placeholder="Roll number" required=""/>
							<!--<input type="email" class="email" name="Email" Placeholder="Roll number" required=""/>-->
							<input type="email" class="name" name="email" value="your@email.com " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}">
							<input type="password" class="password" name="Password" Placeholder="Password" required=""/>
							<input type="password" class="password" name="Password2" Placeholder="Enter password again" required=""/>
							<input type="submit" name="submit" value="Sign up"> 
						</form> 	
					</div> 
					<div class="login-agileits-bottom"> 
						<h6><a href="recovery.html">Forgot your password?</a></h6>
					</div> 

				</div>  
			</div>  
		</div>
		<!-- //login form -->
		
		<!--<div class="login-agileits-bottom1"> 
			<h3>or login with</h3>
		</div>
		
		<!-- social icons -->
		<!--div class="social_icons agileinfo">
			<ul class="top-links">
				<li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
				<!--<li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>-->
			<!--</ul>
		</div>
		<!-- //social icons -->
		
		<!-- copyright -->
		<div class="copyright">
			<!--<p> © 2018 Exact Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>-->
		</div>
		<!-- //copyright --> 
	</div>	
	<!-- //main -->
	
</body>
</html>