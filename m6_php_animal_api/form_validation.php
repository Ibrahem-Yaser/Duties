<?php

session_start();

$_SESSION['error'] = null;


if ($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST))
    die("You are a bad guy and you are trying to access this code directly!");

// var_dump($_SERVER);
// var_dump($_POST);

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';

$db_username = 'admin';
$db_password = '1212';



if (!empty($username) && !empty($password)) {
    if (strlen($username) >= 5 && strlen($username) <= 10) {
        if ($db_username != $db_username) {
            $error_msg = "Incorrect username or password";
            $error = true;
        }
    } else {
        $error_msg = "Username should be between 5 and 10 chars.";
        $error = true;
    }

    if (strlen($username) >= 5 && strlen($username) <= 10) {
        if ($db_password == $db_password) {
            if ($password != $db_password) {
                $error_msg = "Incorrect username or password";
                $error = true;
            }
        } else {
            $error_msg = "Incorrect username or password";
            $error = true;
        }
    } else {
        $error_msg = "Username should be between 5 and 10 chars.";
        $error = true;
    }
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    header('Location: ./');
} else {
    $_SESSION['user'] = array('username' => $username);
    header('Location: ./animals.php');
}
    exit();



