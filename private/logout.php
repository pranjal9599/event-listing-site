<?php

require_once('init.php');
// Empty the session data
$_SESSION = array();

// Delete the session cokkie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
 // Destroys session completely
session_destroy();

redirect_to_homepage();