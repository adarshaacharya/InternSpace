<?php

$Servername="localhost";
$dbUsername="root";
$dbpassword="";
$dbName="loginsystemtut";

$conn = mysqli_connect($Servername,$dbUsername,$dbpassword,$dbName);

if(!$conn){
	die("Failed Connection".mysqli_connect_error());
}

