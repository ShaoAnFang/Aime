<?php

error_reporting(0);
//error_reporting(E_ALL ^ E_DEPRECATED);

//mysql_connect('localhost','root','root');
mysql_connect('mysql.hostinger.com.hk','u490296923_clark','720419','u490296923_aime');
//mysql_connect('aime.cd4jeronymvi.us-west-2.rds.amazonaws.com','MAPD17','1501user40');


//mysql_select_db("Aime");
//mysql_select_db("u490296923_aime");

mysql_set_charset("utf8");



//@mysql_select_db($Aime) or die("Error");
	
$query = "select * from product";

$result = mysql_query($query) or die(mysql_error());

$num = mysql_numrows($result);

mysql_close();

$rows = array();
while ($r = mysql_fetch_assoc($result))
{
	$rows[] = $r;
	
}
	echo json_encode($rows);

?>
