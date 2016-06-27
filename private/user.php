<?php

require_once('database.php');

class User {
	public $id;
	public $email;
	public $name;

	public function init($email, $name = '') {
		global $db;
		$this->email = mysqli_real_escape_string($db, $email);
		$this->name = mysqli_real_escape_string($db, $name);
	}

	public function create($password) {
		global $db;

		$password = password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 10]); // Hash the password with a cost of 10.
		$sql  = "INSERT INTO users(email, name, password) ";
		$sql .= "values('" . $this->email . "', '";
		$sql .= $this->name . "', '";
		$sql .= $password . "'";
		$sql .= ");";

		if(mysqli_query($db, $sql)) {
			$this->id = mysqli_insert_id($db);
		} else {
			echo "Some errors occured.";
		}
	}

	public function login($password = '') {
		global $db;
		$_SESSION['error'] = "";

		$sql = "SELECT * FROM users WHERE email='$this->email' limit 1;";

		if (!($result = mysqli_query($db, $sql))) {
			$_SESSION['error'] = "Wrong Email,";
			return false;
			exit();
		}
		$user_data = mysqli_fetch_assoc($result);
		if(password_verify($password, $user_data['password'])) {
			// All good let this bitch in
			$this->id = $user_data['id'];
			$this->name = $user_data['name'];
			return true;
			exit();
		}
		else {
			$_SESSION['error'] .= "Wrong Password,";
			return false;
			exit();
		}
		// Something is fishy
		return false;
		exit();
	}

	static public function find_all() {
		global $db;
		$sql = "SELECT * FROM USERS";
		if($users = mysqli_query($db, $sql))
		{
			return $users;
		}
		else 
		{
			echo "Something wrong occured";
		}
	}

	static public function find_by_id($id) {
		global $db;
		$id = mysqli_real_escape_string($db, $id);
		$sql = "SELECT * FROM users where id=" . $id . ";";
		echo $sql;
		if( $user = mysqli_query($db, $sql) ){
			return $user;
		} else {
			return false;
		}
	}
 
	// static function check_if_user_exists($email) { 
	// 	global $db;
	// 	$email = mysqli_real_escape_string($db, $email);

	// 	$query = "SELECT * FROM users WHERE email = '$email'";
	// 	$result = mysqli_query($db, $query) or die (mysqli_error($db));

	// 	if (mysqli_num_rows($result) > 0) {
	// 	    mysqli_close($db);
	// 	    return false;
	// 	    exit();
	// 	}

	// 	return true;
	// }
	// Not working correct
}