<?php 
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	
	error_reporting('E_All');
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  
	$query="update filtercategory set categoryname=trim(categoryname)";
	echo $query;
	$result=mysqli_query($conn,$query);
	echo mysqli_num_rows($result);	
?>