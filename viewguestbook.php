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
	
	</head>
	<body style='color:#303030;line-height:1.7em;text-align:justify; padding-top: 20px;'>
	<style>
	a img
	{
  	border: 0 none;
	}
	a, a:link, a:hover, a:focus {
    text-decoration: none;
	}
	.image-link
	{
  	text-decoration: none;
	}
	#siteBanner_bg{
	background-image: url(WSBanner_bg_medium.png);
	background-repeat: repeat;
	background-size: contain;
	}	
	
	@media only screen and (min-width:451px) and (max-width:799px)
	{
	.bannerTable1{
	display: none;
	}
	.bannerTable2{
	display: block;
	}	
	}
	
	@media only screen and (min-width:800px) and (max-width:2000px){
	.bannerTable1{
	display: block;
	}
	.bannerTable2{
	display: none;
	}	
	}
	
	@media only screen and (min-width: 150px) and (max-width: 450px)
	{
		.jcarousel-wrapper
		{
		width:230px;
		height:140px;
		}	
		
		.jcarousel li {
		height:120px;
		width:108px;
		}
		
		.jcarousel img {
		height:120px;
		width:80px;
		}
		.bannerTable1{
		display: none;
		}
		.bannerTable2{
		display: block;
		}
		#banner2 tr td 
		{
		width:35%;		
		}	
		#banner2 tr td img
		{
		width:45px;		
		}	
	}

	</style>
	<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';

if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
$queryselect="select * from guestbook where approved='Yes' order by timestamp desc";	
$selectresult=mysqli_query($conn,$queryselect);

?>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
						  <header>
							<!-- Removed id="header" from the header tag above -->
							<!--		<a href="index.php" class="logo"> 
										<strong>Sadagopan.Org</strong>
								<div class="banner" id="siteBanner_bg">&nbsp;</div>
								</a> -->
<div class="bannerTable1" id="siteBanner_bg">
  <table width="100%">
	  <tbody>
    <tr width="100%">
      <td width="40%" height="100px" align="right" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_left_medium.png" alt="Sri Namperumal" height="200" width="280px"></img>
		</td>
      <td align="center" style="vertical-align: middle;"><img src="WSBanner_center_medium.png" title="Click here to go to Sadagopan.org home page" height="100" width="257" border="0"></img>
	</td>
      <td width="40%" align="left" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_right_medium.png" alt="Sri Namperumal" height="200px" width="219px"></img>
</td>
    </tr>
  </tbody>
</table>
</div>

<div class="bannerTable2" id="siteBanner_bg">
  <table width="100%" id="banner2">
	  <tbody>
    <tr width="100%">
      <td width="40%" height="50px" align="right" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_left_50.png" alt="Sri Namperumal" height="50" width="70"></img>
		</td>
      <td align="center" style="vertical-align: middle;"><img class="image" src="WSBanner_center_50.png" alt="Sadagopan.org" height="50" width="129"></img>
	</td>
      <td width="40%" align="left" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_right_50.png" alt="Sri Namperumal" height="50" width="55"></img>
</td>
    </tr>
  </tbody>
</table>
</div>
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
								<section style="">
									<header class="main">
										<h2>View Guestbook</h2>
									</header>
							
			<div>
			<table style="font-size:12pt;">
			<?php 
			if (mysqli_num_rows($selectresult)>0)
			{	
			While ($row=mysqli_fetch_array($selectresult))
			{
			?>
			<tr>
				<td>
				<?php
				if (isset($row["comments"]))
				{	
				echo $row["comments"];
				}
				?>
				<?php
				if (isset($row["name"]))
				{	
				echo "<br/>".$row["name"];
				}
				?>
				<?php
				if (isset($row["email"]))
				{
				echo "<br/>".$row["email"];
				}
				?>
				<?php
				if (!empty($row["url"]))
				{
				echo "<br/>".$row["url"];
				}
				?>
				
				<?php
				echo "<br/>".$row["city"].",". $row["state"].",".$row["country"];
				?>
				<?php
				echo "<br/>".$row["timestamp"];
				?>
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
			</table>
			</div>		
					</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="searchfile.php">
										<input type="text" name="query" id="query" placeholder="Search Sadagopan.org" required/>
										<input type="submit" id="search" class="button special small" name="search" />
										<input type="reset" id="cancel" class="button small" name="cancel" value="Reset" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
									<li><a href="Home"><strong>Home</strong></a></li>
										<ul style="list-style-type:none"><strong>E-Books Search</strong>
										<li><a href="QuickSearch">&nbsp;&nbsp;Quick Search</a></li>
										<li><a href="SearchBySeries">&nbsp;&nbsp;List by Series</a></li>
										<li><a href="AlphabeticalBookList">&nbsp;&nbsp;List Alphabetically</a></li>
										<li><a href="SearchByTitle">&nbsp;&nbsp;List By Title</a></li>
										<li><a href="CategoryBookList">&nbsp;&nbsp;List by Category</a></li>
										</ul>
								<!--	<li><a href="AudioFileList"><strong>Audio Files</strong></a></li>	-->
										<li><a href="SignGuestBook"><strong>Sign GuestBook</strong></a></li>
										<li><a href="ViewGuestBook"><strong>View GuestBook</strong></a></li>
										<li><a href="ContactUs"><strong>Contact Us</strong></a></li>
										<li><a href="FAQ"><strong>Frequently Asked Questions</strong></a></li>
									</ul>
								</nav>

							<!-- 
								
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>
							
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Sadagopan.Org - All Rights Reserved</p>
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
	$("a.toggle").attr("title","Click here to show or hide menubar");
	$("#sidebar.toggle").attr("title","Click here to show or hide menubar");
			
	$('#table1 tbody').on('click', '#view', function() 
	{
        var data1 = $(this).parents("tr").find("td:eq(3)").html();
		window.open("viewpdf.php?filename="+data1);
	});

	$("#category").change( function()
	{
	var category1=$("#category").val();
   	location.href("advancefilters.php?filename="+category1);
   });
});
</script>

	</body>
</html>