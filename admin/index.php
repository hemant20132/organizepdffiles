<?php
ob_start();
session_start();
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sadagopan.Org</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
   	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	</head>
	<body>
<?php
if (isset($_REQUEST["login1"]))
{
	$loginname=filter_var($_REQUEST["loginname"],FILTER_SANITIZE_STRING);
	$loginpassword=filter_var($_REQUEST["loginpassword"],FILTER_SANITIZE_STRING);
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	$querylogin ="select * from userstable where username='".$loginname."' and userpassword='".$loginpassword."'";	
	$selectlogin=mysqli_query($conn,$querylogin);
	if (mysqli_num_rows($selectlogin)>0)
	{
		$message="<span style='color:green'>Login Successful !!!</span>";
		while ($row=mysqli_fetch_assoc($selectlogin))
		{
			$_SESSION["username"]=$row["username"];
		}	
	}
	else
	{
		$message="<span style='color:red'>Error in Login !!!</span>";	
	}
}
?>
	<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong>Sadagopan.Org</strong> </a>
									<?php 
									if(isset($_SESSION["username"]))
									{
									?>
									<li style="list-style-type:none;">
									<span class="label">UserName :
									<?php echo $_SESSION["username"]; 
									?>
									</span>
									</li>
									<?php
									}
									?>
									<ul class="icons">
									<!---
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									--->
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
									<?php 
									if (!isset($_SESSION["username"])) 
									{
									?>
									<h2>Admin Login</h2>
									<?php
									}
									?>
									<?php 
									if (isset($_SESSION["username"])) 
									{
									?>
									<h2>Welcome to Sadagopan.org - Admin </h2>
									<?php
									}
									?>
									
									</header>
										<?php
										if (isset($message))
										{
											echo $message;	
										}
										?>		
											<!-- Form -->
													<?php 
													if (!isset($_SESSION["username"])) 
													{
													?>
													<table>
													<form method="post" id="loginform" name="loginform" action="index.php">
														<tr><td>
														<div class="row uniform">
															
															<div class="6u 12u$(xsmall)">
																<input type="text" name="loginname" id="loginname" value="" required/>
															</div>
															</td>
															</tr>
															
															<tr><td>
															<div class="6u$ 12u$(xsmall)">
																<input type="password" name="loginpassword" id="loginpassword" value=""  rquired/>
															</div>
															</td>
															</tr>
															
															<tr>
															<td>
															<div class="12u$">
																<ul class="actions">
																	<li><input id="login1" name="login1" type="submit" value="Login" class="button special" /></li>
																	<li><input id="cancel1" name="cancel1" type="cancel" value="Cancel" class="button "/></li>
																</ul>
															</div>
															</td>
															</tr>
														</div>
													</form>
													</table>
													<?php
													}
													?>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<?php if (!isset($_SESSION["username"])) 
										{
										?>
										<li><a href="login.php">Admin HomePage</a></li>
										<?php
										}
										?>
										<li><a href="uploadfile.php">Upload PDF File</a></li>
										<li><a href="uploadaudiofile.php">Upload Audio File</a></li>
										<li><a href="editdeletefile.php">Edit/Delete File</a></li>
										<li><a href="editdeleteaudiofile.php">Edit/Delete Audio File</a></li>
										<li><a href="viewguestremarks.php">View Guest Book</a></li>
										<li><a href="addnewcategory.php">Add New Category</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</nav>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy;Sadagopan.org - All Rights Reserved </p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

<script>
$(document).ready(function()
{
	
});
</script>

	</body>
</html>