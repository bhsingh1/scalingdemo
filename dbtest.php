<?php
$dbhost = getenv("POSTGRESQL_SERVICE_HOST");
$dbport = getenv("POSTGRESQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

$db = pg_pconnect( "$dbhost, $dbuser, $dbpwd, $dbname"  );
if(!$db) {
   echo "Error : Unable to open database\n";
} else {
   echo "Opened database successfully\n";
}
?>

#error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
#$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
#$connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
#if (!$connection=pg_pconnect("$dbhost, $dbuser, $dbpwd, $dbname")) {
#if (!$connection = pg_connect ("host=localhost dbname=sampledb user=postgres password=root")) {
    #$error = error_get_last();
    #echo "Connection failed. Error was: ". $error['message']. "\n";
#} else {
    #echo "Connection succesful.\n";
#}

#if ($connection->connect_errno) {
    #printf("Connect failed: %s\n", $postgresqli->connect_error);
    #exit();
#} else {
    #printf("Connected to the database");
#}
#$connection->close();
#$connection->close();
?>
