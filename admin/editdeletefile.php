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
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';

if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
$queryselect ="select * from filedata order by ebookname asc";	  
$selectresult=mysqli_query($conn,$queryselect);
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
										<h2>Edit/Delete File</h2>
									</header>
									<div class="table-wrapper">
										<table id="table1" class="display" border="1" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>SrNo</th>
												<th>EBookName</th>
												<th>Image</th>
												<th>Author </th>
												<th>Language</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
										<?php
										if (mysqli_num_rows($selectresult)>0)
										{
												$srno=0;
												while ($row=mysqli_fetch_array($selectresult))
												{
												$srno=$srno+1;	
												?>
												<tr>
												<td width="50px"><?php echo $srno; ?></td>
												<td width="160px"><?php echo $row["ebookname"]; ?></td>
												<td width="100px"><?php echo "<img width='80px' height='100px' src='/sadagopannew/pdfuploads/".$row["imagefile"]."'/>";?></td>
												<td width="100px"><?php echo $row["authorofcommentry"]; ?></td>
												<td width="70px"><?php echo $row["language"]; ?></td>
												<td width="70px"><a href='editfiledata.php?ebookname=<?php echo $row["ebookname"] ;?>' id='edit'>Edit</a></td>
												<td width="70px"><a id="deletebutton" href='deletefiledata.php?ebookname=<?php echo $row["ebookname"] ;?>' id='delete'>Delete</a></td>
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
									if ($_SESSION['userlogin'])
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

						
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Sadagpan.Org - All Rights Reserved</p>
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
	$("#deletebutton").click(function()
	{
	var delete1=confirm("Are you sure about deleting this record ?");
	if (delete1==true)
	{
	return true;
	}
	if (delete1==false)
	{
	return false;
	}
	});	
});
</script>

	</body>
</html>
<?php
}
else
{
echo "User Needs to Login in";
}	
?>