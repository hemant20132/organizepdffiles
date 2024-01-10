<?php 
ob_start();
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
	set_time_limit(300);
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';

if (isset($_POST["Save1"]))
{
	if ($_REQUEST["uploadfiletype"]=="PDF")
	{	
	$target_dir = $includepath."/sadagopannew/audiouploads/";
	}
	if ($_REQUEST["uploadfiletype"]=="Audio")
	{	
	$target_dir = $includepath."/sadagopannew/audiouploads/";
	}
	$uploadok=0;
	
	$target_file = $target_dir.basename($_FILES["audiofile"]["name"]);
	$uploadFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if (move_uploaded_file($_FILES["audiofile"]["tmp_name"], $target_file)) 
	{
      $message="The file ". basename( $_FILES["audiofile"]["name"]). " has been uploaded.";
	  $uploadok=1; 	
	} 
	else 
	{
      $message="Sorry, there was an error uploading your file.";
    }
	
	if ($uploadok==1)
	{
		$category=filter_var($_REQUEST["category"],FILTER_SANITIZE_STRING);
		$uploadfiletype=filter_var($_REQUEST["uploadfiletype"],FILTER_SANITIZE_STRING);	
		$audiofile=filter_var($_FILES["audiofile"]["name"],FILTER_SANITIZE_STRING);
		$audiofilename=$category."/".filter_var($_REQUEST["audiofilename"],FILTER_SANITIZE_STRING);
		
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
		
		$queryinsert="INSERT INTO audiofiledata (filetype, audiofilename, audiofile, author, language)
		values ('".$uploadfiletype."','".$audiofilename."','".$audiofile."','".$author."','".$language."')";
		
		if (mysqli_query($conn,$queryinsert))
		{
		$message="<span style='color:green;'>Audio File Record Created Successfully!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Error in Creating AudioFile Record!!!</span>";		
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
										<h2>Upload Audio File</h2>
									</header>
								<div id="formdiv">
										<?php 
										if (isset($message))
										{	
										echo $message;
										}
										?>
										<form class="form-horizontal" enctype="multipart/form-data" id="form1" name="form1" method="post" action="uploadaudiofile.php">
										<table>
										<tr>
										<td>
										<label for="uploadfiletype">Upload File Type</label>
										</td>
										<td>
												<select id="uploadfiletype" name="uploadfiletype">
												<option value="Audio">Audio</option>
												<option value="PDF">PDF</option>
												</select>
										</td>
										</tr>
										
										<tr>
										<td>
										<label for="category">Category</label>
										</td>
										<td>
												<select id="category" name="category">
												<option value="Nil">Nil</option>
												<option value="AshtaPrabandham">AshtaPrabandham</option>
												<option value="DesikaPrabandham">DesikaPrabandham</option>
												<option value="Godhastuti">Godhastuti</option>
												<option value="Godhanjali">Godhanjali</option>
												<option value="Other_kruthis_PV">Other Kruthis PV</option>
												<option value="kruthis">kruthis</option>
												<option value="melakartha">melakartha</option>
												</select>
										</td>
										</tr>
										
										<tr><td>
										<label for="audiofilename">AudioFile</label>
										</td>
										<td>
										<input type="text" name="audiofilename" id="audiofilename" required>
										</td>
										</tr>	
										
										<tr><td>
										<label for="audiofile">AudioFile</label>
										</td>
										<td>
										<input type="file" name="audiofile" id="audiofile" required>
										</td>
										</tr>	
										
										<tr><td>
										<label  for="author">Author</label>
										</td><td>
										<div class="6u$ 12u$">
											<div class="select-wrapper">
											<select name="author" id="author">
												<option value="Nil">Nil</option>
												<option value="V.Sadagopan">V.Sadagopan</option>
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
													<option value="E">English=E</option>
													<option value="T">Tamil = T</option>
													<option value="S">Sanskrit = S</option>
													<option value="TG">Telugu = TG</option>
												</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr><td>
										<button type="Submit" id="Save1" name="Save1" class="button special" >Save</button>
										</td>
										<td>
										<button type="Cancel" id="Cancel1" name="Cancel1" class="button">Cancel</button>
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
									
										<li><a href="uploadfile.php">Upload File</a></li>
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