<?php
if(!isset($_POST['submit']) && $_POST['submit'] == '') {
	header('Location: ' . '../public/index.php');
}

require_once('init.php');
$email = $_POST['email'];
$password = $_POST['password'];

$user = new User;
$user->init($email,'', '');

if ($user->login($password)) {
	$_SESSION['user_id'] = $user->id;
	$_SESSION['user_name'] = $user->name;
	$_SESSION['user_email'] = $user->email;
	header('Location: ' . '../public/home.php');
	exit();
} else {
	return false;
}

$errors = [];
$errors = explode(",", $_SESSION['error']);

$_SESSION['error'] = '';