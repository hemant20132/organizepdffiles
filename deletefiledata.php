<?php
$srno=$_REQUEST["srno"];
$includepath=$_SERVER["DOCUMENT_ROOT"];
$conn=mysqli_connect("sql104.epizy.com","epiz_20558076","sg6muwsE","epiz_20558076_database","3306","");
if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
$queryselect ="Select from filedata where SrNo=".$srno;	  
	$selectresult=mysqli_query($conn,$queryselect);
	while($row1=mysqli_fetch_array($selectresult,MYSQLI_FETCH_ASSOC))
	{
		$imagefile=$row1["imagefile"];			
		$filename=$row1["filename"];			
	}
	
	unlink($includepath."pdfuploads/".$imagefile);
	unlink($includepath."pdfuploads/".$filename);
	
$querydelete ="Delete from filedata where SrNo=".$srno;	  
	if (mysqli_query($conn,$querydelete))
	{
		header("location:editdeletefile.php");
	}
?>