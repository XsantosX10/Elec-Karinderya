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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
		<label style="font-weight: bold;font-family: century gothic;">E-Karinderya</label>
			<ul>
				<li><a href="#signup"   class="btn btn-primary" data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"  class="btn btn-success" data-toggle="modal">Login</a></li>
			</ul>
	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;position: absolute;top: 30%; left:57%;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
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
					<h3 id="myModalLabel">Sign Up Here...</h3>
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

<div id="container">
	<div class="nav">
			 <ul>
				<li><a href="index.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>

	<div id="content">
		<h3 style="font-weight: bold;font-family: century gothic;"><span style="color: #f89406;">Privacy </span>Policy</h3>
		<div id="content" class="container-fluid" style="color: #111; border: 1px solid orange; padding: 20px 0 20px 0;">
				 <h4 style="padding: 0 20px 0 20px;">Effective date: February 2022</h4>
					<p style="text-indent:60px; padding: 10px 20px 10px 20px;">HH Herb&Health ("us","we", or "our") operates the https://www.Ekarinderya.com/ website(the "E-Karinderya").
					This page informs you of our policies regardingthe collection, use, and disclosure of personal data when you use our Serviceand the choices you have associated with that data. Our Privacy Policy for E-Karinderya is managed through Free PrivacyPolicy.
					We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from https://www.Ekarinderya.com/</p>
				<h4 style="padding: 0 20px 0 20px;">Information Collection and Use</h4>
					<p style="padding-left:30px;">We collect several different types of information for various purposes to provide and improve our Service to you.</p>
					<p style="padding-left:30px;">Types of data collected</p>
					<ol style="padding-left:30px;">
						<li>Personal Data</li>
							<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contactor identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:</p>
							<ul>
								<li>Email Address</li>
								<li>First and Last Name</li>
								<li>Number</li>
								<li>Address</li>
								<li>Gender</li>
								<li>Zip Code</li>
								<li>Province</li>
								<li>Birthday</li>
								<li>Cookies and Data Usage</li>
							</ul>
						<li>Usage Data</li>
						<p>We may also collect information how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IPaddress), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
						<li>Tracking and Cookies Data</li>
						<p>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
					</ol>
				<h4 style="padding: 0 20px 0 20px;">Use of Data</h4>
				<p style="padding-left:30px;">E-Karinderya uses the collected data for various purposes:</p>
				<ul style="padding-left:30px;">
					<li>To provide and maintain the Service</li>
					<li>To notify you about changes to our Service</li>
					<li>To allow you to participate in interactive features of our Service when you choose to do so</li>
					<li>To provide customer care and support</li>
					<li>To provide analysis or valuable information so that we can improve the Service</li>
					<li>To monitor the usage of the Service</li>
					<li>To detect, prevent and address technical issues</li>
				</ul>
				<h4 style="padding: 0 20px 0 20px;">Transfer of Data</h4>
				<p style="padding-left:30px;">Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.If you are located outside Philippines and choose to provide information to us, please note that we transfer the data, including Personal Data, to Philippines and process it there.Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.E-Karinderya will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to inorganization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

				<h4 style="padding: 0 20px 0 20px;">Disclosure of Data</h4>
				<p style="padding-left:30px;">Legal Requirements</p>
				<p style="padding-left:30px;">E-Karinderya may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
				<ul style="padding-left:30px;">
					<li>To comply with a legal obligation</li>
					<li>To protect and defend the rights or property of  E-Karinderya</li>
					<li>To prevent or investigate possible wrongdoing in connection with the Service</li>
					<li>To protect the personal safety of users of the Service or the public</li>
					<li>To protect against legal liability</li>
				</ul>
				<h4 style="padding: 0 20px 0 20px;">Security of Data</h4>
				<p style="padding-left:30px;">The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
				<h4 style="padding: 0 20px 0 20px;">Service Providers</h4>
				<p style="padding-left:30px;">We may employ third party companies and individuals to facilitate our Service ("Service Providers"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>

				<h4 style="padding: 0 20px 0 20px;">Analytics</h4>
				<p style="padding-left:30px;">We may use third-party Service Providers to monitor and analyze the use of our Service.</p>
				<ul style="padding-left:30px;">
					<li>Google Analytics Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network. You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js, and dc.js) from sharing information with Google Analytics about visits activity. For more information on the privacy practices of Google, please visit the Google Privacy & Terms web page: https://policies.google.com/privacy?hl=en</li>
				</ul>

				<h4 style="padding: 0 20px 0 20px;">Links to other sites</h4>
				<p style="padding-left:30px;">Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>

				<h4 style="padding: 0 20px 0 20px;">Childrens Privacy</h4>
				<p style="padding-left:30px;">Our Service does not address anyone under the age of 18 ("Children").We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>

				<h4 style="padding: 0 20px 0 20px;">Changes to this Privacy</h4>
				<p style="padding-left:30px;">We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.We will let you know via email and/or a prominent notice on our Service, priorate the change becoming effective and update the "effective date" at the top of this Privacy Policy.You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

				<h4 style="padding: 0 20px 0 20px;">Contacts</h4>
				<p style="padding-left:30px;">If you have any questions about this Privacy Policy, please contact us: 09457375353</p>
				
				<p style="padding-left:30px;">By email: BSIT_Ekarinderya@gmail.com</p>
			</div>	
	</div>
	<br>
</div>
<div id="footer">
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
