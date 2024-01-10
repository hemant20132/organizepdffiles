<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
include $includepath.'/sadagopannew/module/categorylist.php';

$series=$_REQUEST['series'];
$queryselect="select * from filedata where series='".$series."'";
$result=mysqli_query($conn,$queryselect);
$total1=mysqli_num_rows($result);
$total1=$total1+1;
    
for ($i=0;$i<sizeof($serieslist);$i++)]
{		
	if ($serieslist[$i]==$series)
	{
		$queryselect1="select * from categoryshortform where categorytext='".$serieslist[$i]."'";
		$result1=mysqli_query($conn,$queryselect1);
		while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
			$categoryshort=$row["categoryshortform"];
		}
	}	
}
echo $categoryshort.$total1;

?>