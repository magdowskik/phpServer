<?php
	define("USERNAME", "krzysztof.magdowski@ttms.akademia.lipiec.2016"); 
	define("PASSWORD", "8uhb*UHB"); 
	define("SECURITY_TOKEN", "AqvMzXHKIPMbpmeJaX0bkqmGt"); 
	include('soapclient/SforceEnterpriseClient.php'); 
	require_once("soapclient/SforceHeaderOptions.php"); 
	
	$mySforceConnection = new SforceEnterpriseClient(); 
	$mySforceConnection->createConnection("wsdl.wsdl.xml"); 
	$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);
	
	$query = "SELECT Id, FirstName, LastName from Contact"; 
	$response = $mySforceConnection->query($query); 
	// QueryResult object is only for PARTNER client $queryResult = new QueryResult($response); 
	foreach ($queryResult->records as $record){ 	
		echo "Id = ".$record->Id; 
		echo "First Name = ".$record->FirstName; 
		echo "Last Name = ".$record->LastName; 
	}
?>

