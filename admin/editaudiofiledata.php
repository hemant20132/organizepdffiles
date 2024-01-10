<?php ob_start();
session_start();if (isset($_SESSION["username"]))
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
session_start();
error_reporting('E_All');
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	
if (isset($_REQUEST['audiofilename']))
{
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	$audiofilename1=filter_var($_REQUEST['audiofilename'],FILTER_SANITIZE_STRING);
	$_SESSION['audiofilename']=$audiofilename1;
	$queryselect="select * from audiofiledata where audiofilename='".$audiofilename1."'";
	$result=mysqli_query($conn,$queryselect);
    
	while($row1=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
	{
		$filetype=$row1["filetype"];
		$audiofilename=$row1["audiofilename"];
		$audiofile=$row1["audiofile"];
		$author=$row1["author"];
		$language=$row1["language"];
	}
}

if (isset($_POST["Save1"]))
{
	if ($_REQUEST["uploadfiletype"]=="PDF")
	{	
	$target_dir = "audiouploads/";
	}
	if ($_REQUEST["uploadfiletype"]=="Audio")
	{	
	$target_dir = "audiouploads/";
	}
	$uploadok=0;
	
	
	if ($_FILES["audiofile"]["name"]<>"")
	{	
		$target_file = $target_dir.basename($_FILES["audiofile"]["name"]);
		$uploadFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (move_uploaded_file($_FILES["audiofile"]["tmp_name"], $target_file)) 
		{
		  $message="The file ". basename($_FILES["audiofile"]["name"]). " has been uploaded.";
		  $uploadok=1;		
		} 
		else 
		{
		  $message="Sorry, there was an error uploading your file.";
		}
	}
	
	if ($uploadok==0)
	{
		$uploadfiletype=filter_var($_REQUEST["uploadfiletype"],FILTER_SANITIZE_STRING);	
		$audiofilename=$_SESSION["audiofilename"];
		$author=filter_var($_REQUEST["author"],FILTER_SANITIZE_STRING);
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		
		if (isset($_REQUEST["audiofile"]["name"]))
		{	
		$audiofile=filter_var($_FILES["audiofile"]["name"],FILTER_SANITIZE_STRING);
		}
		else
		{
		$audiofile=filter_var($_REQUEST["audiofile1"],FILTER_SANITIZE_STRING);
		}
				
			
		if ($author=="Nil")
		{	
		$author="";
		}
		else
		{
		$author=filter_var($_REQUEST["author"],FILTER_SANITIZE_STRING);
		}
		
		if ($language=="Nil")
		{	
		$language="";
		}
		else
		{
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		}
		
		$queryupdate="update audiofiledata 
		set filetype='".$uploadfiletype."',
		audiofile='".$audiofile."',	
		author='".$author."',
		language='".$language."' 
		where audiofilename='".$_SESSION['audiofilename']."'";
		echo $queryupdate;
		
		if (mysqli_query($conn,$queryupdate))
		{
		$message="<span style='color:green;'>Audio File Record Updated Successfully!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Audio Error in Updating File Record!!!</span>";		
		}
	}
	
	if ($uploadok==1)
	{
		$uploadfiletype=filter_var($_REQUEST["uploadfiletype"],FILTER_SANITIZE_STRING);	
		$audiofilename=$_SESSION["audiofilename"];
		$author=filter_var($_REQUEST["author"],FILTER_SANITIZE_STRING);
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		
		if (isset($_REQUEST["audiofile"]["name"]))
		{	
		$audiofile=filter_var($_FILES["audiofile"]["name"],FILTER_SANITIZE_STRING);
		}
		else
		{
		$audiofile=filter_var($_REQUEST["audiofile1"],FILTER_SANITIZE_STRING);
		}
				
			
		if ($author=="Nil")
		{	
		$author="";
		}
		else
		{
		$author=filter_var($_REQUEST["author"],FILTER_SANITIZE_STRING);
		}
		
		if ($language=="Nil")
		{	
		$language="";
		}
		else
		{
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		}
		
		$queryupdate="update audiofiledata 
		set filetype='".$uploadfiletype."',
		audiofile='".$audiofile."',	
		author='".$author."',
		language='".$language."' 
		where audiofilename='".$_SESSION['audiofilename']."'";
		echo $queryupdate;
		
		if (mysqli_query($conn,$queryupdate))
		{
		$message="<span style='color:green;'>Audio File Record Updated Successfully!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Error in Updating Audio File Record!!!</span>";		
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
										<h2>Edit Audio File Data</h2>
										<a href="editdeleteaudiofile.php" class="button special small" style="margin-top:-50px;">Back to List</a>
									</header>
								
									<div class="table-wrapper">
									<?php 
									if (isset($message))
									{	
									echo $message;
									}
									?>
									<form class="form-horizontal" enctype="multipart/form-data" id="form2" name="form2" method="post" action="editaudiofiledata.php">
									<table>
									<tr>
									<td>
									<label for="uploadfiletype">Upload File Type</label>
									</td>
									<td>	
										<div class="6u 12u$(xsmall)">
											<select id="uploadfiletype" name="uploadfiletype">
											<option value="PDF">PDF</option>
											<option value="Audio">Audio</option>
											<?php 
											if (isset($uploadfiletype)) 
											{
											echo "<option value=".$uploadfiletype." selected>".$uploadfiletype."</option>";
											}
											?>
											</select>
										</div>
									</td>
									</tr>
									
									<tr>
									<td>
									<label for="audiofilename">Audio File Name</label>
									</td>
									
									<td>
									<?php if (isset($audiofilename))
										{
									?>		
									<input type="text" value=<?php echo $audiofilename;?> name="audiofilename" id="audiofilename" >
									<?php	
										}
									?>
									</td>
									</tr>
											
									<tr>
									<td>
									<label for="audiofile1">Audio File </label>
									</td>
									<td>
										<?php if (isset($audiofile))
										{
										?>
										<input type="text" value="<?php echo $audiofile;?>" name="audiofile1" id="audiofile1" >
										<?php	
											echo $audiofile;
										}
										?>
									</td>
									</tr>
										
										<tr>
										<td>
											<label for="audiofile">Upload New Audio file</label>
										</td>
										<td>
										<div class="6u 12u$(xsmall)">
											  <input type="file" name="audiofile" id="audiofile" >
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="author">Author</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
										<div class="select-wrapper">
												<select name="author" id="author">
												<option value="Nil">Nil</option>
												<option value="V.Sadagopan">V.Sadagopan</option>
												<?php 
												if (isset($author))
												{
												echo "<option value=".$author." selected>".$author."</option>";
												}	
												?>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="language">Language</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
												<div class="select-wrapper">
												<select name="language" id="language">
													<option value="Nil">Nil</option>
													<option value="E">English=E</option>
													<option value="T">Tamil = T</option>
													<option value="S">Sanskrit = S</option>
													<option value="TG">Telugu = TG</option>
												<?php
												if (isset($language))
												{
												echo "<option value=".$language." selected>".$language."</option>";
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
										<?php if (!isset($_SESSION["username"]))
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
	$("#back").click(function()
	{
	alert("clicked");	
	location.href=editdeletefile.php;	
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