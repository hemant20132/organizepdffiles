<?php 
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
session_start();
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
	
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
												<option value="Nil">Nil</option>
												<option value="SS">Sundarasimham - SS</option>
												<option value="AV">Ahobilavalli - AV</option>
												<option value="SH">SrIHayagrIvan - SH</option>
												<option value="GD">Godha - GD</option>
												<option value="AM">Alamelumanga - AM</option>
										<?php
										if (isset($series))
										{	
										echo "<option value=".$series." selected>".$series."</option>";
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
												<option value="Nil">Nil</option>
												<option value="NA">NammAzhvar - NA</option>
												<option value="TM">Thirmangai Azhvar - TM</option>
												<option value="SA">SrI Andal - SA</option>
												<option value="PA">Periyazhvar - PA</option>
												<option value="MA">MudhalAzhvArkal - MA</option>
												<option value="TPA">Thondaradipodi Azhvar - TPA</option>
												<option value="TZA">Thirumazhisai Azhvar - TZA</option>
												<option value="TNPA">Thiruppanazhvar - TPNA</option>
												<option value="MKA">Madhurakavi Azhvar - MKA</option>
												<option value="KA">Kulasekhara Azhvar - KA</option>
											<?php 
											if (isset($azhvars))
											{			
											echo "<option value=".$azhvars." selected>".$azhvars."</option>";
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
												<option value="Nil">Nil</option>
												<option value="R">Ramanuja - R</option>
												<option value="KU">Kuresar - KU</option>
												<option value="SD">Svami Desikan - SD</option>
												<option value="AVK">Venkatadvari Kavi - AVK</option>
												<option value="O">Others - O</option>
											<?php
											if (isset($acharyas))
											{
											echo "<option value=".$acharyas." selected>".$acharyas."</option>"; 
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
												<option value="Nil">Nil</option>
												<option value="Ahobilam">Ahobilam</option>
												<option value="Ahobilam">Ahobilam</option>
												<option value="Thiruvellakulam">Thiruvellakulam</option> 
												<option value="Thiruayindai">Thiruayindai</option>
												<option value="Thiruvellarai">Thiruvellarai</option> 
												<option value="Srirangam">Srirangam</option>
												<option value="Vaikunta vinnagar">Vaikunta vinnagar</option>
												<option value="Thevanar thogai">Thevanar thogai</option>
												<option value="Semponsei koil">Semponsei koil</option>
												<option value="Arimeya Vinnagar">Arimeya Vinnagar</option>
												<option value="Kanchipuram">Kanchipuram</option>
												<option value="Therriyambalam">Therriyambalam</option>
												<option value="Kanchipuram">Kanchipuram</option>
												<option value="Thirumala">Thirumala</option>
												<option value="Malirumcholai">Malirumcholai</option>
												<option value="Thiruppullani">Thiruppullani</option>
												<option value="Kavalampadi">Kavalampadi</option>
												<option value="Koshtiyur">Koshtiyur</option>
												<option value="Kadalmallai">Kadalmallai</option>
												<option value="Parthanpalli">Parthanpalli</option>
												<option value="VanPurudothamam">VanPurudothamam</option>
												<option value="Nirmalai">Nirmalai</option>
												<option value="Pullambhuthankudi">Pullambhuthankudi</option>
												<option value="Thirukkudanthai">Thirukkudanthai</option>
												<option value="Manikudam">Manikudam</option>
												<option value="Manimadakudam">Manimadakudam</option>
												<option value="Kudantai">Kudantai</option>
												<option value="Kanchipuram">Kanchipuram</option>
												<option value="Malirumcholai">Malirumcholai</option>
												<option value="Naimisaranyam">Naimisaranyam</option>
												<option value="Thirukkudal">Thirukkudal</option>
												<option value="Thiruvellur">Thiruvellur</option>
												<option value="Terazhundur">Terazhundur</option>
												<option value="Anantapuram">Anantapuram</option>
												<option value="Vallavazh">Vallavazh</option>
												<option value="Kadithanam">Kadithanam</option>
												<option value="Muzhikalam">Muzhikalam</option>
												<option value="Vaataaru">Vaataaru</option>
												<option value="puliyur">puliyur</option>
												<option value="vanvandur">vanvandur</option>
												<option value="varanvila">varanvila</option>
												<option value="navai">navai</option>
												<option value="katkarai">katkarai</option>
												<?php 
												if (isset($divyadesam))
												{
												echo "<option value=".$divyadesam." selected>".$divyadesam."</option>";
													
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
												<option value="Nil">Nil</option>
												<option value="Krishna">Krishna</option>
												<option value="LakshmInrsimha">LakshmInrsimha</option>
												<option value="Sri Ramanuja">Sri Ramanuja</option>
												<option value="Rama">Rama</option>
												<option value="Vishnu">Vishnu</option>
												<option value="Sri Ramanuja">Sri Ramanuja</option>
												<option value="Krishna & Rama">Krishna & Rama</option>
												<option value="Hanuman">Hanuman</option>
												<option value="Lakshmi">Lakshmi</option> 
												<option value="Acharyas">Acharyas</option>
												<option value="Srinivasa">Srinivasa</option>
												<option value="Swami Desikan">Swami Desikan</option>
												<option value="Srinivasa">Srinivasa</option>
												<option value="Hayagriva">Hayagriva</option>
												<option value="Surya">Surya</option>
												<option value="Nammazhvar">Nammazhvar</option>
												<option value="Sudarsana">Sudarsana</option>
												<option value="HH 1st AS">HH 1st AS</option>
												<option value="Garudav">Garudav</option>
												<option value="Ramanuja">Ramanuja</option>
												<option value="Azhagiya Singars">Azhagiya Singars</option>
												<option value="Navagraha">Navagraha</option>
												<?php 
												if (isset($deity))
												{
												echo "<option value=".$deity." selected>".$deity."</option>";
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
												<option value="Nil">Nil</option>
												<option value="P">Philosophy - P</option>
												<option value="AG">Aagama - AG</option>
												<option value="AS">Anushtana - AS</option>
												<option value="RS">Rahasya - RS</option>
												<option value="GT">Grantha - GT</option>
												<option value="V">Vedas - V</option>
												<option value="UP">Upanishad - UP</option>
												<option value="T">Tantra - T</option>
												<option value="M">Mantra - M</option>
												<?php
												if (isset($sampradayatexts))
												{
												echo "<option value=".$sampradayatexts.">".$sampradayatexts."</option>";
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
												<option value="Nil">Nil</option>
												<option value="ST">Stuti - ST</option>
												<option value="KV">Kavya - KV</option>
												<option value="NT">Nataka - NT</option>
												<option value="DP">Divya Prabandha - DP</option>
												<option value="DSP">Desika Prabandam - DSP</option>
												<option value="AP">Ashta Prabandam - AP</option>
												<option value="IH">Itihasa - IH</option>
												<option value="PN">Purana - PN</option>
											<?php
											if (isset($hymnsanddramas))
											{
											echo "<option value=".$hymnsanddramas." selected>".$hymnsanddramas."</option>";		
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
												<option value="Nil">Nil</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
												<?php 
												if (isset($misc))
												{
												echo "<option value=".$misc." selected>".$misc."</option>";
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
												<option value="Nil">Nil</option>
												<option value="V.Sadagopan">V.Sadagopan</option>
												<option value="CG Balaji">CG Balaji</option>
												<option value="N.Krishnamachari">N.Krishnamachari</option>
												<option value="Saroja Ramanujam">Saroja Ramanujam</option>
												<option value="L.Sridhar">L. Sridhar</option>
												<option value="Pudukkottai ASR">Pudukkottai ASR</option>
												<option value="V.Madhavakannan">V.Madhavakannan</option>
												<option value="K.Sadgopan Iyengar">K.Sadgopan Iyengar</option>
												<option value="V.Sadagopan & K.Sridharan">V.Sadagopan & K.Sridharan</option>
												<option value="Anbil Sowmyanarayana">Anbil Sowmyanarayana</option>
												<option value="M.G.Vasudevan">M.G.Vasudevan</option>
												<option value="Mukund Srinivasan">Mukund Srinivasan</option>
												<option value="Nelvoy Swamy">Nelvoy Swamy</option>
												<option value="Srikainkarya Swamy">Srikainkarya Swamy</option>
												<option value="Ramakrishna Dikshitulu">Ramakrishna Dikshitulu</option>
												<option value="HH 44th pattam AS">HH 44th pattam AS</option>
												<option value="V.Sadagopan & V.Varadarajan">V.Sadagopan & V.Varadarajan</option>
												<option value="V.Sadagopan & Smt K.Kalyani">V.Sadagopan & Smt K.Kalyani</option>
												<option value="Perukaranai Swami">Perukaranai Swami</option>
												<option value="Prof.V.Kannan">Prof.V.Kannan</option>
												<option value="Srikrishna Tatachar">Srikrishna Tatachar</option>
												<option value="Dileepan Parthasarathy">Dileepan Parthasarathy</option>
												<option value="V.Sadagopan & Smt Geetha Anand">V.Sadagopan & Smt Geetha Anand</option>
												<option value="Neduntheru Kannan">Neduntheru Kannan</option>
												<option value="Srihari Parthasarathy">Srihari Parthasarathy</option>
												<option value="Dr.K.Ranganathan">Dr.K.Ranganathan</option>
												<?php 
												if (isset($authorofcommentry))
												{
												echo "<option value=".$authorofcommentry." selected>".$authorofcommentry."</option>";
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