<?php

define('PUBLIC_URL' , 'http://localhost/events/public/');

function redirect_to_homepage() {
	header('Location: ' . PUBLIC_URL . 'index.php');
}