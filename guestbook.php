<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sadagopan.org</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  </head>
<body>

<style>
@media only screen and (max-width:451px) and (min-width:799px)
{

	.container
	{
	height:600px;
	background-color:#a8a8a8;
	margin-left:0%;
	margin-right:0%;
	}
	.mobile-only
	{
	display:none;	
	}	
	.desktop-only
	{
	display:block;	
	}	
	
	.header{
	position:relative;	
	padding-bottom:15px;
	height:70px;
	text-decoration:none;
	font-size:18pt;
	color:#330066;
	left:5px;
	}

	.header1{
	position:relative;
	top:2px;
	list-style-type:none;
	width:80%;
	background-color:#a8a8a8;
	}

	.menudiv ul
	{
	display:inline;
	margin-left:-10px;
	}
	
	.menudiv ul li
	{
	padding-top:15px;	
	display:inline;
	text-decoration:none;
	color:blue;
	width:30px;
	margin-left:10px;
	}
	
	.menudiv ul li a
	{
	display:inline;
	text-decoration:none;
	color:#330066;
	font-size:14pt;
	}
	
	.menudiv ul li a:hover
	{
	display:inline;
	text-decoration:none;
	color:#330066;
	font-weight:900;
	}

	label
	{
	color:#330066;
	font-size:11pt;
	}
	
	.footer
	{
	position:absolute;
	background-color:#e6b3ff;
	width:100%;
	top:600px;
	height:50px;
	}
	.footer1
	{
	 color:#330066;
	 padding-left:20%;
	 padding-top:10px;
	 list-style-type:none;
	}


}
@media only screen and (max-width:450px) and (min-width:150px)
{
	.container
	{
	width:100%;	
	height:600px;
	background-color:#a8a8a8;
	margin-left:0%;
	margin-right:0%;
	}

	.mobile-only
	{
	display:block;	
	}
	
	.desktop-only
	{
	display:none;	
	}		

	.header{
	position:relative;	
	padding-bottom:15px;
	height:70px;
	text-decoration:none;
	font-size:18pt;
	color:#330066;
	left:5px;
	}

	.header1{
	position:relative;
	top:2px;
	list-style-type:none;
	width:80%;
	background-color:#a8a8a8;
	}

	.menudiv
	{
	position:relative;
	top:4px;
	margin-right:4px;
	width:100%;
	background-color:#e6b3ff;
	height:90px;
	}
	
	.menudiv ul
	{
	display:inline;
	}
	
	.menudiv ul li
	{
	margin-left:7px;	
	margin-top:9px;	
	display:inline;
	text-decoration:none;
	color:blue;
	height:15px;
	
	}
	
	.menudiv ul li a
	{
	display:inline;
	text-decoration:none;
	color:#330066;
	font-size:9pt;
	}
	
	.menudiv ul li a:hover
	{
	display:inline;
	text-decoration:none;
	color:#330066;
	font-weight:900;
	}
	
	label
	{
	color:#330066;
	font-size:13pt;
	}
	h3
	{
	position:realative;
	top:50px;	
	}
	#form1
	{
	position:relative;	
	top:50px;	
	}	
	
	#table1
	{
	position:relative;
	top:20px;
	}
	
	#table1 tr th
	{
	background-color:#33ffcc;	
	font-style:italics;
	}	
	
	#table1 tr td
	{
	background-color:#e6b3ff;	
	font-style:italics;
	}	
	
	.footer
	{
	position:relative;
	background-color:#e6b3ff;
	top:100px;
	height:70px;
	}
		
	.footer1
	{
	 color:#330066;
	 padding-left:5%;
	 padding-top:10px;
	 list-style-type:none;
	}
	
}




@media only screen and (min-width:800px) and (max-width:2000px)
{
	.container
	{
	height:600px;
	background-color:#a8a8a8;
	margin-left:0%;
	margin-right:0%;
	}
	.mobile-only
	{
	display:none;	
	}	
	.desktop-only
	{
	display:block;	
	}	
	
	.header{
	position:relative;	
	padding-bottom:15px;
	height:70px;
	text-decoration:none;
	font-size:18pt;
	color:#330066;
	left:5px;
	}

	.header1{
	position:relative;
	top:2px;
	list-style-type:none;
	width:80%;
	background-color:#a8a8a8;
	}

	.menudiv ul
	{
	display:inline;
	margin-left:-10px;
	}
	
	.menudiv ul li
	{
	padding-top:15px;	
	display:inline;
	text-decoration:none;
	color:blue;
	width:30px;
	margin-left:10px;
	}
	
	.menudiv ul li a
	{
	display:inline;
	text-decoration:none;
	color:#330066;
	font-size:14pt;
	}
	
	.menudiv ul li a:hover
	{
	display:inline;
	text-decoration:none;
	color:#330066;
	font-weight:900;
	}

	label
	{
	color:#330066;
	font-size:11pt;
	}
	
	.footer
	{
	position:absolute;
	background-color:#e6b3ff;
	width:100%;
	top:600px;
	height:50px;
	}
	.footer1
	{
	 color:#330066;
	 padding-left:20%;
	 padding-top:10px;
	 list-style-type:none;
	}
	

}

