<?php

require_once('../private/init.php');

if(!isset($_SESSION['user_id']) && $_SESSION['user_id'] == '') {
	redirect_to_homepage();
}

echo "Hello " . $_SESSION['user_name'];

echo '<br><a href="../private/logout.php">Logout</a>';