<?php
$con = mysqli_connect('localhost', 'root', '','login');
$txtEmail = $_POST['email'];
$txtPhone = $_POST['password'];
$sql = "INSERT INTO `login` (`Id`, `email`, `password`) VALUES ('0', '$txtEmail', '$txtPhone')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	include( 'inregistrat.html' );
}

?>