<?php
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
	<body style='color:#303030;line-height:1.7em;text-align:justify; padding-top: 20px;'>
	<style style="color: #C56A08">
	
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
	
	@media only screen and (min-width:451px) and (max-width:800px){
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
	display:none;	
	}	
	#table2
	{
	width: 100%;	
	display:block;	
	}	

	#filtertable1
	{
	display:none;	
	}	
	#filtertable2
	{
	width: 100%;	
	display:block;	
	}	
	.form-control
	{
	display: block;
	width: 120px;
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
		
		#filtertable1
		{
		display:none;	
		}	
		#filtertable2
		{
		width: 100%;	
		display:block;	
		}	

		#table1
		{
		display:none;	
		}	
		#table2
		{
		width: 100%;	
		display:block;	
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
	}
	
	@media only screen and (min-width:801px) and (max-width:2000px){
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
			width: 210px;
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
	table {border:thin; border-width: thin; border-color: darkblue;border-top-color:darkblue; border-bottom-color: darkblue;}
	td {vertical-align: middle;}
	</style>
		<button onclick="topFunction()" id="scrollBtn" title="Go to top">Go Top</button>

	<?php 
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
			/*
			$_SESSION["category"]=$_REQUEST["category"];
			$_SESSION["subcategory"]=$_REQUEST["subcategory"];
			$subcategory=$_REQUEST["subcategory"];	

			if ($_REQUEST["category"]=="1" and !empty($_REQUEST["subcategory"]))
			{
			$queryselect="select * from filedata where series='".trim($subcategory)."' order by series asc";	
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
			*/
			if ($_REQUEST["ashta"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Ashta Prabandham' order by ebookname asc";	
			}
			
			if ($_REQUEST["desika"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Desika Prabandham' order by ebookname asc";	
			}
			
			if ($_REQUEST["divya"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Divya Prabandham' order by ebookname asc";	
			}
			
			if ($_REQUEST["stuti"]=="Yes")
			{
			$queryselect="select * from filedata WHERE (hymnsanddramas LIKE 'Stuti') OR (hymnsanddramas LIKE 'Stotram') OR
			(hymnsanddramas LIKE 'Stuti & Ithihasam') OR (hymnsanddramas LIKE 'Stavam') order by ebookname asc";	
			}
			
			if ($_REQUEST["gss"]=="Yes")
			{
			$queryselect="select * from filedata WHERE (hymnsanddramas LIKE 'Gadyam') OR (hymnsanddramas LIKE 'Satakam') OR
			(hymnsanddramas LIKE 'Suktam') order by ebookname asc";	
			}
			
			if ($_REQUEST["chillarai"]=="Yes")
			{
			$queryselect="select * from filedata where sampradayatexts='Chillarai Rahasya' order by ebookname asc";	
			}
			
			if ($_REQUEST["kritis"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Music' order by ebookname asc";	
			}
			
			if ($_REQUEST["misc"]=="Yes")
			{
			$queryselect="select * from filedata where misc='Yes' order by ebookname asc";	
			}
			$selectresult=mysqli_query($conn,$queryselect);
			
		}
		
		if (isset($_REQUEST["search2"]))
		{	
			/*
			$_SESSION["category2"]=$_REQUEST["category2"];
			$_SESSION["subcategory2"]=$_REQUEST["subcategory2"];
			$subcategory2=$_REQUEST["subcategory2"];
			if ($_REQUEST["category2"]=="1" and !empty($_REQUEST["subcategory2"]))
			{
			$queryselect="select * from filedata where series='".trim($subcategory2)."' order by series asc";	
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
			if ($_REQUEST["ashta"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Ashta Prabandham' order by ebookname asc";	
			}
			if ($_REQUEST["misc2"]=="Yes")
			{
			$queryselect="select * from filedata where misc='Yes' order by ebookname asc";	
			}
			*/
			if ($_REQUEST["ashta2"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Ashta Prabandham' order by ebookname asc";	
			}
			
			if ($_REQUEST["desika2"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Desika Prabandham' order by ebookname asc";	
			}
			
			if ($_REQUEST["divya2"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Divya Prabandham' order by ebookname asc";	
			}
			
			if ($_REQUEST["stuti2"]=="Yes")
			{
			$queryselect="select * from filedata WHERE (hymnsanddramas LIKE 'Stuti') OR (hymnsanddramas LIKE 'Stotram') OR
			(hymnsanddramas LIKE 'Stuti & Ithihasam') OR (hymnsanddramas LIKE 'Stavam') order by ebookname asc";	
			}
			
			if ($_REQUEST["gss2"]=="Yes")
			{
			$queryselect="select * from filedata WHERE (hymnsanddramas LIKE 'Gadyam') OR (hymnsanddramas LIKE 'Satakam') OR
			(hymnsanddramas LIKE 'Suktam') order by ebookname asc";	
			}
			
			if ($_REQUEST["chillarai2"]=="Yes")
			{
			$queryselect="select * from filedata where sampradayatexts='Chillarai Rahasya' order by ebookname asc";	
			}
			
			if ($_REQUEST["kritis2"]=="Yes")
			{
			$queryselect="select * from filedata where hymnsanddramas='Music' order by ebookname asc";	
			}
			
			if ($_REQUEST["misc2"]=="Yes")
			{
			$queryselect="select * from filedata where misc='Yes' order by ebookname asc";	
			}
			
			$selectresult=mysqli_query($conn,$queryselect);
		}
	}
	
	if (!isset($_REQUEST["submitsearch"]) AND !isset($_REQUEST["search1"]) AND  !isset($_REQUEST["search2"]))
	{	
		$queryselect="select * from filedata where series='Ahobilavalli' order by series asc";	
		$selectresult=mysqli_query($conn,$queryselect);
	}
	?>
 
	<style>
/*
	@media only screen and (max-width:1680px) and (min-width:769px)
	{
	#filtertable1 tr td
	{
	width:100%;	
	}
	#filtertable2 tr td
	{
	width:300px;	
	}
	}
*/	
	@media only screen and (max-width:768px) and (min-width:150px)
	{
	#filtertable1 tr td
	{
	width:100%;	
	}
	#filtertable2 tr td
	{
	width:100%;	
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
  <table id="banner2" width="100%">
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
										<h2>Quick Search of E-Books</h2>
									</header>
								<h4>
								<div align="left">
								For Quick Search check the boxes below and click on Search.  To go to other Search options click on links below.<br>
						<!--	<a href="QuickSearch" style='color:blue'>Quick Search</a>&nbsp;&nbsp;  -->	
								<a href="SearchBySeries" style='color:blue'>List By Series</a>&nbsp;&nbsp;									
								<a href="AlphabeticalBookList" style='color:blue'>List Alphabetically</a>&nbsp;&nbsp;
								<a href="SearchByTitle" style='color:blue'>List By Title</a>&nbsp;&nbsp;	
								<a href="CategoryBookList" style='color:blue'>List By Category</a>&nbsp;&nbsp;
								</div>
								</h4>
								<div class="table-wrapper">
								<form id="filters" name="filters" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<table id="filtertable1" width="100%">		
									
									<tr>
									<td width="25%" nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="ashta" name="ashta">
									<label for="ashta">Ashta Prabandham</label>
									</div>
									</td>
											
									<td width="25%" nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="desika" name="desika">
									<label for="desika">Desika Prabandham</label>
									</div>									
									</td>
								
									<td width="25%" nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="divya" name="divya">
									<label for="divya">Divya Prabandham</label>
									</div>
									</td>
								
								
									<td width="25%" nowrap>		
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="stuti" name="stuti">
									<label for="stuti">Stuti, Stotram, Stavam</label>
									</div>
									</td>										
									</tr>
									
									<tr>
									<td width="25%" nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="gss" name="gss">
									<label for="gss">Gadyam, Satakam, Suktam</label>
									</div>
									</td>
											
									<td width="25%" nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="chillarai" name="chillarai">
									<label for="chillarai">Chillarai Rahasyam</label>
									</div>									
									</td>
								
									<td width="25%" nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="kritis" name="kritis">
									<label for="kritis">Kritis</label>
									</div>
									</td>
										
									<td nowrap>
									<div class="6u$ 12u$(small)">
									<input type="checkbox" value="Yes" id="misc" name="misc">
									<label for="misc">Miscellaneous</label>
									</div>										 
									</td>										
								    </tr>
									
									<tr>
									<td colspan="2" align="right">
										<input id="search1" name="search1" type="submit" value="Search" class="button special" required>
									</td>
									<td colspan="2" align="left">
										<input id="reset1" name="reset1" type="reset" value="Reset"  class="button"/>										
									</td>
								  </tr>
									
									</table>
										<div class="6u$">
										</div>
								  </form>
								
								
								<form id="filters2" name="filters2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<table id="filtertable2" width="100%">	
									<tr>
									<td width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="ashta2" name="ashta2">
									<label for="ashta2">Ashta Prabandham</label>
									</div>
									</td>
									</tr>
									
									<tr>
									<td width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="desika2" name="desika2">
									<label for="desika2">Desika Prabandham</label>
									</div>									
									</td>
									</tr>	
									
									<tr>
									<td width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="divya2" name="divya2">
									<label for="divya2">Divya Prabandham</label>
									</div>
									</td>
									</tr>
																		
									<tr>
									<td width="100%" colspan="2" nowrap>		
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="stuti2" name="stuti2">
									<label for="stuti2">Stuti, Stotram, Stavam</label>
									</div>
									</td>										
									</tr>
									
									<tr>
									<td width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="gss2" name="gss2">
									<label for="gss2">Gadyam, Satakam, Suktam</label>
									</div>
									</td>
									</tr>

									<tr>		
									<td width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="chillarai2" name="chillarai2">
									<label for="chillarai2">Chillarai Rahasyam</label>
									</div>									
									</td>
									</tr>	
									
									<tr>
									<td width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="kritis2" name="kritis2">
									<label for="kritis2">Kritis</label>
									</div>
									</td>
									</tr>	
									
									<tr>
									<td  width="100%" colspan="2" nowrap>
									<div class="6u$ 12u$">
									<input type="checkbox" value="Yes" id="misc2" name="misc2">
									<label for="misc2">Miscellaneous</label>
									</div>										 
									</td>										
								    </tr>
									
									<tr>
									  <td align="center" valign="middle" width="50%" nowrap>
									  <input id="search2" name="search2" type="submit" value="Search" class="button special" required></td>
									  <td align="center" valign="middle" width="50%" nowrap>
										  <input id="reset2" name="reset2" type="reset" value="Reset"  class="button"/>
									  </td>							
									<!--
									<tr>
									<td width="25%">
									Category
									</td>
									<td width="25%">
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
									  <td colspan="2" align="center">
								    <div class="6u$ 12u$(small)" >
									<input type="checkbox" value="Yes" id="misc2" name="misc2">
									<label for="misc2">Miscellaneous</label>
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
									</tr> -->
									</table>									
									</form>
								</div>
							
								<div class="table-wrapper">
								<table id="table1" cellpadding="0" cellspacing="0" border="2" width="90%">
									<tbody>
									<?php
									if (mysqli_num_rows($selectresult)>0)
									{ 
									?>
									<tr>
										  <td colspan="3"  bgcolor="#D3D3D3" cellpadding="0"><strong>&nbsp;Click on E-Book picture or the links below to open the E-Book in another page.</strong></td>
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
									
									<table id="table2">
									<thead>
										<tr><td bgcolor="#D3D3D3"><strong>Click on E-Book picture or the links below to open the E-Book in another page.</strong></td></tr>
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
		subcategoryval1=' 	Ahobilavalli';
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
		subcategoryval2=' 	Ahobilavalli';
	<?php 
		}
	?>
	
	$('input[type="checkbox"]').on('change', function() {
   	$('input[type="checkbox"]').not(this).prop('checked', false);	
	});
		
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
	
	$("a.toggle").attr("title","Click here to show or hide menubar");
	$("#sidebar.toggle").attr("title","Click here to show or hide menubar");
			
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