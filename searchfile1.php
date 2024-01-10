<?php

$filecontent="devoted volunteers Swami Desikan";
$filecontent1=explode(" ", $filecontent);
$filename=array("index.php","aboutus.php");
$pagearray=array();

for ($j=0;$j<=sizeof($filename);$j++)
{	
	$content = file_get_contents($filename[$j]);
    
	for ($i=0;$i<sizeof($filecontent1);$i++)
	{	
		if (strpos($content,$filecontent1[$i])!==false) 
		{
			if (!in_array($filename[$j],$pagearray))
			{	
			array_push($pagearray,$filename[$j]);
			}
		}
	}
	
}
 
 for ($i=0;$i<sizeof($pagearray);$i++)
 {
	 echo "Above search string found in  <A href='http://www.sadagopan.org/sadagopannew/".$pagearray[$i]."'  >http://www.sadagopan.org/sadagopannew/".$pagearray[$i]."</a><br/>";
 }
?>