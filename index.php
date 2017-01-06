<?php

error_reporting(0);
//error_reporting(E_ALL ^ E_DEPRECATED);



//mysql_connect('localhost','root','root');
//mysql_connect('db4free.net','aime','720419'); //db4 free
mysql_connect('sql6.freemysqlhosting.net','sql6152521','9snQHwyntA') or die('Could not connect to database');//free db hosting
//mysql_connect('aime.cd4jeronymvi.us-west-2.rds.amazonaws.com','MAPD17','1501user40'); AWS

//mysql_select_db("Aime");
//mysql_select_db("aimeclark");
mysql_select_db("sql6152521") or die('Could not select database');


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
