<?php // mysqli_connect.php

// Setting Databse info as constraints
DEFINE ('DB_USER', 'infost490f2308_main');
DEFINE ('DB_PASSWORD', 'TSAPrecheck!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'infost490f2308_Flare');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

mysqli_set_charset($dbc, 'utf8');
?>