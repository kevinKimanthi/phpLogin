<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "jkuat";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "Connection failed!";
}