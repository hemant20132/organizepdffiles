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
	<body style='color:#303030;line-height:1.7em;text-align:justify; padding-top: 20px;'>
	<style style="color: #DDDBDB">
	
	a
	{
	color:#72a0e4;	
	}
	
	a:hover
	{
	color:#0000ff;	
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
	.inactiveLink 
	{
	   pointer-events: none;
	   cursor: default;
	}
	
	
	@media only screen and (min-width:451px) and (max-width:799px)
	{
	ul.pagination li:nth-child(n+2):nth-last-child(n+2) 
	{
	display:inline-block;
	}
	#pagination
	{
	width:100%;	
	}	
	.bannerTable1{
	display: none;
	}
	.bannerTable2{
	display: block;
	}
	#scrollBtn {
	  display: none;
	  position: fixed;
	  bottom: 10px;
	  right: 10px;
	  z-index: 99;
	  border: none;
	  outline: none;
	  background-color: white;
	  color: white;
	  cursor: pointer;
	  padding-bottom: 10px;
	  border-radius: 10px;
	  }
	  #scrollBtn:hover {
	   background-color: #DDDBDB;
	  }
    
	#table1
	{
	display:block;		
	}
	#table2
	{
	display:none;		
	}
	}

	@media only screen and (min-width: 150px) and (max-width: 450px)
	{
		
	ul.pagination li:nth-child(n+2):nth-last-child(n+2) 
	{
	display: block;
	}

	#table1
	{
	display:none;		
	}
	#table2
	{
	display:block;		
	}
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
	
	#scrollBtn {
  	display: none;
  	position: fixed;
  	bottom: 20px;
  	right: 100px;
  	z-index: 99;
  	border: none;
  	outline: none;
  	background-color: white;
  	color: white;
  	cursor: pointer;
  	padding-bottom: 10px;
  	border-radius: 10px;
	}

	#scrollBtn:hover {
	  background-color: #DDDBDB;
	}

	#table1
	{
	display:none;		
	}
	#table2
	{
	display:block;		
	}
	
		
	}

	
	@media only screen and (min-width:800px) and (max-width:2000px){
    
	.bannerTable1{
	display: block;
	}
	.bannerTable2{
	display: none;
	}
	#scrollBtn {
  	display: none;
  	position: fixed;
  	bottom: 20px;
  	right: 100px;
  	z-index: 99;
  	border: none;
  	outline: none;
  	background-color: white;
  	color: white;
  	cursor: pointer;
  	padding-bottom: 10px;
  	border-radius: 10px;
	}

	#scrollBtn:hover {
	  background-color: #DDDBDB;
	}

	#table1
	{
	display:block;		
	}
	#table2
	{
	display:none;		
	}
	
	}
	table {border:thin; border-width: thin; border-color: darkblue;border-top-color:darkblue; border-bottom-color: darkblue;}
	td {vertical-align: middle;}
	</style>
		<button  onclick="topFunction()" id="scrollBtn" title="Go to top">Go Top</button>

	
	<?php 
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	include $includepath.'/sadagopannew/module/categorylist.php';
	
		
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	if (isset($_REQUEST["alphabet"]))
	{
	$alphabet=$_REQUEST["alphabet"];	
	$queryselect="select * from filedata where ebookname like '".$alphabet."%' order by ebookname asc";	
	$selectresult=mysqli_query($conn,$queryselect);
	}
	else
	{
	$alphabet="A";		
	$queryselect="select * from filedata where ebookname like 'A%' order by ebookname asc";	
	$selectresult=mysqli_query($conn,$queryselect);
	}
	
	
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
										<h2>Alphabetical Search of E-Books</h2>
									</header>
								<div align="left">	
								<h4>
								For Alphabetical listing of E-Books Search click on the alphabets below. No link will be available if there are no books starting with that alphabet.
								</h4>
								</div>
								<div>
								  <ul class="pagination">
										<?php 
										$letters=range("A","Z");
										for ($i=0;$i<26;$i++)
										{	
										if ($letters[$i]==$alphabet)
										{	
											if ($letterslist[$i]>0)
											{
										?>
											<li style="display:inline-block;"><a href="booksbyname.php?alphabet=<?php echo $letters[$i];?>" class="page active"><?php echo $letters[$i];?></a></li>
										<?php
											}
											else
											{
										?>
										<li style="display:inline-block;"><a href="booksbyname.php?alphabet=<?php echo $letters[$i];?>" class="page inactiveLink"><?php echo $letters[$i];?></a></li>
									
										<?php
											}	
											
										}
										else
										{
											if ($letterslist[$i]>0)
											{
										?>
										<li style="display:inline-block;"><a href="booksbyname.php?alphabet=<?php echo $letters[$i];?>" class="page"><?php echo $letters[$i];?></a></li>
										<?php			
											}
											else
											{
										?>
										<li style="display:inline-block;"><a href="booksbyname.php?alphabet=<?php echo $letters[$i];?>" class="page inactiveLink"><?php echo $letters[$i];?></a></li>
										<?php
											}		
										}			
										}
										?>
									</ul>
									</div>
								<div align="left">	
								<h4>
								To go to other Search options click on links below.<br>
								<a href="QuickSearch" style='color:blue'>Quick Search</a>&nbsp;&nbsp;
								<a href="SearchBySeries" style='color:blue'>List By Series</a>&nbsp;&nbsp;									
					<!--		<a href="AlphabeticalBookList" style='color:blue'>List Alphabetically</a>&nbsp;&nbsp;  -->
								<a href="SearchByTitle" style='color:blue'>List By Title</a>&nbsp;&nbsp;		
								<a href="CategoryBookList" style='color:blue'>List By Category</a>&nbsp;&nbsp;
								</h4>
								</div>										
								
								<div class="table-wrapper">
								<table id="table1" cellpadding="0" cellspacing="0" border="2" width="100%">
									<tbody>
										<tr>
									<?php
									if (mysqli_num_rows($selectresult)>0)
									{
									?>	
									   <td colspan="3"  bgcolor="#D3D3D3" cellpadding="0"><strong>&nbsp;Click on E-Book picture or the links below to open the E-Book in another page</strong></td>
									  </tr>
									<?php
											$srno=0;
											while ($row=mysqli_fetch_array($selectresult))
											{
											?>
											<tr>
											  <td cellpadding="0" rowspan="5" align="right" valign="middle">
											  <!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"><?php echo "<img width='150px' height='200px' src='pdfuploads/".$row["imagefile"]."'/>";?></a> -->
										      <a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>"><?php echo "<img width='150px' height='200px' src='pdfuploads/".$row["imagefile"]."'/>";?></a>
											  </td>
											  <td width="25%" align="right" valign="middle">S. No :&nbsp;&nbsp;</td>
											  <td width="65%" valign="middle">
											  <!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"> -->
											  <a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">
											    <?php $srno=$srno+1; echo $srno; ?>
											  </a>
											  </td>	
											</tr>
											
											<tr>
											  <td align="right">E-Book Code :&nbsp;&nbsp;</td>
											  <td>
											<!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"> -->
											<a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">
											<?php echo $row["ebookcode"];?></a></td>
											</tr>
											
											<tr>
											  <td align="right">E-Book Name :&nbsp;&nbsp;</td>
											  <td>
											<!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"> -->
											<a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">	
											<?php echo $row["ebookname"];?></a></td>
											</tr>
											
											<tr>
											  <td align="right">Author of Commentry :&nbsp;&nbsp;</td>
											  <td>
											<!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"> -->
											<a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">	
											<?php echo $row["authorofcommentry"];?></a></td>
											</tr>
										
											<tr>
											<td align="right">Language :&nbsp;&nbsp;</td>
											<td>
											<!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>">  -->
											<a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">
											<?php echo $row["language"];?></a></td>
											</tr>
										<tr>
										  <td colspan="3" bgcolor="#D3D3D3" cellpadding="0">&nbsp;</td>
									  </tr>
											<?php			
											}
									}
									else
									{
									?>
									<tr><td colspan="3">No E-Books Found matching your selection!!!</td></tr>
									<?php			
									}	
									?>
									</tbody>
									</table>
									</div>
									
									<div class="table-wrapper">
								
									<table id="table2" cellpadding="0" cellspacing="0" border="2">
									<thead>
										<tr><td bgcolor="#D3D3D3">&nbsp;</td></tr>
									  </thead>
									<tbody>
									<?php
									$selectresult=mysqli_query($conn,$queryselect);
									if (mysqli_num_rows($selectresult)>0)
									{
										$srno=0;
											while ($row=mysqli_fetch_array($selectresult))
											{
											?>
											<tr>
											<td align="center">
											<!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"> -->
											<a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">
											<?php echo "<img width='100px' height='140px' src='pdfuploads/".$row["imagefile"]."'/>";?></a>
											<br/>
											<!-- <a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>"> -->
											<a target="_New"  href="<?php echo "pdfuploads/".$row["ebookname"].".pdf";?>">	
											<?php $srno=$srno+1;echo $srno; ?>.&nbsp;<?php echo $row["ebookname"];?></a>
											<br/>
											<?php echo "Code : ".$row["ebookcode"];?>	
											<br/>	
											<?php echo "Author : ".$row["authorofcommentry"];?>
											<br/>
											<?php echo "Language : ".$row["language"];?>
											</td>
											</tr>
										    <tr><td bgcolor="#D3D3D3">&nbsp;</td></tr>
											<?php			
											}
									}
									else
									{
									?>
									<tr><td>No E-Books Found matching your selection!!!</td></tr>
									<?php			
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
									<p class="copyright">&copy;Sadagopan.org - All Rights Reserved  </p>
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
window.onscroll = function() {scrollFunction()};

function scrollFunction() 
{
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollBtn").style.display = "block";
    } else {
        document.getElementById("scrollBtn").style.display = "none";
    }
}

function topFunction() 
{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$(document).ready(function()
{
$("a.toggle").attr("title","Click here to show or hide menubar");
$("#sidebar.toggle").attr("title","Click here to show or hide menubar");	
	

});


</script>

	</body>
</html>