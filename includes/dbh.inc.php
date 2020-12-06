<?php

$serverName = "localhost:8889";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}