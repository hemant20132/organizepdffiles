<?php
if (isset($_POST["Save2"]))
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
				
		if (isset($_REQUEST["audiofile"]["name"]))
		{	
		$audiofile=filter_var($_FILES["audiofile"]["name"],FILTER_SANITIZE_STRING);
		}
		else
		{
		$audiofile=filter_var($_REQUEST["audiofile"],FILTER_SANITIZE_STRING);
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
		echo $queryupdate
		
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
}
?>