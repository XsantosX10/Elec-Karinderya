<!DOCTYPE html>
<html>
<head>
	<title>ALPHA</title>
	<link rel="icon" href="../img/logo1.png" />
	<link rel = "stylesheet" type = "text/css" href="../css/style1.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.css">
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
<body style="background-color:  #243a61;">
	<div id="header">
		<img src="../img/logo1.png">
		<label>ALPHA</label>
	</div>
	
		<?php include('../function/admin_login.php');?>
	<div id="admin" style="	background-color:  #243a61;">
		<form method="post" class="well">
			<center>
				<legend>Adminstrator</legend>
					<table>
						<tr>
							<input type="text" name="username" placeholder="Username">
						</tr>
						<tr>
							<input type="password" name="password" placeholder="Password">
						</tr>
						<br>
						<br>
							<input type="submit" name="enter" value="Enter" class="btn btn-primary" style="width:200px;">
					</table>
			</center>
		</form>
	</div>
	



</div>

</body>
</html>