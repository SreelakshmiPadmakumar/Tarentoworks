<?php

$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "finaltaskdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
