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
	echo "User Table Created <br>";
}
else
{
	echo "Something went wrong. <br>";
}

// Events table
$sql = 'CREATE TABLE IF NOT EXISTS events (
			id INT(11) AUTO_INCREMENT NOT NULL,
			name VARCHAR(256) NOT NULL,
			date DATE NOT NULL,
			organiser VARCHAR(256) NOT NULL,
			description TEXT NOT NULL,
			city VARCHAR(256) NOT NULL,
			location VARCHAR(512) NOT NULL,
			PRIMARY KEY(id)
		);
';

if(mysqli_query($db, $sql)) {
	echo "events table created <br>";
} else {
	echo mysqli_error($db);;
	echo "Error while creating events table <br>";
}