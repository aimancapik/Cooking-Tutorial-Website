<?php
$db_host = "how-to-cook.000webhostapp.com";
$db_user = "id20064435_chef";
$db_password = "tqlys@+E=2[}[TWH";
$db_table = "id20064435_cooking";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_table);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>