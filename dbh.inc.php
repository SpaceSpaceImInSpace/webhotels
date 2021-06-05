<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="webhotels";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failled: " . mysqli_connect_error());
}
