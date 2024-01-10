<?php
ob_start();
session_start();
$ebookname=$_REQUEST["ebookname"];
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';

if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
$queryselect ="Select from filedata where ebookname='".$ebookname."'";	  
	$selectresult=mysqli_query($conn,$queryselect);
	while($row1=mysqli_fetch_array($selectresult,MYSQLI_FETCH_ASSOC))
	{
		$imagefile=$row1["imagefile"];			
		$filename=$row1["filename"];			
	}
	
	unlink($includepath."pdfuploads/".$imagefile);
	unlink($includepath."pdfuploads/".$filename);
	
$querydelete ="Delete from filedata where ebookname=".$ebookname;	  
	if (mysqli_query($conn,$querydelete))
	{
		header("location:editdeletefile.php");
	}
?>