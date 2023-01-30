
<?php session_start();
$databaseHost='localhost';
$databaseUser='tpqaqkwg_Maksim'; 
$databasePassword=' AjorDan1517'; 
$databaseName='tpqaqkwg_votes';
try {
  $conn = new PDO("mysql:host=".$databaseHost.";dbname=".$databaseName, $databaseUser, $databasePassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Database Connected Successfully'; 
} catch(PDOException $error) {
  echo "Something went wrong " . $error->getMessage();
}
?>