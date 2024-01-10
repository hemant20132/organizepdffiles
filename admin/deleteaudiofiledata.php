<?php
ob_start();
session_start();
$audiofilename=$_REQUEST["audiofilename"];
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';

if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
$queryselect ="Select from audiofiledata where audiofilename='".$audiofilename."'";	  
	$selectresult=mysqli_query($conn,$queryselect);
	while($row1=mysqli_fetch_array($selectresult,MYSQLI_FETCH_ASSOC))
	{
		$audiofilename=$row1["audiofilename"];			
	}
	
	unlink($includepath."audiouploads/".$audiofilename);
	
$querydelete ="Delete from audiofiledata where audiofilename='".$audiofilename."'";	  
	if (mysqli_query($conn,$querydelete))
	{
		header("location:editdeleteaudiofile.php");
	}
?>