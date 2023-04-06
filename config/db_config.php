<?php

$dbhost = 'gc-webhosting.nl:2083';
$dbuser = 'bcamp_root';
$dbpass = 'bas_gc1305';
$dbname = 'bcamp_netwerken_2023';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>