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
	
	
	@media only screen and (min-width:150px) and (max-width:736px)
	{
		#table1
		{
		display:none;	
		}	
		#table2
		{
		display:block;	
		}	
	
		#filtertable1
		{
		display:none;	
		}	
		#filtertable2
		{
		display:block;	
		}	
			.form-control
			{
			display: block;
			width: 110px;
			height: 34px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}
			
			select {
			-webkit-appearance: menulist;
			box-sizing: border-box;
			align-items: center;
			white-space: pre;
			-webkit-rtl-ordering: logical;
			color: black;
			background-color: white;
			cursor: default;
			border-width: 1px;
			border-style: solid;
			border-color: initial;
			border-image: initial;
			}
			
		.select-wrapper:before 
		{
		content:"";
		}	
	
	}

	
	@media only screen and (min-width:737px) and (max-width:1366px)
	{
		#filtertable1
		{
		display:block;	
		}	
		#filtertable2
		{
		display:none;	
		}	
		
			.form-control
			{
			display: block;
			width: 250px;
			height: 34px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}
			
			select {
			-webkit-appearance: menulist;
			box-sizing: border-box;
			align-items: center;
			white-space: pre;
			-webkit-rtl-ordering: logical;
			color: black;
			background-color: white;
			cursor: default;
			border-width: 1px;
			border-style: solid;
			border-color: initial;
			border-image: initial;
			}
		
		
		#table1
		{
		display:block;	
		}	
		#table2
		{
		display:none;	
		}	
		
		.select-wrapper:before 
		{
		content:"";
		}	
		
		
		
	}
	
	
	@media only screen and (min-width:1367px) and (max-width:1680px)
	{
	
		#table1
		{
		display:block;	
		}	
		#table2
		{
		display:none;	
		}	
	
	#filtertable1
	{
	display:block;	
	}	
	#filtertable2
	{
	display:none;	
	}	
	
		.form-control
			{
			display: block;
			width: 290px;
			height: 34px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}
			
			select {
			-webkit-appearance: menulist;
			box-sizing: border-box;
			align-items: center;
			white-space: pre;
			-webkit-rtl-ordering: logical;
			color: black;
			background-color: white;
			cursor: default;
			border-width: 1px;
			border-style: solid;
			border-color: initial;
			border-image: initial;
			}
		
		.select-wrapper:before 
		{
		content:"";
		}	
	
	
	
	}
	</style>
	
	<?php 
	session_start();
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	include $includepath.'/sadagopannew/module/categorylist.php';
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	
	if (isset($_REQUEST["submitsearch"]))
	{
		$search1=$_REQUEST["query1"];
		$queryselect=$queryselect. "Select * from filedata WHERE (ebookname LIKE '%".$search1."%')
		OR (series LIKE '%".$search1."%') 
		OR 	(azhvars LIKE '%".$search1."%') 
		OR  (acharyas LIKE '%".$search1."%') 
		OR  (divyadesam LIKE '%".$search1."%') 
		OR  (deity LIKE '%".$search1."%') 
		OR (sampradayatexts LIKE '%".$search1."%') 
		OR (hymnsanddramas LIKE '%".$search1."%') 
		OR 	(authorofcommentry LIKE '%".$search1."%') 
		OR (language LIKE '%".$search1."%')";
		
		$selectresult=mysqli_query($conn,$queryselect);
	}
	
	if (isset($_REQUEST["category"]))
	{	
		$category=filter_var($_REQUEST["category"],FILTER_SANITIZE_STRING);
	}
	
	
	if (!isset($_REQUEST["submitsearch"]))
	{
		if (isset($_REQUEST["search1"]))
		{	
			$_SESSION["category"]=$_REQUEST["category"];
			$_SESSION["subcategory"]=$_REQUEST["subcategory"];
			$subcategory=$_REQUEST["subcategory"];	
			
			if ($_REQUEST["category"]=="1" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where series='".trim($subcategory)."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="2" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where azhvars='".trim($subcategory)."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="3" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where acharyas='".trim($subcategory)."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="4" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where divyadesam='".trim($_REQUEST["subcategory"])."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="5" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where deity='".trim($_REQUEST["subcategory"])."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="6" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where sampradayatexts='".trim($subcategory)."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="7" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where hymnsanddramas='".trim($subcategory)."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="8" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where authorofcommentry='".trim($_REQUEST["subcategory"])."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="9" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where language='".trim($subcategory)."' order by ebookname asc";	
			}
			if ($_REQUEST["category"]=="10" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where misc='".trim($_REQUEST["subcategory"])."' order by ebookname asc";	
			}
			$selectresult=mysqli_query($conn,$queryselect);
		}
		
		if (isset($_REQUEST["search2"]))
		{	
			$_SESSION["category2"]=$_REQUEST["category2"];
			$_SESSION["subcategory2"]=$_REQUEST["subcategory2"];
			$subcategory2=$_REQUEST["subcategory2"];
			if ($_REQUEST["category2"]=="1" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where series='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="2" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where azhvars='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="3" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where acharyas='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="4" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where divyadesam='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="5" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where deity='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="6" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where sampradayatexts='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="7" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where hymnsanddramas='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="8" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where authorofcommentry='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="9" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where language='".trim($subcategory2)."' order by ebookname asc";	
			}
			if ($_REQUEST["category2"]=="10" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where misc='".trim($subcategory2)."' order by ebookname asc";	
			}
			
			$selectresult=mysqli_query($conn,$queryselect);
		}
	}
	
	if (!isset($_REQUEST["submitsearch"]) AND !isset($_REQUEST["search1"]) AND  !isset($_REQUEST["search2"]))
	{	
		$queryselect="select * from filedata where series='Ahobilavalli' order by ebookname asc";	
		$selectresult=mysqli_query($conn,$queryselect);
	}
	echo $queryselect;
	?>
 
	<style>
	
	@media only screen and (max-width:1680px) and (min-width:769px)
	{
	#filtertable1 tr td
	{
	width:300px;	
	}
	#filtertable2 tr td
	{
	width:300px;	
	}
	}
	
	@media only screen and (max-width:768px) and (min-width:150px)
	{
	#filtertable1 tr td
	{
	width:150px;	
	}
	#filtertable2 tr td
	{
	width:150px;	
	}
	}
	
	
	</style>
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
										<h2>List of Books By Category</h2>
									</header>
								<h4>Select Category first, then Sub-Category and click on Search</h4>
								<div class="table-wrapper">
								<form id="filters" name="filters" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<table id="filtertable1">		
									
									<tr>
									<td>
									Category
									</td>
									<td>
									Sub-Category
									</td>
									</tr>
									
									<tr>
									<td>
									<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select class="form-control" name="category" id="category">
												  <option value="0">-- Select eBooks By --</option>
												  <option value="1">eBook Series</option>
												  <option value="2">Composed by Azhwars</option>
												  <option value="3">Composed by Acharyas</option>
												  <option value="4">Divya Desam</option>
												  <option value="5">Deity</option>
												  <option value="6">Sampradaya Texts</option>
												  <option value="7">Hymns and Dramas</option>
												  <option value="8">Commentary</option>
												  <option value="9">Language</option>
												  <option value="10">Miscellaneous</option>
												</select>
											</div>
									</div>
									</td>
									
									<td>
									<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select class="form-control" name="subcategory" id="subcategory">
												<option value=''>--Select--</option>
												</select>
											</div>
									</div>
									
									</td>
								
									<td>		
										<input id="search1" name="search1" type="submit" value="Search" class="button special" required />
									</td>
									<td>	
										<input id="reset1" name="reset1" type="reset" value="Reset"  class="button"/>
									</td>	
									</tr>
									</table>
										
										<div class="6u$">
										</div>
														
									
									</form>
								
								
								<form id="filters2" name="filters2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<table id="filtertable2">		
									<tr>
									<td>
									Category
									</td>
									<td>
									Sub-Category
									</td>
									</tr>
									
									<tr>
									<td>
									<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select class="form-control" name="category2" id="category2">
												  <option value="0">-- Select eBooks By --</option>
												  <option value="1">eBook Series</option>
												  <option value="2">Composed by Azhwars</option>
												  <option value="3">Composed by Acharyas</option>
												  <option value="4">Divya Desam</option>
												  <option value="5">Deity</option>
												  <option value="6">Sampradaya Texts</option>
												  <option value="7">Hymns and Dramas</option>
												  <option value="8">Commentary</option>
												  <option value="9">Language</option>
												  <option value="10">Miscellaneous</option>
												</select>
											</div>
									</div>
									</td>
									
									<td>
									<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select class="form-control" name="subcategory2" id="subcategory2">
												<option value=''>--Select--</option>
												</select>
											</div>
									</div>
									</td>
									</tr>
									
									<tr>
									<td>		
											<input id="search2" name="search2" type="submit" value="Search" class="small special" />
											</td>
											<td>
											<input id="reset2" name="reset2" type="reset" value="Reset" />
									</td>	
									</tr>
									</table>
										
														
									
									</form>
								</div>
							
								<div class="table-wrapper">
																				
								<table id="table1" >
									<thead>
										<tr>
											<th>SrNo</th>
											<th>E-Book Name</th>
											<th>E-Book code</th>
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
											<td width='250px'><a target="_New" href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>">											
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
									else
									{
									?>
									<tr><td></td><td>No Records Found !!!</td><td></td><td></td></tr>
									<?php			
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
											<td><?php $srno=$srno+1; echo $srno; ?></td>
											<td>
											<a target="_New"  href="viewpdf.php?ebookname=<?php echo $row["ebookname"];?>">											
											<?php echo "<img width='100px' height='140px' src='pdfuploads/".$row["imagefile"]."'/>";?>
											<br>
											<?php echo $row["ebookname"];?></a>
											<br>
											<?php echo "Author : ".$row["authorofcommentry"];?>
											<br>
											<?php 
											if ($row["language"]=='E')
											{
											echo 'Language : English';
											}
											if ($row["language"]=='T')
											{
											echo 'Language : Tamil';
											}
											if ($row["language"]=='S')
											{
											echo 'Language : Sanskrit';
											}
											if ($row["language"]=='TG')
											{
											echo 'Language : Telugu';
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
									
									</div>
								
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" id="searchform" name="searchform" action="booksbycategory.php" >
										<input type="text" name="query1" id="query1" placeholder="Search" />
										<input id="submitsearch" name="submitsearch" type="submit" value="Search" class="small special" />
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

								Section 
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
									<p class="copyright">&copy; Sadagopan.org - All rights reserved: </p>
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
	<?php
		if (isset($_SESSION['category']))
		{	
	?>
		categoryval1='<?php echo $_SESSION['category'];?>';
	<?php 
		}
		else
		{	
	?>
		categoryval1='1';
	<?php 
		}
	?>
	
	<?php
		if (isset($_SESSION['subcategory']))
		{	
	?>
		subcategoryval1='<?php echo $_SESSION['subcategory'];?>';
	<?php 
		}
		else
		{	
	?>
		subcategoryval1='AV';
	<?php 
		}
	?>
	
	<?php
		if (isset($_SESSION['category2']))
		{	
	?>
		categoryval2='<?php echo $_SESSION['category2'];?>';
	<?php 
		}
		else
		{	
	?>
		categoryval2='1';
	<?php 
		}
	?>

	<?php
		if (isset($_SESSION['subcategory2']))
		{	
	?>
		subcategoryval2='<?php echo $_SESSION['subcategory2'];?>';
	<?php 
		}
		else
		{	
	?>
		subcategoryval2='AV';
	<?php 
		}
	?>
	
	$('#category option').map(function () {
       if ($(this).val() == categoryval1) return this;
    }).attr('selected', 'selected');
	
	$('#category2 option').map(function () {
       if ($(this).val() == categoryval2) return this;
    }).attr('selected', 'selected');

	$.ajax({
	type: "GET",
	data :{categoryname:categoryval1},
    url: 'getsubcategory.php',
    success: function(data)
	{
		data1=data.split('%');
		$("#subcategory").html('');
		$("#subcategory").append("<option value=''>--Select--</option>");
		for (i=0;i<data1.length;i++)
		{
			if (data1[i]!="")
			{	
				if (data1[i]==subcategoryval1)
				{	
				$("#subcategory").append("<option value='"+data1[i]+"' selected>"+data1[i]+"</option>");
				}
				else
				{
				$("#subcategory").append("<option value='"+data1[i]+"'>"+data1[i]+"</option>");
				}
			}
		}	
	}
	});
	
	$.ajax({
	type: "GET",
	data :{categoryname:categoryval2},
    url: 'getsubcategory.php',
    success: function(data)
	{
		data1=data.split('%');
		$("#subcategory2").html('');
		$("#subcategory2").append("<option value=''>--Select--</option>");
		for (i=0;i<data1.length;i++)
		{
			if (data1[i]!="")
			{	
				if (data1[i]==subcategoryval2)
				{	
				$("#subcategory2").append("<option value='"+data1[i]+"' selected>"+data1[i]+"</option>");
				}
				else
				{
				$("#subcategory2").append("<option value='"+data1[i]+"'>"+data1[i]+"</option>");
				}
			}
		}	
	}
	});
	
	$("a.toggle").attr("title","menubar");	
			
	$("#reset1").click(function()
	{
	$("#filters").submit();
	});	
	
	$("#reset2").click(function()
	{
	$("#filters2").submit();
	});	

	
	$("#category").change(function()
	{
	category1=$("#category").val();
	$.ajax({
	type: "GET",
	data :{categoryname:category1},
    url: 'getsubcategory.php',
    success: function(data)
	{
		data1=data.split('%');
		$("#subcategory").html('');
		$("#subcategory").append("<option value=''>--Select--</option>");
		for (i=0;i<data1.length;i++)
		{
			if (data1[i]!="")
			{	
			$("#subcategory").append("<option value='"+data1[i]+"'>"+data1[i]+"</option>");
			}
		}	
	}
	});
	});
	
	$("#category2").change(function()
	{
	category2=$("#category2").val();
	$.ajax({
	type: "GET",
	data :{categoryname:category2},
    url: 'getsubcategory.php',
    success: function(data3)
	{
		data4=data3.split('%');
		$("#subcategory2").html('');
		$("#subcategory2").append("<option value=''>--Select--</option>");
		for (i=0;i<data4.length;i++)
		{
			if (data4[i]!="")
			{	
			$("#subcategory2").append("<option value='"+data4[i]+"'>"+data4[i]+"</option>");
			}
		}	
	}
	});
	});
	
	
});
</script>

	</body>
</html>