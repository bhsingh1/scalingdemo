<?php
$dbhost = getenv("POSTGRESQL_SERVICE_HOST");
$dbport = getenv("POSTGRESQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

error_reporting(E_WARNING);
$connection=pg_connect($dbhost, $dbport, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n");
    exit();
} else {
    printf("Connected to the database");
}
#$connection->close();
?>
