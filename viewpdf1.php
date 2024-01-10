<?php
$ebookname=$_REQUEST["ebookname"];
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
$queryselect ="select ebookname from filedata where ebookname='".$ebookname."'";
$selectresult=mysqli_query($conn,$queryselect);
while($row=mysqli_fetch_array($selectresult,MYSQLI_ASSOC))
{
	  $bookname=$row["ebookname"].".pdf";	
}
header("Content-type: application/pdf");
header("Content-Disposition: inline;filename=".$bookname);
header('Accept-Ranges: bytes');
 
@readfile($includepath.'/sadagopannew/pdfuploads/'.$bookname);

?>