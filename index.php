<?php  
  echo "Welcome to a Quick Demo on Containersing your Applications on OpenShift";
  echo "<br>";
  echo "<br>";
  print "We are running on host -> " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  echo "<br>";
  echo "<br>To test the database, hit the dbtest.php URL";

  echo "<BR><BR>The environment variables required are databaseuser, databasepassword, and databasename.";
