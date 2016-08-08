<?php
	
	echo "Database connection test";
	$dbconn = pg_connect("host=ec2-54-235-254-199.compute-1.amazonaws.com port=5432 dbname=dbih69tnc5onrf user=lugudsfmtmquvy password=wUsYz-VDPWYn5BEPoIhCX_IO2l") or die('connection failed');
	$result = pg_query($dbconn, "select * from information_schema.tables where table_schema = 'information_schema'");
	var_dump(pg_fetch_all($result));
	
?>