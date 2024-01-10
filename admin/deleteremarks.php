<?php
ob_start();
session_start();
$srno=$_REQUEST["srno"];
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';

if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	$querydelete ="Delete from guestbook where SrNo=".$srno;	  
	
	if (mysqli_query($conn,$querydelete))
	{
		header("location:viewguestremarks.php");
	}
?>