<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/sadagopannew/db/db.php';
include $includepath.'/sadagopannew/module/categorylist.php';
$categoryno=$_REQUEST["categoryname"];
	if ($categoryno=="1")
	{	
		for ($i=0;$i<sizeof($serieslist);$i++)
		{
			echo $serieslist[$i]."%";	
		}
	}
	if ($categoryno=="2")
	{	
		for ($i=0;$i<sizeof($azhvarslist);$i++)
		{
			echo $azhvarslist[$i]."%";	
		}
	}
	if ($categoryno=="3")
	{	
		for ($i=0;$i<sizeof($acharyaslist);$i++)
		{
			echo $acharyaslist[$i]."%";	
		}
	}
	if ($categoryno=="4")
	{	
		for ($i=0;$i<sizeof($divyadesamlist);$i++)
		{
			echo $divyadesamlist[$i]."%";	
		}
	}
	if ($categoryno=="5")
	{	
		for ($i=0;$i<sizeof($deitylist);$i++)
		{
			echo $deitylist[$i]."%";	
		}
	}

	if ($categoryno=="6")
	{	
		for ($i=0;$i<sizeof($sampradayatextslist);$i++)
		{
			echo $sampradayatextslist[$i]."%";	
		}
	}
	if ($categoryno=="7")
	{	
		for ($i=0;$i<sizeof($hymnsanddramaslist);$i++)
		{
			echo $hymnsanddramaslist[$i]."%";	
		}
	}
	if ($categoryno=="8")
	{	
		for ($i=0;$i<sizeof($authorlist);$i++)
		{
			echo $authorlist[$i]."%";	
		}
	}
	if ($categoryno=="9")
	{	
		for ($i=0;$i<sizeof($languagelist);$i++)
		{
			echo $languagelist[$i]."%";	
		}
	}
	if ($categoryno=="10")
	{	
		for ($i=0;$i<sizeof($misclist);$i++)
		{
			echo $misclist[$i]."%";	
		}
	}

?>