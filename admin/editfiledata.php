<?php ob_start();
session_start();if (isset($_SESSION["username"])){	?><!DOCTYPE HTML>
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
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
include $includepath.'/sadagopannew/module/categorylist.php';
		
if (isset($_REQUEST['ebookname']))
{
	$ebookname1=filter_var($_REQUEST['ebookname'],FILTER_SANITIZE_STRING);
	$_SESSION['ebookname']=$ebookname1;
	$queryselect="select * from filedata where ebookname='".$ebookname1."'";
	$result=mysqli_query($conn,$queryselect);
    
	while($row1=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
	{
		$filetype=$row1["filetype"];
		$imagefile=$row1["imagefile"];
		$ebookname=$row1["ebookname"];
		$series=$row1["series"];
		$azhvars=$row1["azhvars"];
		$acharyas=$row1["acharyas"];
		$divyadesam=$row1["devyadesam"];
		$deity=$row1["deity"];
		$sampradayatexts=$row1["sampradayatexts"];
		$hymnsanddramas=$row1["hymnsanddramas"];
		$misc=$row1["misc"];
		$authorofcommentry=$row1["authorofcommentry"];
		$language=$row1["language"];
	}
}


if (isset($_POST["Save2"]))
{
	if ($_REQUEST["uploadfiletype"]=="PDF")
	{	
	$target_dir = "sadagopannew/pdfuploads/";
	}
	if ($_REQUEST["uploadfiletype"]=="Audio")
	{	
	$target_dir = "sadagopannew/audiouploads/";
	}
	$uploadok=0;
	$uploadok1=0;
	
	
	if ($_FILES["imagefile"]["name"]<>"")
	{	
		$target_file1 = $target_dir.basename($_FILES["imagefile"]["name"]);
		$uploadFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
		if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file1)) 
		{
		  $message="The file ". basename( $_FILES["imagefile"]["name"]). " has been uploaded.";
		  $uploadok1=1;		
		} 
		else 
		{
		  $message="Sorry, there was an error uploading your file1.";
		}
	}
	
	if ($_FILES["uploadfile"]["name"]<>"")
	{	
		$target_file = $target_dir.basename($_FILES["uploadfile"]["name"]);
		$uploadFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) 
		{
		  $message="The file ". basename( $_FILES["uploadfile"]["name"]). " has been uploaded.";
		  $uploadok=1; 	
		} 
		else 
		{
		  $message="Sorry, there was an error uploading your file2.";
		}
	}
	
	if ($uploadok==0 and $uploadok1==0)
	{
		$uploadfiletype=filter_var($_REQUEST["uploadfiletype"],FILTER_SANITIZE_STRING);	
		$ebookname=$_SESSION["ebookname"];
		$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);
		$azhvars=filter_var($_REQUEST["azhvars"],FILTER_SANITIZE_STRING);
		$acharyas=filter_var($_REQUEST["acharyas"],FILTER_SANITIZE_STRING);
		$divyadesam=filter_var($_REQUEST["divyadesam"],FILTER_SANITIZE_STRING);
		$deity=filter_var($_REQUEST["deity"],FILTER_SANITIZE_STRING);
		$sampradayatexts=filter_Var($_REQUEST["sampradayatexts"],FILTER_SANITIZE_STRING);
		$hymnsanddramas=filter_var($_REQUEST["hymnsanddramas"],FILTER_SANITIZE_STRING);
		$misc=filter_var($_REQUEST["misc"],FILTER_SANITIZE_STRING);
		$authorofcommentry=filter_var($_REQUEST["authorofcommentry"],FILTER_SANITIZE_STRING);
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
				
		if (isset($_REQUEST["imagefile"]["name"]))
		{	
		$imagefile=filter_var($_FILES["imagefile"]["name"],FILTER_SANITIZE_STRING);
		}
		else
		{
		$imagefile=filter_var($_REQUEST["imagefile1"],FILTER_SANITIZE_STRING);
		}
		
		if (isset($_REQUEST["uploadfile"]["name"]))
		{	
		$filename=filter_var($_FILES["uploadfile"]["name"],FILTER_SANITIZE_STRING);
	    }
		else
		{
		$filename=filter_var($_REQUEST["uploadfile1"],FILTER_SANITIZE_STRING);
		}
		
		if ($series=="Nil")
		{	
		$series="";
		}
		else
		{
		$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);
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
		
		$queryupdate="update filedata 
		set filetype='".$uploadfiletype."',
		imagefile='".$imagefile."',	
		series='".$series."',
		azhvars='".$azhvars."',
		acharyas='".$acharyas."',
		divyadesam='".$divyadesam."',
		deity='".$deity."',
		sampradayatexts='".$sampradayatexts."',
		hymnsanddramas='".$hymnsanddramas."',
		authorofcommentry='".$authorofcommentry."', 
		language='".$language."' 
		where ebookname='".$_SESSION['ebookname']."'";
		if (mysqli_query($conn,$queryupdate))
		{
		$message="<span style='color:green;'>File Record Updated Successfully!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Error in Updating File Record!!!</span>";		
		}
	}
	
	if ($uploadok==1 and $uploadok1==1)
	{
		
		$uploadfiletype=filter_var($_REQUEST["uploadfiletype"],FILTER_SANITIZE_STRING);	
		$ebookname=$_SESSION["ebookname"];
		$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);
		$azhvars=filter_var($_REQUEST["azhvars"],FILTER_SANITIZE_STRING);
		$acharyas=filter_var($_REQUEST["acharyas"],FILTER_SANITIZE_STRING);
		$divyadesam=filter_var($_REQUEST["divyadesam"],FILTER_SANITIZE_STRING);
		$deity=filter_var($_REQUEST["deity"],FILTER_SANITIZE_STRING);
		$sampradayatexts=filter_Var($_REQUEST["sampradayatexts"],FILTER_SANITIZE_STRING);
		$hymnsanddramas=filter_var($_REQUEST["hymnsanddramas"],FILTER_SANITIZE_STRING);
		$misc=filter_var($_REQUEST["misc"],FILTER_SANITIZE_STRING);
		$authorofcommentry=filter_var($_REQUEST["authorofcommentry"],FILTER_SANITIZE_STRING);
		$language=filter_var($_REQUEST["language"],FILTER_SANITIZE_STRING);
		
		if (isset($_REQUEST["imagefile"]["name"]))
		{	
		$imagefile=filter_var($_FILES["imagefile"]["name"],FILTER_SANITIZE_STRING);
		}
		else
		{
		$imagefile=filter_var($_REQUEST["imagefile1"],FILTER_SANITIZE_STRING);
		}
		
		if (isset($_REQUEST["uploadfile"]["name"]))
		{	
		$filename=filter_var($_FILES["uploadfile"]["name"],FILTER_SANITIZE_STRING);
	    }
		else
		{
		$filename=filter_var($_REQUEST["uploadfile1"],FILTER_SANITIZE_STRING);
		}
		if ($series=="Nil")
		{	
		$series="";
		}
		else
		{
		$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);
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
		
		
		if (hymnsanddramas=="Nil")
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
		
		$queryupdate="update filedata 
		set filetype='".$uploadfiletype."',
		imagefile='".$imagefile."',	
		series='".$series."',
		azhvars='".$azhvars."',
		acharyas='".$acharyas."',
		divyadesam='".$divyadesam."',
		deity='".$deity."',
		sampradayatexts='".$sampradayatexts."',
		hymnsanddramas='".$hymnsanddramas."',
		authorofcommentry='".$authorofcommentry."', 
		language='".$language."' 
		where ebookname='".$_SESSION['ebookname']."'";
		
		echo $queryupdate;
		
		if (mysqli_query($conn,$queryupdate))
		{
		$message="<span style='color:green;'>File Record Updated Successfully!!!</span>";		
		}
		else
		{
		$message="<span style='color:red;'>Error in Updating File Record!!!</span>";		
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
										<h2>Edit Data</h2>
										<a href="editdeletefile.php" class="button special small" style="margin-top:-50px;">Back to List</a>
									</header>
								
									<div class="table-wrapper">
									<?php 
									if (isset($message))
									{	
									echo $message;
									}
									?>
									<form class="form-horizontal" enctype="multipart/form-data" id="form2" name="form2" method="post" action="editfiledata.php">
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
											if (isset($filetype)) 
											{
											echo "<option value=".$filetype." selected>".$filetype."</option>";
											}
											?>
											</select>
										</div>
									</td>
									</tr>
									
									<tr>
									
									<td>
									<label for="imagefile">Image File</label>
									</td>
									
										<td>
											<?php if (isset($imagefile))
											{
											?>
											<img src="/sadagopannew/pdfuploads/<?php echo $imagefile;?>" width="120px" height="170px" />
											<?php 
											}
											?>
										</td>
									</tr>
									
									<tr>			
										<td>
										<label for="imagefile1">Image File Name</label> 
										</td>
										<td>		
										<div class="6u 12u$(xsmall)">
											  <input type="text" class="" name="imagefile1" id="imagefile1" value="<?php echo $imagefile; ?>" >
										</div>
										</td>
									</tr>
										
									<tr>
										<td>
										<label for="imagefile">Upload New Image File</label>
										</td>
										<td>
										<div class="6u 12u$(xsmall)">
											  <input type="file" class="form-control" name="imagefile" id="imagefile" >
										</div>
										</td>
									</tr>
										
										<tr>
										<td>
										<label for="uploadfile1">Uploaded File Name</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
											<?php if (isset($ebookname))
											{
											?>
											  <input type="text" class="form-control" name="uploadfile1" id="uploadfile1" value="<?php echo $ebookname; ?>" >
											<?php 
											}
											?>
										</div>	
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="uploadfile">Upload New file</label>
										</td>
										<td>
										<div class="6u 12u$(xsmall)">
											  <input type="file" class="form-control" name="uploadfile" id="uploadfile" >
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="series">Series</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
										<div class="select-wrapper">
									<select name="series" id="series">
									<?php
									if (empty($series))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($serieslist);$i++)
									{	
									if (!empty($series) and $serieslist[$i]==$series)
									{	
									echo "<option value='".$serieslist[$i]."' selected>".$serieslist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$serieslist[$i]."'>".$serieslist[$i]."</option>"; 		
									}
									}		
									?>
									</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">Azhvars</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
										<div class="select-wrapper">
									<select name="azhvars" id="azhvars">
									<?php
									if (empty($azhvars))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($azhvarslist);$i++)
									{	
									if (!empty($azhvars) and $azhvarslist[$i]==$azhvars)
									{	
									echo "<option value='".$azhvarslist[$i]."' selected>".$azhvarslist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$azhvarslist[$i]."'>".$azhvarslist[$i]."</option>"; 		
									}
									}		
									?>

									</select>
										</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">Acharyas</label>
										</td>
										<td>	
									<div class="6u 12u$(xsmall)">
									<div class="select-wrapper">
									<select name="acharyas" id="acharyas">
									<?php
									if (empty($acharyas))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($acharyaslist);$i++)
									{	
									if (!empty($acharyas) and $acharyaslist[$i]==$acharyas)
									{	
									echo "<option value='".$acharyaslist[$i]."' selected>".$acharyaslist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$acharyaslist[$i]."'>".$acharyaslist[$i]."</option>"; 		
									}
									}		
									?>
									</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">Divyadesam</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
											<div class="select-wrapper">
									<select name="divyadesam" id="divyadesam">
									<?php
									if (empty($divyadesam))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($divyadesamlist);$i++)
									{	
									if (!empty($divyadesam) and $divyadesamlist[$i]==$divyadesam)
									{	
									echo "<option value='".$divyadesamlist[$i]."' selected>".$divyadesamlist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$divyadesamlist[$i]."'>".$divyadesamlist[$i]."</option>"; 		
									}
									}		
									?>
									</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">Deity</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
										<div class="select-wrapper">
									<select name="deity" id="deity">
									<?php
									if (empty($deity))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($deitylist);$i++)
									{	
									if (!empty($deity) and $deitylist[$i]==$deity)
									{	
									echo "<option value='".$deitylist[$i]."' selected>".$deitylist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$deitylist[$i]."'>".$deitylist[$i]."</option>"; 		
									}
									}		
									?>
									</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">sampradayatexts</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
									<div class="select-wrapper">
									<select name="sampradayatexts" id="sampradayatexts">
									<?php
									if (empty($sampradayatexts))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($sampradayatextslist);$i++)
									{	
									if (!empty($sampradayatexts) and $sampradayatextslist[$i]==$sampradayatexts)
									{	
									echo "<option value='".$sampradayatextslist[$i]."' selected>".$sampradayatextslist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$sampradayatextslist[$i]."'>".$sampradayatextslist[$i]."</option>"; 		
									}
									}		
									?>
									</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">hymnsanddramas</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
										<div class="select-wrapper">
									<select name="hymnsanddramas" id="hymnsanddramas">
									<?php
									if ((empty($hymnsanddramas)))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($hymnsanddramaslist);$i++)
									{	
									if (!empty($hymnsanddramas) and $hymnsanddramaslist[$i]==$hymnsanddramas)
									{	
									echo "<option value='".$hymnsanddramaslist[$i]."' selected>".$hymnsanddramaslist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$hymnsanddramaslist[$i]."'>".$hymnsanddramaslist[$i]."</option>"; 		
									}
									}		
									?>
																	
											</select>
											</div>
										</div>
										</td>
										</tr>
											
										<tr>
										<td>
											<label for="demo-priority-normal">Misc</label>
										</td>
										<td>	
									<div class="6u 12u$(xsmall)">
									<div class="select-wrapper">
									<select name="misc" id="misc">
									<?php
									if ((!empty($misc)) and $misc=="Yes")
									{	
									?>
									<option value='Yes' selected>Yes</option>
									<option value='Nil' >Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Yes' >Yes</option>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									?>
									</select>
									</div>
									</div>
									</td>
									</tr>
											
										<tr>
										<td>
											<label for="demo-priority-normal">Author of Commentry</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
										<div class="select-wrapper">
									<select name="authorofcommentry" id="authorofcommentry">
									<?php
									if ((empty($authorofcommentry)))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($authorlist);$i++)
									{	
									if (!empty($authorofcommentry) and $authorlist[$i]==$authorofcommentry)
									{	
									echo "<option value='".$authorlist[$i]."' selected>".$authorlist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$authorlist[$i]."'>".$authorlist[$i]."</option>"; 		
									}
									}		
									?>
									
									</select>
											</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td>
											<label for="demo-priority-normal">Language</label>
										</td>
										<td>	
										<div class="6u 12u$(xsmall)">
									<div class="select-wrapper">
									<select name="language" id="language">
									<?php
									if (empty($language))
									{	
									?>
									<option value='Nil' selected>Nil</option>
									<?php
									}
									else
									{
									?>
									<option value='Nil'>Nil</option>
									<?php
									}
									for ($i=0;$i<=sizeof($languagelist);$i++)
									{	
									if (!empty($language) and (trim($languagelist[$i])==trim($language)))
									{	
									echo "<option value='".$languagelist[$i]."' selected>".$languagelist[$i]."</option>"; 		
									}
									else
									{	
									echo "<option value='".$languagelist[$i]."'>".$languagelist[$i]."</option>"; 		
									}
									}		
									?>
									</select>
										</div>
										</div>
										</td>
										</tr>
										
										<tr>
										<td colspan="2">
												<div class="12u$">
													<ul class="actions">
														<li><input id="Save2"  name="Save2" type="submit" value="Edit" class="button" /></li>
														<li><input id="Cancel2" name="Cancel2" type="reset" value="Cancel" class="button special"/></li>
													</ul>
												</div>
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