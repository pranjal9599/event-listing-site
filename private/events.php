<?php

require_once('init.php');

class Event {

	public $id;
	public $name;
	public $date;
	public $organiser;
	public $description;
	public $city;
	public $location;

	public function __construct($name='', $date='', $organiser='', $description='', $city='', $location='') {
		$this->name = $name;
		$this->date = $date;
		$this->organiser = $organiser;
		$this->description = $description;
		$this->city = $city;
		$this->location = $location;
	}

	public function create() {
		global $db;
		$sql = "INSERT INTO events(name, date, organiser, description, city, location) VALUES(
				'$this->name', '$this->date', '$this->organiser', '$this->description', '$this->city', '$this->location'); 	
		";

		if(mysqli_query($db, $sql)) {
			return true;
		} else {
			echo mysqli_error($db);
			return false;
		}
	}


}