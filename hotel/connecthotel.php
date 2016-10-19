<?php
//open mysql for connection
$db_connect=mysql_connect('localhost','root','');
if (!$db_connect)
	{
	 die('Not connected :' .mysql_error());
	}

	//selecting the database
	
	$db_selected=mysql_select_db('hotel',$db_connect);
	if(!$db_selected)
	{
		die("can't connect : " .mysql_error());
	}
	
?>