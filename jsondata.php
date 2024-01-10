<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
$queryselect ="Select ebookname as title,imagefile as src from filedata where series='Godha' order by srno asc";	  
	echo $queryselect;
	$selectresult=mysqli_query($conn,$queryselect);
	$jsonimage=array();
	while($row1=mysqli_fetch_array($selectresult,MYSQLI_ASSOC))
	{
	$jsonimage[]=$row1;
	}
	$jsonimage1=json_encode($jsonimage);
	print_r($jsonimage1);
	
?>