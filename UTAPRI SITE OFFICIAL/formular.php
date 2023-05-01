<?php

$con = mysqli_connect('localhost', 'root', '','fanmail');
$txtName = $_GET['name'];
$txtIdol = $_GET['idol'];
$txtEmail = $_GET['email'];
$txtMessage = $_GET['message'];

$sql = "INSERT INTO `fanmail` (`Id`,`name`,`idol`, `email`, `message`) VALUES ('0','$txtName','$txtIdol', '$txtEmail', '$txtMessage')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	include( 'trimis.html' );
}

?>