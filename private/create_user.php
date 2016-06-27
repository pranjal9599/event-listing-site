<?php

require_once('init.php');

if(!isset($_POST['submit'])) {
	redirect_to_homepage();
}

// Check if user already exists
var_dump($_POST);
$email = $_POST['email'];

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db, $query) or die (mysqli_error($db));

if (mysqli_num_rows($result) > 0) {
    $_SESSION['error'] = "Email is already registered.";
    mysqli_close($db);
    redirect_to_homepage();
    exit();
}

$user = new User;
$user->init($_POST['email'], $_POST['name']);
$user->create($password);
$_SESSION['user_id'] = $user->id;
$_SESSION['user_name'] = $user->name;
$_SESSION['user_emails'] = $user->email;
header('Location: ' . PUBLIC_URL . 'home.php');
exit();
