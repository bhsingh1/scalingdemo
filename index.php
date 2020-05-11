<?php
  print "I am running on host -> " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  echo "Welcome to Red Dias for sizing your applications on OpenShift";
  echo "<br>To test the database, hit the dbtest.php URL";

  echo "<br><br>This assumes that you have the correct env variables set";
  echo "<BR><BR>The environment variables required are databaseuser, databasepassword, and databasenmae.";
