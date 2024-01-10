<?php ob_start();
session_start();if (!empty($_SESSION["username"])){?><!DOCTYPE HTML>
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
//set_time_limit(300);
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	include $includepath.'/sadagopannew/module/categorylist.php';


if (isset($_POST["Save1"]))
{
	if ($_REQUEST["uploadfiletype"]=="PDF")
	{	
	$target_dir = $includepath."/sadagopannew/pdfuploads/";
	}
	if ($_REQUEST["uploadfiletype"]=="Audio")
	{	
	$target_dir = $includepath."/sadagopannew/pdfuploads/";;
	}
	$uploadok=0;
	$uploadok1=0;
	
	$target_file = $target_dir.basename($_FILES["uploadfile"]["name"]);
	$uploadFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	$target_file1 = $target_dir.basename($_FILES["imagefile"]["name"]);
	$uploadFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
	
	if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file1)) 
	{
      $message="The file ". basename( $_FILES["imagefile"]["name"]). " has been uploaded.";
	  $uploadok1=1;		
	} 
	else 
	{
      $message="Sorry, there was an error uploading your file.";
    }
	
	if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) 
	{
      $message="The file ". basename( $_FILES["uploadfile"]["name"]). " has been uploaded.";
	  $uploadok=1; 	
	} 
	else 
	{
      $message="Sorry, there was an error uploading your file.";
    }
	
	if ($uploadok==1 and $uploadok1==1)
	{
		$uploadfiletype=filter_var($_REQUEST["uploadfiletype"],FILTER_SANITIZE_STRING);
		$imagefile=filter_var($_FILES["imagefile"]["name"],FILTER_SANITIZE_STRING);
		$uploadfilename=str_replace(".pdf","",filter_var($_FILES["uploadfile"]["name"],FILTER_SANITIZE_STRING));
		$azhvars=filter_var($_REQUEST["azhvars"],FILTER_SANITIZE_STRING);
		$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);
		$ebookcode=filter_var($_REQUEST["ebookcode"],FILTER_SANITIZE_STRING);
		$acharyas=filter_var($_REQUEST["acharyas"],FILTER_SANITIZE_STRING);
		$divyadesam=filter_var($_REQUEST["divyadesam"],FILTER_SANITIZE_STRING);
		$deity=filter_var($_REQUEST["deity"],FILTER_SANITIZE_STRING);
		$sampradayatexts=filter_var($_REQUEST["sampradayatexts"],FILTER_SANITIZE_STRING);
		$hymnsanddramas=filter_var($_REQUEST["hymnsanddramas"],FILTER_SANITIZE_STRING);
		$misc=filter_var($_REQUEST["misc"],FILTER_SANITIZE_STRING);
		$authorofcommentry=filter_var($_REQUEST["authorofcommentry"],FILTER_SANITIZE_STRING);
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		
		if ($series=="Nil")
		{	
		$series="";
		}
		else
		{
		$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);
		}		
		
		if ($ebookcode=="Nil")
		{	
		$ebookcode="";
		}
		else
		{
		$ebookcode=filter_var($_REQUEST["ebookcode"],FILTER_SANITIZE_STRING);
		}		
		
		
		if ($azhvars=="Nil")
		{	
		$azhvars="";
		}
		else
		{
		$azhvars=filter_var($_REQUEST["azhvars"],FILTER_SANITIZE_STRING);
		}
		
		if ($acharyas=="Nil")
		{	
		$acharyas="";
		}
		else
		{	
		$acharyas=filter_var($_REQUEST["acharyas"],FILTER_SANITIZE_STRING);
		}
		
		if ($divyadesam=="Nil")
		{	
		$divyadesam="";
		}
		else
		{
		$divyadesam=filter_var($_REQUEST["divyadesam"],FILTER_SANITIZE_STRING);
		}
		
		
		if ($deity=="Nil")
		{	
		$deity="";
		}
		else
		{
		$deity=filter_var($_REQUEST["deity"],FILTER_SANITIZE_STRING);
		}
		
		
		if ($sampradayatexts=="Nil")
		{	
		$sampradayatexts="";
		}
		else
		{
		$sampradayatexts=filter_var($_REQUEST["sampradayatexts"],FILTER_SANITIZE_STRING);
		}
		
		
		if ($hymnsanddramas=="Nil")
		{	
		$hymnsanddramas="";
		}
		else
		{
		$hymnsanddramas=filter_var($_REQUEST["hymnsanddramas"],FILTER_SANITIZE_STRING);
		}
	
		
		if ($misc=="Nil")
		{	
		$misc="";
		}
		else
		{	
		$misc=filter_var($_REQUEST["misc"],FILTER_SANITIZE_STRING);
		}
		
		
		if ($authorofcommentry=="Nil")
		{	
		$authorofcommentry="";
		}
		else
		{
		$authorofcommentry=filter_var($_REQUEST["authorofcommentry"],FILTER_SANITIZE_STRING);
		}
		
		if ($language=="Nil")
		{	
		$language="";
		}
		else
		{
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		}
		
		$queryinsert="INSERT INTO filedata (ebookname,filetype, ebookcode,imagefile, series, azhvars, acharyas, divyadesam,
		deity, sampradayatexts, hymnsanddramas, misc, authorofcommentry, language)
		values ('".$uploadfilename."','".$uploadfiletype."','".$ebookcode."','".$imagefile."','".$series."','".$azhvars."','".$acharyas."','".$divyadesam.
		"','".$deity."','".$sampradayatexts."','".$hymnsanddramas."','".$misc."','".$authorofcommentry."','".$language."')";
		
		if (mysqli_query($conn,$queryinsert))
		{
		$message="<span style='color:green;'>File Record Created Successfully for pdf file ".$uploadfilename.".pdf"."!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Error in Creating File Record!!!</span>";		
		}
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
									if (isset($_SESSION["username"]))
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
										<h2>Upload File</h2>
									</header>
								<div id="formdiv">
										<?php 
										if (isset($message))
										{	
										echo $message;
										}
										?>
										<form class="form-horizontal" enctype="multipart/form-data" id="form1" name="form1" method="post" action="uploadfile.php">
										<table>
										<tr>
										<td>
										<label for="uploadfiletype">Upload File Type</label>
										</td>
										<td>
												<select id="uploadfiletype" name="uploadfiletype">
												<option value="PDF">PDF</option>
												<option value="Audio">Audio</option>
												</select>
										</td>
										</tr>
										
										<tr><td>
										<label for="imagefile">ImageFile</label>
										</td>
										<td>
										<input type="file" name="imagefile" id="imagefile" required>
										</td>
										
										<tr><td>
										<label  for="uploadfile">File to Upload</label>
										</td>
										<td>
										<input type="file"  name="uploadfile" id="uploadfile" required>
										</td>
										</tr>
										
										<tr>
										<td>
										<label  for="series">Series:</label>
										</td>
										<td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="series" id="series">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($serieslist);$i++)
												{
												echo "<option value='".$serieslist[$i]."'>".$serieslist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
										<label  for="ebookcode">Book Code</label>
										</td>
										<td>
										<div class="6u$ 12u$">
											<input readonly name="ebookcode" id="ebookcode" align="left" value="">
										</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
										<label  for="azhvars">Azhvars:</label>
										</td>
										<td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="azhvars" id="azhvars">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($azhvarslist);$i++)
												{
												echo "<option value='".$azhvarslist[$i]."'>".$azhvarslist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="acharyas">acharyas</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="acharyas" id="acharyas">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($acharyaslist);$i++)
												{
												echo "<option value='".$acharyaslist[$i]."'>".$acharyaslist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="divyadesam">divyadesam</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
											<select name="divyadesam" id="divyadesam">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($divyadesamlist);$i++)
												{
												echo "<option value='".$divyadesamlist[$i]."'>".$divyadesamlist[$i]."</option>";
												}		
												?>
											</select>

											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="deity">deity</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
											<select name="deity" id="deity">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($deitylist);$i++)
												{
												echo "<option value='".$deitylist[$i]."'>".$deitylist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="sampradayatexts">Sampradaya Texts</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="sampradayatexts" id="sampradayatexts">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($sampradayatextslist);$i++)
												{
												echo "<option value='".$sampradayatextslist[$i]."'>".$sampradayatextslist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="hymnsanddramas">hymnsanddramas</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="hymnsanddramas" id="hymnsanddramas">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($hymnsanddramaslist);$i++)
												{
												echo "<option value='".$hymnsanddramaslist[$i]."'>".$hymnsanddramaslist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="misc">Misc</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="misc" id="misc">
												<option value="Nil">Nil</option>
												<option value="Yes">Yes</option>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="author">Author</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
											<select name="author" id="author">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($authorlist);$i++)
												{
												echo "<option value='".$authorlist[$i]."'>".$authorlist[$i]."</option>";
												}		
												?>
											</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<label  for="language">Language</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
												<select name="language" id="language">
												<option value="Nil">Nil</option>
												<?php
												for ($i=0;$i<sizeof($languagelist);$i++)
												{
												echo "<option value='".$languagelist[$i]."'>".$languagelist[$i]."</option>";
												}		
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td></td>
										<td>
										<button type="Submit" id="Save1" name="Save1" class="button special" >Save</button>
										<button type="reset" id="Cancel1" name="Cancel1" class="button">Cancel</button>
										</td>
										</tr>
										
										</form>
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
									<?php 
									if (!isset($_SESSION["username"]))
									{	
									?>	
										<li><a href="login.php">Admin HomePage</a></li>
									<?php
									}
									?>	
										<li><a href="uploadfile.php">Upload PDF File</a></li>
										<li><a href="uploadaudiofile.php">Upload Audio File</a></li>
										<li><a href="editdeletefile.php">Edit/Delete PDF File</a></li>
										<li><a href="editdeleteaudiofile.php">Edit/Delete Audio File</a></li>
										<li><a href="viewguestremarks.php">View Guest Book</a></li>
										<li><a href="addnewcategory.php">Add New Category</a></li>
										<li><a href="logout.php">Logout</a></li>
								
									</ul>
								</nav>

							<!-- Section -->
								<section>
									
								</section>

							<!-- Section -->
								<section>
									
								</section>

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
	$("#series").change(function()
	{
	
	series1=$("#series").val();
	
	if (series1=="Nil")
	{
	$("#ebookcode").val("");
	return false;
	}
	
	$.ajax({
	type: "GET",
	data :{series:series1},
    url: 'getnextseries.php',
    success: function(datacode)
	{
	$("#ebookcode").val(datacode.trim());
	}
	});
	});
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