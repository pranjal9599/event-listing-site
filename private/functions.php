<?php

define('PUBLIC_URL' , 'http://localhost/events/public/');
define('BASE_URL', $_SERVER['HTTP_HOST']);

function redirect_to_homepage() {
	header('Location: ' . PUBLIC_URL . 'index.php');
}

function get_lat_long($address) {
	$address = str_replace(" ", "+", $address);

	$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false");
	$json = json_decode($json);

	$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
	$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
	return $lat . ',' . $long;
}