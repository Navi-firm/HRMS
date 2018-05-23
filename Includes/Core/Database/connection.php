<?php
$servername = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$database = "hrms"; // the name of the database that you are going to use for this project
$username = "root"; // the username that you created, or were given, to access your database
$password = "root"; // the password that you created, or were given, to access your database

mysql_connect($servername, $username, $password) or die("MySQL Error: " . mysql_error());
mysql_select_db($database) or die("MySQL Error: " . mysql_error());
?>
