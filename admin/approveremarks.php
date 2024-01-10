<?php
ob_start();
$srno=$_REQUEST["srno"];
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';

if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	$queryapprove ="update guestbook set approved='Yes' where SrNo=".$srno;	  
	
	if (mysqli_query($conn,$queryapprove))
	{
		header("location:viewguestremarks.php");
	}
?>