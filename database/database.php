
<?php session_start();

$databaseHost='whserver.tptlive.ee';
$databaseUser="tpqaqkwg_Franix90";
$databasePassword='5H6rEn2pZt3VGmQ'; 
//$databaseUser='root';
//$databaseHost='127.0.0.1';
//$databasePassword=''; 

$databaseName='tpqaqkwg_votes';
try {
  $conn = new PDO("mysql:host=".$databaseHost.";dbname=".$databaseName, $databaseUser, $databasePassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Database Connected Successfully'; 
} catch(PDOException $error) {
  echo "Something went wrong " . $error->getMessage();
}
?>