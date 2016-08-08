<?php
	
	echo "Database connection test";
	$dbconn = pg_connect("host=ec2-54-235-254-199.compute-1.amazonaws.com port=5432 dbname=dbih69tnc5onrf user=lugudsfmtmquvy password=wUsYz-VDPWYn5BEPoIhCX_IO2l") or die('connection failed');
	$result = pg_query($dbconn, "CREATE TABLE NEWTABLE(
								   ID INT PRIMARY KEY     NOT NULL,
								   NAME           TEXT    NOT NULL,
								   SURNAME        TEXT    NOT NULL,
									);");
	var_dump(pg_fetch_all($result));
	$result2 = pg_query($dbconn, "INSERT INTO NEWTABLE (ID, NAME, SURNAME) VALUES ('1, 'Krzys', 'Magd')");
	var_dump(pg_fetch_all($result2));
	$result3 = pg_query($dbconn, "SELECT * FROM NEWTABLE");
	var_dump(pg_fetch_all($result3));
	
?>