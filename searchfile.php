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
	a
	{
	color:#72a0e4;	
	}
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
	@media only screen and (min-width:150px) and (max-width:735px)
	{
	.bannerTable1{
	display: none;
	}
	.bannerTable2{
	display: block;
	}	
	}	
	@media only screen and (min-width:736px) and (max-width:1800px){
	.bannerTable1{
	display: block;
	}
	.bannerTable2{
	display: none;
	}	
	}
	</style>

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
  <table width="100%">
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

							<!-- Banner -->
								<section style="color:grey;">
									<div class="content">
										<header>
											<h3>Search Results of Sadagopan.Org</h3>
										</header>
										<p>	
										<?php
										$includepath=$_SERVER["DOCUMENT_ROOT"];
										include $includepath.'/sadagopannew/db/db.php';
	
										if (isset($_REQUEST["query"]))
										{	
										$filecontent=$_REQUEST["query"];
									
										$filecontent1=explode(" ", $filecontent);
										$filename=array("index.php","aboutus.php");
										$pagearray=array();

										for ($j=0;$j<=sizeof($filename);$j++)
										{	
										$content = file_get_contents($filename[$j]);

										for ($i=0;$i<sizeof($filecontent1);$i++)
										{	
										if (strpos($content,$filecontent1[$i])!==false) 
										{
										if (!in_array($filename[$j],$pagearray))
										{	
										array_push($pagearray,$filename[$j]);
										}
										}
										}
										}
							
							
							for ($i=0;$i<sizeof($filecontent1);$i++)
							{			
								$search1=$filecontent1[$i];
								$queryselect="Select * from filedata WHERE (ebookname LIKE '%".$search1."%')
								OR (series LIKE '%".$search1."%') 
								OR (azhvars LIKE '%".$search1."%') 
								OR (acharyas LIKE '%".$search1."%') 
								OR (divyadesam LIKE '%".$search1."%') 
								OR (deity LIKE '%".$search1."%') 
								OR (sampradayatexts LIKE '%".$search1."%') 
								OR (hymnsanddramas LIKE '%".$search1."%') 
								OR (authorofcommentry LIKE '%".$search1."%') 
								OR (language LIKE '%".$search1."%')";
								$resultquery=mysqli_query($conn,$queryselect);
								$resultrow=mysqli_num_rows($resultquery);
								if ($resultrow>0)			
								{
									$sno=0;
									echo "Your E-Books Search Results for '".$filecontent."' are listed below.  Click on the E-Book link to open the PDF.<br/>";
									while ($row=mysqli_fetch_array($resultquery,MYSQLI_ASSOC))
									{	
									/*
									echo "Found : <A target='_New' href='http://www.sadagopan.org/sadagopannew/viewpdf.php?ebookname=".$row["ebookname"]."'>http://www.sadagopan.org/sadagopannew/viewpdf.php?ebookname=".$row["ebookname"]."</a><br/>";
									*/
									$sno=$sno+1;
									echo $sno;;
									echo ". <a target='_New' href='pdfuploads/".$row["ebookname"].".pdf'>".$row["ebookname"]."</a><br/>";	
									}
								}
								else
								{
									echo "No E-Books are found for your Search String '".$filecontent."'.<br/>";
								}
								
								$queryaudio="Select * from audiofiledata WHERE (audiofilename LIKE '%".$search1."%')";
								$resultaudio=mysqli_query($conn,$queryaudio);
								$numrowsaudio=mysqli_num_rows($resultaudio);
								$numrowsaudio=0;  /* THIS IS SET TO ZERO FOR NOT LISTING THE AUDIO FILES  */
								if ($numrowsaudio>0)			
								{
									while ($row=mysqli_fetch_array($resultaudio,MYSQLI_ASSOC))
									{		
									$audiofilename="/sadagopannew/audiouploads/".$row["audiofilename"];	
									
									?>
											<br>
											<?php echo $row["audiofilename"]; ?>
											<audio controls preload="auto" autobuffer>
											  <source src="<?php echo $audiofilename;?>" type="audio/mpeg">
											</audio>
											<br>
									<?php
									}
								}
								
								
							}
						
							for ($i=0;$i<sizeof($pagearray);$i++)
							{
							echo "Above search string found in  <A target='_New' href='http://www.sadagopan.org/sadagopannew/".$pagearray[$i]."'  >http://www.sadagopan.org/sadagopannew/".$pagearray[$i]."</a><br/>";
							}
							}
							?>
									</p>
										
									</div>
														
								</section>

							<!-- Section 
								<section>
									<header class="major">
										<h2>Erat lacinia</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3>Portitor ullamcorper</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- 
								<section>
									<header class="major">
										<h2>Ipsum sed dolor</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Interdum aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Nulla amet dolore</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Tempus ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Sed etiam facilis</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section>
								--->
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

							<!-- Section 
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
								<!----								
								<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>
									--->
							
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy;  Sadagopan.org - All rights reserved. 
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
		$("document").ready(function()
		{
		$("#sidebar.toggle").attr("title","Click here to show or hide menubar");	
		$("a.toggle").attr("title","Click here to show or hide menubar");
		});
		</script>
	</body>
</html>