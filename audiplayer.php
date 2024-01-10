<html>
<head>

</head>
<body>
	<audio controls>
	
	<?php
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/db.php';
	
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	$queryselect="select * from audiofiledata";	
	$selectresult=mysqli_query($conn,$queryselect);
	
	while($row=mysqli_fetch_array($selectresult,MYSQLI_ASSOC))
	{	
		$audiofilename="sadagopan.org/sadagopannew/audiouploads/".$row["audiofilename"];	
	?>
	
	<source src="<?php echo $audiofilename; ?>" type="audio/mpeg">
	<?php
	}
	?>
	</audio>
	
</body>
</html>
											