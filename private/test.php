<?php

require('init.php');

// $email = 'john@ww.com';

// $query = "SELECT * FROM users WHERE email = '$email'";
// $result = mysqli_query($db, $query) or die (mysqli_error($db));

// if (mysqli_num_rows($result) > 0) {
//     $_SESSION['registered'] = "Email is already registered.";
//     mysqli_close($db);
//     echo "Nah ..";
//     exit();
// }

// echo "GO in..";

// if(User::check_if_user_exists('john@doe')) {
// 	echo "Exists";
// 	exit();
// }

// echo "Does not exists";


// $password = 'random';
// $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

// echo $password . '<br>' . $hashed_password;

// if(password_verify($password, $hashed_password))
// {
// 	echo "Verified";
// }
// else 
// {
// 	echo "...";
// }

// $email = 'jae@doe.com';
// $password = 'pas';

// // Lets try to login
// $sql = "SELECT * FROM USERS WHERE email = '$email' limit 1";
// $result = mysqli_query($db, $sql) or die(mysqli_error($db));
// $user_data = mysqli_fetch_assoc($result);
// var_dump($user_data);

// if(mysqli_num_rows($result) > 0) {
// 	// Email exists lets verify password
// 	$password_hash = $user_data['password'];
// 	if(password_verify($password, $password_hash)) {
// 		echo "Verified";
// 	} else {
// 		echo "Wrong Password";
// 	}
// } else {
// 	echo "Wrong Email";
// }

// $event = new Event('A new event', '30-12-2016', 'banana llc', 'Its event for bananas thanks.', 'banana land', 'Banana no-1, banana land');
// if($event->create()) {
// 	echo "Event Created";
// } else {
// 	echo "Event Creation Failed";
// }

if( isset($_POST['submit']) ) {
	var_dump($_POST);
	var_dump($_FILES);

	if($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png") {
		$_FILES['image']['size'] *= 0.000000954;
		echo $_FILES['image']['size'] . '<br>';
	}

	echo uniqid();
}