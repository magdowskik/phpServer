<?php
	
	echo "Database connection test";
	$dbconn = pg_connect("host=ec2-54-235-254-199.compute-1.amazonaws.com port=5432 dbname=dbih69tnc5onrf user=lugudsfmtmquvy password=wUsYz-VDPWYn5BEPoIhCX_IO2l") or die('connection failed');
	$result2 = pg_query($dbconn, "INSERT INTO newTable(ID,NAME,SURNAME) VALUES(3,'assd','qswe');");
	var_dump(pg_fetch_all($result2));
	$result3 = pg_query($dbconn, "select * from newTable;");
	var_dump(pg_fetch_all($result3));
	
?>