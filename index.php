<?php
	define("USERNAME", "krzysztof.magdowski@ttms.akademia.lipiec.2016"); 
	define("PASSWORD", "8uhb*UHB"); 
	define("SECURITY_TOKEN", "AqvMzXHKIPMbpmeJaX0bkqmGt"); 
	
	include('soapclient/SforceEnterpriseClient.php'); 
	require_once("soapclient/SforceHeaderOptions.php"); 
	
	$mySforceConnection = new SforceEnterpriseClient(); 
	$mySforceConnection->createConnection("soapclient/wsdl.wsdl.xml"); 
	$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);
	
	$query = "SELECT Id, Name from Account"; 
	$response = $mySforceConnection->query($query); 
	// QueryResult object is only for PARTNER client $queryResult = new QueryResult($response); 
	foreach ($response->records as $record){ 	
		echo "Id = ".$record->Id; 
		echo "First Name = ".$record->Name; 
	}
?>

