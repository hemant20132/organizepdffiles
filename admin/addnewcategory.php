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
		$category=filter_var ($_REQUEST["category"],FILTER_SANITIZE_STRING);
		$categoryvalue=filter_var($_REQUEST["categoryvalue"],FILTER_SANITIZE_STRING);
		$queryselect="select ".$category." from filtercategory where ".$category." = '".$categoryvalue."'"; 
		
		$result1=mysqli_query($conn,$queryselect);
		if (mysqli_num_rows($result1)>0)
		{
		$message="<span style='color:red;'>This category text already exists !!!</span>";		
		}
		else
		{
			$queryinsert="INSERT INTO filtercategory (categoryname,categorytext) values ('".$category."','".$categoryvalue."')";
			if (mysqli_query($conn,$queryinsert))
			{
			$message="<span style='color:green;'>Category Created Successfully!!!</span>";		
			}
			else
			{
			$message="<span style='color:red;'>Error in Creating Category Record!!!</span>";		
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
										<h2>Add New Category</h2>
									</header>
								<div id="formdiv">
										<?php 
										if (isset($message))
										{	
										echo $message;
										}
										?>
										<form class="form-horizontal"  id="form1" name="form1" method="post" action="addnewcategory.php">
										<table>
										<tr>
										<td>
										<label for="category">Category</label>
										</td>
										<td>
												<select id="category" name="category">
												<option value="Nil">Nil</option>
												<option value="series">Series</option>
												<option value="azhvars">Azhvars</option>
												<option value="acharyas">Acharyas</option>
												<option value="divyadesam">Divyadesam</option>
												<option value="deity">Deity</option>
												<option value="sampradayatexts">Sampradaya Texts</option>
												<option value="hymnanddramas">Hymns and Dramas</option>
												<option value="authorofcommentry">Author of Commentry</option>
												<option value="language">Language</option>
												</select>
										</td>
										</tr>
										
										<tr><td>
										<label for="categoryvalue">Category Text</label>
										</td>
										<td>
										<input type="text" name="categoryvalue" id="categoryvalue" required>
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
										<li><a href="editdeletefile.php">Edit/Delete File</a></li>
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