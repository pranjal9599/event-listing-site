<?php
 
require_once('database.php');
 // User table
$sql = 'CREATE TABLE IF NOT EXISTS users (
		id int(11) AUTO_INCREMENT NOT NULL,
		email VARCHAR(256) NOT NULL,
		name VARCHAR(256) NOT NULL,
		password VARCHAR(256) NOT NULL,
		PRIMARY KEY(id)
	);
';

if(mysqli_query($db, $sql)) {
	echo "User Table Created";
}
else
{
	echo "Something went wrong.";
}

// Events table
$sql = 'CREATE TABLE IF NOT EXISTS events (
		id INT(11) AUTO_INCREMENT NOT NULL,
		email VARCHAR(256) NOT NULL,
		
		'