</style>




<?php
//set_time_limit(300);
if (isset($_POST["Save1"]))
{
	if ($_REQUEST["uploadfiletype"]=="PDF")
	{	
	$target_dir = "pdfuploads/";
	}
	if ($_REQUEST["uploadfiletype"]=="Audio")
	{	
	$target_dir = "audiouploads/";
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
		$uploadfilename=filter_var($_FILES["uploadfile"]["name"],FILTER_SANITIZE_STRING);
	    $title=filter_var($_REQUEST["title"],FILTER_SANITIZE_STRING);
		$description=filter_var($_REQUEST["description"],FILTER_SANITIZE_STRING);
		$category=filter_var($_REQUEST["category"],FILTER_SANITIZE_STRING);
		$queryinsert="Insert into filedata (filetype,imagefile,filename,title,description,category) 
		values ('".$uploadfiletype."','".$imagefile."','".$uploadfilename."','".$title."','".$description."','".$category."')";
  	    $conn = mysqli_connect("sql104.epizy.com","epiz_20558076","sg6muwsE","epiz_20558076_database","3306","");
		if (mysqli_query($conn,$queryinsert))
		{
		$message="<span style='color:green;'>File Record Created Successfully!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Error in Creating File Record!!!</span>";		
		}
	}
}
?>

<div class="container" >

<div class="header1">
	  <a href="index.php" class="header">Sadagopan.Org</a>
</div>
<div class="desktop-only menudiv" style="background-color:#e6b3ff;padding-top:15px;height:80px;">
    <ul style="margin-left:140px;padding-top:15px;display:inline;">
	  <li ><a  href="index.php">Home</a></li>
      <li ><a  href="uploadfile.php">Upload File</a></li>
      <li ><a  href="editdeletefile.php">Edit/Delete File</a></li>
      <li ><a  href="listfile.php">List File</a></li>
	  <li ><a  href="listaudiofile.php">List Audio File</a></li>
	  </ul>
	 <br>
	<ul style="margin-left:140px;padding-top:15px;display:inline;">	
     <li ><a  href="links.php">Links</a></li>
	  <li ><a  href="viewguestbook.php">View GuestBook</a></li>
	  <li><a  href="signguestbook.php">Sign GuestBook</a></li>
	  <li><a  href="contactus.php">Contact Us</a></li>
    </ul>
</div>

<div class="mobile-only menudiv">
    <ul style="padding-top:20px;display:inline;">
	  <li ><a  href="index.php">Home</a></li>
      <li ><a  href="uploadfile.php">Upload File</a></li>
      <li ><a  href="editdeletefile.php">Edit/Delete File</a></li>
     </ul>
	 <br>
	<ul style="margin-top:5px;">	
      <li ><a  href="listfile.php">List File</a></li>
	  <li ><a  href="listaudiofile.php">List Audio File</a></li>
	  <li ><a  href="links.php">Links</a></li>
	</ul>
	<br>
	<ul style="margin-top:5px;">	
     <li ><a  href="viewguestbook.php">View GuestBook</a></li>
	 <li><a  href="signguestbook.php">Sign GuestBook</a></li>
	</ul>
	<br>
	<ul style="margin-top:5px;">	
      <li><a  href="contactus.php">Contact Us</a></li>
    </ul>
	
</div>

<div id="formdiv">
			<h3 style="color:#330066;">Upload File</h3>
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
			<label  for="title">Title:</label>
			</td>
			<td>
			<input type="text"  id="title" name="title" required>
			</td>
			</tr>
			
			<tr>
			<td>
			<label  for="description">Description:</label>
			</td>
			<td>
			<input type="text"  id="description" name="description" required>
			</td>
			</tr>
			
			<tr><td>
			<label  for="category">Category:</label>
			</td><td>
			<input type="text"  id="category" name="category" required>
			</td>
			</tr>
			
			<tr><td>
			<button type="Submit" id="Save1" name="Save1" class="btn btn-primary" >Save</button>
			</td>
			<td>
			<button type="Cancel" id="Cancel1" name="Cancel1" class="btn btn-default">Cancel</button>
			</td>
			</tr>
			</form>
			</table>
	</div>		
			
		<div class="footer" >
		<li class="footer1">Copyright All Rights Reserved Sadagopan.org contact email: info@sadagopan.org</li> 
		</div>
</div>
</body>
</html>