<?php

define('PUBLIC_URL' , 'http://localhost/events/public/');
define('BASE_URL', $_SERVER['HTTP_HOST']);

function redirect_to_homepage() {
	header('Location: ' . PUBLIC_URL . 'index.php');
}