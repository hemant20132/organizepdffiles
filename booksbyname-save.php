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
	<body style='color:#303030;line-height:1.7em;text-align:justify;'>
	<style>
	a
	{
	color:#72a0e4;	
	}
	
	a:hover
	{
	color:#0000ff;	
	}
	
	@media only screen and (min-width:150px) and (max-width:736px){
     #table1
	{
	display:none;		
	}
	#table2
	{
	display:block;		
	}
	
	}

	@media only screen and (min-width:737px) and (max-width:1680px){
    
	#table1
	{
	display:block;		
	}
	#table2
	{
	display:none;		
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
								<header id="header">
									<a href="index.php" class="logo"><strong>Sadagopan.Org</strong> </a>
								<!----	
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
										<h2>List of Books By Name</h2>
									</header>
									<ul class="pagination">
										<?php $letters=range("A","Z");
										for ($i=0;$i<26;$i++)
										{	
										if ($letters[$i]==$alphabet)
										{	
										?>
										<li><a href="booksbyname.php?alphabet=<?php echo $letters[$i];?>" class="page active"><?php echo $letters[$i];?></a></li>
										<?php
										}
										else
										{
										?>
										<li><a href="booksbyname.php?alphabet=<?php echo $letters[$i];?>" class="page"><?php echo $letters[$i];?></a></li>
										<?php			
										}			
										}
										?>
									</ul>

								<div class="table-wrapper">
								<table id="table1" >
									<thead>
										<tr>
											<th>SrNo</th>
											<th>E-Book Name</th>
											<th>E-Book Code</th>
											<th>Author of Commentry</th>
											<th>Language</th>
									   </tr>
									</thead>
									<tbody>
									<?php
									if (mysqli_num_rows($selectresult)>0)
									{
											$srno=0;
											while ($row=mysqli_fetch_array($selectresult))
											{
											?>
											<tr>
											<td width='80px'><?php $srno=$srno+1; echo $srno; ?></td>
											<td width='250px'><a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>">											
											<?php echo "<img width='150px' height='200px' src='pdfuploads/".$row["imagefile"]."'/>";?>
											<br>
											<?php echo $row["ebookname"];?></a>
											</td>
											<td width='150px'><?php echo $row["ebookcode"];?></a></td>
											<td width='200px'><?php echo $row["authorofcommentry"];?></td>
											<td width='100px'>
											<?php 
											if ($row["language"]=='E')
											{
											echo 'English';
											}
											if ($row["language"]=='T')
											{
											echo 'Tamil';
											}
											if ($row["language"]=='S')
											{
											echo 'Sanskrit';
											}
											if ($row["language"]=='TG')
											{
											echo 'Telugu';
											}
											?>
											</td>
											
											</tr>
											<?php			
											}
									}
									?>
									</tbody>
									</table>
								
									<table id="table2" >
									<thead>
										<tr>
											<th>SrNo</th>
											<th>E-Book Name</th>
									   </tr>
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
											
											<td><?php $srno=$srno+1;echo $srno; ?></td>
											<td>
											<?php echo "<img width='100px' height='140px' src='pdfuploads/".$row["imagefile"]."'/>";?>
											<br/>
											<a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>">
											<?php echo $row["ebookname"];?></a>
											<br/>
											<?php echo "Author :".$row["authorofcommentry"];?>
											<br/>
											<?php 
											if ($row["language"]=='E')
											{
											echo "Language : English";
											}
											if ($row["language"]=='T')
											{
											echo "Language : Tamil";
											}
											if ($row["language"]=='S')
											{
											echo "Language : Sanskrit";
											}
											if ($row["language"]=='TG')
											{
											echo "Language : Telugu";
											}
											?>
											</td>
											
											</tr>
											<?php			
											}
									}	
									else
									{
									echo "No Ebooks Found !!!";	
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
										<li><a href="index.php">Homepage</a></li>
										<li><a href="booksbyname.php">Books By Name</a></li>
										<li><a href="booksbycategory.php">Books By Category</a></li>
										<li><a href="listaudiofile.php">Audio Files</a></li>
										<li><a href="signguestbook.php">Sign GuestBook</a></li>
										<li><a href="viewguestbook.php">View GuestBook</a></li>
										<li><a href="contact.php">Contact Us</a></li>
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
$(document).ready(function()
{
$("a.toggle").attr("title","menubar");	
$("#sidebar.toggle").attr("title","menubar");	
	

});


</script>

	</body>
</html>