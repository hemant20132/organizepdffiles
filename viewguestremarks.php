<?php 
session_start();
if (isset($_SESSION["username"]))
{	
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
$conn = mysqli_connect("sql104.epizy.com","epiz_20558076","sg6muwsE","epiz_20558076_database","3306","");
$selectquery="select * from guestbook";
$resultrows=mysqli_query($conn,$selectquery)
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
									
									<!---
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
									--->
								</header>

							<!-- Content -->
								<section>
					
									<header class="main">
										<h2>View Guest Remarks</h2>
									</header>
								
									<div class="table-wrapper">
									<table>
									<thead>
										<th>SrNo</th>
										<th>Name</th>
										<th>Email</th>
										<th>City</th>
										<th>Country</th>
										<th>Comments</th>
									</thead>
									<tbody>
									<?php 
									$numrows=mysqli_num_rows($resultrows);
									if ($numrows>0)
									{	
										while ($row = mysqli_fetch_array($resultrows,MYSQLI_ASSOC))
										{
									?>
									<tr>
										<td>
										<?php
											echo $row["SrNo"];
										?>
										</td>
									
										<td>
										<?php
											echo $row["name"];
										?>
										</td>
										<td>
										<?php	
											echo $row["email"];
										?>
										</td>
										<td>
										<?php	
											echo $row["city"];
										?>
										</td>
										<td>
										<?php	
											echo $row["country"];
										?>
										</td>
										<td>
										<?php	
											echo $row["comments"];
										?>
										</td>
										<td>
										<a class="button special small" href="deleteremarks.php?srno=<?php echo $row["SrNo"];?>">Delete</a>
										</td>
									</tr>
									
									
									<?php	
										}
									}
									else
									{
										echo "No Records Found !!!";
									}
									?>
									</tbody>
									</table>
									</div>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search 
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
							-->	
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
										<li><a href="uploadfile.php">Upload File</a></li>
										<li><a href="editdeletefile.php">Edit/Delete File</a></li>
										<li><a href="viewguestremarks.php">View Guest Book</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</nav>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Sadagopan.Org - All Rights Reserved. </p>
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
<?php 
}
else
{
echo "User Need to Login !!!";
}
?>