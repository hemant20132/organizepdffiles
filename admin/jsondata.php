<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
$queryselect ="Select * from filedata order by ebookname asc";	  
	$selectresult=mysqli_query($conn,$queryselect);
	$jsonimage=array();
	while($row1=mysqli_fetch_array($selectresult,MYSQLI_FETCH_ASSOC))
	{
	array_push($jsonimage,$row1["imagefile"]);	
	}
	$jsonimage1=json_encode($jsonimage);
	print_r($jsonimage1);
	
?>