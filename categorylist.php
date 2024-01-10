<?php 
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	
	error_reporting('E_All');
	if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  
	$queryseries="select categorytext from filtercategory where categoryname='series' order by categorytext asc";
	$resultseries=mysqli_query($conn,$queryseries);
	$serieslist=array();
	while ($rowseries=mysqli_fetch_array($resultseries,MYSQLI_ASSOC))
	{
		$serieslist[]=$rowseries["categorytext"];
	}
	print_r($serieslist);
	$queryazhvars="select categorytext from filtercategory where categoryname='azhvars' order by categorytext asc";
	$resultazhvars=mysqli_query($conn,$queryazhvars);
	$azhvarslist=array();
	
	while ($rowazhvars=mysqli_fetch_array($resultazhvars,MYSQLI_ASSOC))
	{
		$azhvarslist[]=$rowazhvars["categorytext"];
	}
	
	$queryacharyas="select categorytext from filtercategory where categoryname='acharyas' order by categorytext asc";
	$resultacharyas=mysqli_query($conn,$queryacharyas);
	$acharyaslist=array();
	while ($rowacharyas=mysqli_fetch_array($resultacharyas,MYSQLI_ASSOC))
	{
		$acharyaslist[]=$rowacharyas["categorytext"];
	}
	
	
	$querydivyadesam="select categorytext from filtercategory where categoryname='divyadesam' order by categorytext asc";
	$resultdivyadesam=mysqli_query($conn,$querydivyadesam);
	$divyadesamlist=array();
	while ($rowdivyadesam=mysqli_fetch_array($resultdivyadesam,MYSQLI_ASSOC))
	{
		$divyadesamlist[]=$rowdivyadesam["categorytext"];
	}
	
	
	$querydeity="select categorytext from filtercategory where categoryname='deity' order by categorytext asc";
	$resultdeity=mysqli_query($conn,$querydeity);
	$deitylist=array();
	while ($rowdeity=mysqli_fetch_array($resultdeity,MYSQLI_ASSOC))
	{
		$deitylist[]=$rowdeity["categorytext"];
	}

		
	$querysampradayatexts="select categorytext from filtercategory where categoryname='sampradayatexts' order by categorytext asc";
	$resultsampradayatexts=mysqli_query($conn,$querysampradayatexts);
	$sampradayatextslist=array();
	while ($rowsampradayatexts=mysqli_fetch_array($resultsampradayatexts,MYSQLI_ASSOC))
	{
		$sampradayatextslist[]=$rowsampradayatexts["categorytext"];
	}
	
		
	$queryhymnsanddramas="select categorytext from filtercategory where categoryname='hymnsanddramas'  order by categorytext asc";
	$resulthymnsanddramas=mysqli_query($conn,$queryhymnsanddramas);
	$hymnsanddramaslist=array();
	while ($rowhymnsanddramas=mysqli_fetch_array($resulthymnsanddramas,MYSQLI_ASSOC))
	{
		$hymnsanddramaslist[]=$rowhymnsanddramas["categorytext"];
	}
	
	$queryauthor="select categorytext from filtercategory where categoryname = 'authorofcommentry' order by categorytext asc";
	$resultauthor=mysqli_query($conn,$queryauthor);
	$authorlist=array();
	while ($rowauthor=mysqli_fetch_array($resultauthor,MYSQLI_ASSOC))
	{
		$authorlist[]=$rowauthor["categorytext"];
	}
	
	$querylanguage="select categorytext from filtercategory where categoryname = 'language' order by categorytext asc";
	$resultlanguage=mysqli_query($conn,$querylanguage);
	$languagelist=array();
	while ($rowlanguage=mysqli_fetch_array($resultlanguage,MYSQLI_ASSOC))
	{
		$languagelist[]=$rowlanguage["categorytext"];
	}
	
	$misclist=array();
	$misclist[]="Yes";	
	
?>