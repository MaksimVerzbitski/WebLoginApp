<?php

$hostName = "localhost";
$dbUser = "tpqaqkwg_Franix90";
//$dbUser = "Franix90";
$dbPassword = "AjorDan1517";
$dbName = "tpqaqkwg_votes";

$conn=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);

if(!$conn){
    die("Something went wrong!");
}


?>