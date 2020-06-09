<?php
   $host        = "host = sampledb.sample-app-db.svc.cluster.local";
   $port        = "port = 5432";
   $dbname      = "dbname = sampledb";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
