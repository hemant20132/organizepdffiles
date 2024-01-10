<?php 
	$includepath=$_SERVER["DOCUMENT_ROOT"];
	include $includepath.'/sadagopannew/db/config1.php';
	$db1=new JConfig;
	$conn=mysqli_connect($db1->host,$db1->user,$db1->password,$db1->db,"3306","");
?>	