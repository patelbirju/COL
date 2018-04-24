<?php

$dbName = 'id5446750_col_db';
$host = 'localhost';
$username = 'id5446750_accounts';
$password = 'legacy';

$secretGameKey = "12345";
$secretServerKey = "54321";

function dbConnect()
{
	global  $dbName;
	global  $host;
	global  $username;
	global  $password;

	$link = mysqli_connect($host, $username, $password, $dbName);
	
	if(!$link)
	{
		fail("Couldn�t connect to database server");
	}
	
	if(!@mysqli_select_db($dbName))
	{
		fail("Couldn�t find database $dbName");
	}
	
	return $link;
}
	
function safe($variable)
{
	$variable = addslashes(trim($variable));
	return $variable;
}

function fail($errorMsg)
{
	print $errorMsg;
	exit;
}

?>