<?php
//these are defined as constants
define('DB_HOST', 'localhost:3306');
define('DB_USER', 'server');
define('DB_PASS', 'Po:l00lk-');
define('DB_NAME', 'bitter-geoffwalker');

global $con;
	  $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>
