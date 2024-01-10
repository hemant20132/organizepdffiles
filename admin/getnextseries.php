<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
include $includepath.'/sadagopannew/module/categorylist.php';

$series=filter_var($_REQUEST["series"],FILTER_SANITIZE_STRING);

	$queryselect1="select categoryshortform from filtercategory where categoryname='series' and categorytext='".$series."'";
		$result1=mysqli_query($conn,$queryselect1);
		while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
			$categoryshort=$row["categoryshortform"];
		}


$queryselect="select * from filedata where series='".$series."'";
$result=mysqli_query($conn,$queryselect);
$total1=mysqli_num_rows($result);
$total1=$total1+1;
$codeoutput=filter_var($categoryshort.$total1,FILTER_SANITIZE_STRING);
echo trim($codeoutput);

?>