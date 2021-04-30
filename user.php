<?php

require('./models/database.php');
require('./models/twitter_database.php');

//$user = get_user();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_users';
    }
}

if ($action == 'list_users') {
    require ('./views/users.php');
} else if ($action == 'add_user') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');

    if ($user_name == null || $password == null) {
        $error = "missing username or password";
        include('./views/error.php');
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        add_user($user_name, $password_hash);
        header("Location: ./users.php");
    }
} else if ($action == 'change_password') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');

    if ($user_name == null || $password == null) {
        $error = "missing username or password";
        include('./views/error.php');
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        change_password($user_name, $password_hash);
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $user_name;
        header("Location: ./users.php");
    }
}
 