<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "fanmail";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>