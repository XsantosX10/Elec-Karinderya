<?php
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html style="background-color: white;">
<head>
	<title>E-Karinderya</title>
	<link rel="icon" href="img/logo1.png" />
	<link rel = "stylesheet" type = "text/css" href="css/style1.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo1.png">
		<label style="font-weight: bold;font-family: 'Poppins', sans-serif;">E-Karinderya</label>
			<ul>
				<li><a href="#signup" class="btn btn-primary"  data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"  class="btn btn-success" data-toggle="modal">Login</a></li>
			</ul>
	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;position: absolute;top: 30%; left:57%;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel" style="color:black;">Login<span style="color: #F76E11;"> ...</span></h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>

	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel" style="color: black;">Sign Up<span style="color: #F76E11;"> Here ... </span></h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>

			<div class="nav">
				<ul>
					<li><a href="index.php"><i class="icon-home"></i>Home</a></li>
					<li><a href="product.php"><i class="icon-th-list"></i>Product</a>
					<li><a href="aboutus.php"><i class="icon-bookmark"></i>About Us</a></li>
					<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>
					<li><a href="privacy.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
					<li><a href="faqs.php"><i class="icon-question-sign"></i>FAQs</a></li>
				</ul>
			</div>

<div id="container-aboutUS">

	<h3 style="font-weight: bold;font-family: 'Poppins', sans-serif;"><span style="color: #f89406;">About </span>Us</h3>
		<div id="content-aboutUs">
			<p style="text-align:justify;text-indent:60px; color:black; ">We are the students of BSIT 3D-NS who created this simple webpage named E-karinderya that provides online base food delivery service for us able to reduce physical contact in this time of pandemic that helps to reduce the transition rate of the virus and to save time and effort. Our objective is to create a web page with login and sign up of accounts tab for users, menu for the food, tab about the owner of the business and tab for orders confirmation. One of its goals is to at least reduce the physical contact we need to experience when purchasing food outside and to provide more convenient and effortless food shopping. </p>

		</div>
	<br />
</div>
<div id="footer" style="top: 180px;">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-weight: bold;font-family: century gothic; font-size: 25px;">Group 7 - 2022</p>
		</div>

			<div id="foot">
	<ul style="list-style-type: none; ">
	<li>
						<a href="http://www.facebook.com/"  class="fa fa-facebook-square" style="color:white; padding: 10px 10px 10px 10px; font-size: 2em;" ></a>
						<a href="http://www.twitter.com/" class="fa fa-twitter-square" style="color:white; padding:10px 10px 10px 10px; font-size: 2em;"></a>
						<a href="http://www.pinterest.com/" class="fa fa-pinterest-square" style="color:white; padding: 10px 10px 10px 10px; font-size: 2em;"></a>
						<a href="http://www.tumblr.com/" class="fa fa-tumblr-square" style="color:white; padding:10px 10px 10px 10px; font-size: 2em;"></a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
