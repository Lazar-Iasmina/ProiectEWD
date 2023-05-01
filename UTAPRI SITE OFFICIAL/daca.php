<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "login";
 $con = new mysqli($hostName, $userName, $password, $databaseName);
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>