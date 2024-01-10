	<?php
	require('pdftotext.php');
		$a = new PDF2Text();
			
		$query1="select ebookname from filedata";
		$resultquery=mysqli_query($conn,$query1);
		$ebooknamearray=[];
		while ($row=mysqli_fetch_array($resultquery,MYSQLI_ASSOC))
		{	
			$ebookname=$row["ebookname"];
			$a->setFilename("http://newsoftwares.rf.gd/sadagopan/pdfuploads/".$ebookname.".pdf"); 
			$a->decodePDF();
			if ($a->output())
			{	
			$string1=$a->output();
			$findstring=$search1;
			$pos = strpos($string1, $findstring);
				if ($pos === false) 
				{
				echo "not found!!!";
				}
				else 
				{
				array_push($ebooknamearray,$ebookname);
				}
			}
		}
		
		$queryselect="select * from filedata where ";
		for ($i=0;$i<=sizeof($ebooknamearray);$i++)
		{	
			if ( $i==sizeof($ebooknamearray) )
			{	
			$queryselect=$queryselect." ebookname='".$ebooknamearray[$i] ;
			}
			else
			{
			$queryselect=$queryselect." ebookname='".$ebooknamearray[$i]."' OR";
			}
		}
	?>