<?php
$includepath=$_SERVER["DOCUMENT_ROOT"];
include $includepath.'/db/db.php';
$query="CREATE TABLE IF NOT EXISTS userstable (
  username varchar(100) DEFAULT NULL,
  userpassword varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
echo $query;
if (mysqli_query($conn,$query))
{
	echo "created tabel usertable";
}	
$queryinsert="INSERT INTO userstable (username, userpassword) VALUES ('admin', 'admin1234')";
if (mysqli_query($conn,$queryinsert))
{
	echo "inserted data in usertable";
}	

?>