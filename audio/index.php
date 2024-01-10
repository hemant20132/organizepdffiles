<?php

echo '<h1 style="text-align: center; color:blue">Welcome to Thiruppavai.org Audio content</h1>';

function listFolderFiles($dir){
    $ffs = scandir($dir);
	echo $dir; 
    echo '<ol>';
    foreach($ffs as $ff){
		    if($ff != '.' && $ff != '..'){
			echo '<li>';
			if (preg_match("/\bAshtaPrabandham\b/i", $dir, $match)) :
				echo '<a href="AshtaPrabandham/'.$ff.'">'.$ff."</a>\n";
			endif;
			if (preg_match("/\bDesikaPrabandham\b/i", $dir, $match)) :
				echo '<a href="DesikaPrabandham/'.$ff.'">'.$ff."</a>\n";
			endif;
			if (preg_match("/\bGodhanjali\b/i", $dir, $match)) :
				echo '<a href="Godhanjali/'.$ff.'">'.$ff."</a>\n";
			endif;
			if (preg_match("/\bGodhaStuthi\b/i", $dir, $match)) :
				echo '<a href="GodhaStuthi/'.$ff.'">'.$ff."</a>\n";
			endif;
			if (preg_match("/\bkruthis\b/i", $dir, $match)) :
				echo '<a href="kruthis/'.$ff.'">'.$ff."</a>\n";
			endif;
			if (preg_match("/\bmelakartha\b/i", $dir, $match)) :
				echo '<a href="melakartha/'.$ff.'">'.$ff."</a>\n";
			endif;
			if (preg_match("/\bOther_kruthis_PV\b/i", $dir, $match)) :
				echo '<a href="Other_kruthis_PV/'.$ff.'">'.$ff."</a>\n";
			endif;
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ol>';
}

listFolderFiles('.');

?>





