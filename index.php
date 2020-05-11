<?php  
  echo "Welcome to Red Dias for Sizing your Applications on OpenShift";
  print "We are running on host -> " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  
  echo "<br>To test the database, hit the dbtest.php URL";

  echo "<BR><BR>The environment variables required are databaseuser, databasepassword, and databasename.";
