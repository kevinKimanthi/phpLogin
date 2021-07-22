<?php

$serverName= "localhost";
$dbUsername= "root";
$dbPassword = "";
$dbName = "test_db";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "Connection failed!";
}