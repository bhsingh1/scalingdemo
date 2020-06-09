<?php
$dbhost = getenv("POSTGRESQL_SERVICE_HOST");
#$dbport = getenv("POSTGRESQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

#error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$connection=pg_connect($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n");
    exit();
} else {
    printf("Connected to the database");
}
#$connection->close();
?>
