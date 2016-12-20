<?php

error_reporting(E_ALL ^ E_DEPRECATED);

//mysql_connect('localhost','root','root');
//mysql_connect('sql212.0fees.us','0fe_19330894','jq01g4dn');
mysql_connect('aime.cd4jeronymvi.us-west-2.rds.amazonaws.com','MAPD17','1501user40');


mysql_select_db("Aime");
//mysql_select_db("0fe_19330894_Aime");

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
	header("Content-type: application/json; charset=utf-8");
	echo json_encode($rows);

?>
