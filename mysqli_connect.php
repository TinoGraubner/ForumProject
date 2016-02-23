<?php
// This provides the information for accessing the database. 
// It also creates a connection to MySQL, 
// It selects the database, and sets the encoding.
// Set the database access information as constants:
DEFINE ('DB_USER', 'ainfo_219');
DEFINE ('DB_PASSWORD', 'A9152webdev');
DEFINE ('DB_HOST', 'localhost');DEFINE ('DB_NAME', 'ainfo_219');
// Make the connection:
$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
// Set the encoding...mysqli_set_charset($dbcon, 'utf8');