
<?php
//session_start();
//$databaseUser='root';
//$databaseHost='127.0.0.1';
//$databasePassword=''; 
$databaseHost='whserver.tptlive.ee';
$databaseUser="tpqaqkwg_Franix90";
$databasePassword='5H6rEn2pZt3VGmQ'; 

$databaseName='tpqaqkwg_votes';
/* try {
  $conn = new PDO("mysql:host=".$databaseHost.";dbname=".$databaseName, $databaseUser, $databasePassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Database Connected Successfully'; 
} catch(PDOException $error) {
  echo "Something went wrong " . $error->getMessage();
} */
$conn = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName);
if(!$conn){
  die("Something went wrong");
}

?>