<?php

session_start();
require('./models/database.php');
require('./models/twitter_database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL || $action == false || $action == "") {
    $action = 'signin';
}

if ($action == 'signin') {
    include 'views/welcome.php';
} else if ($action == 'add_user') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');

    if ($user_name == null || $password == null) {
        $error = "missing username or password";
        include('./views/error.php');
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        add_user($user_name, $password_hash);
        include ('./views/users.php');
    }
} else if ($action == 'submitLogin') {

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $user = check_Signin($username, $password);
    if ($user == 'verified') {


        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $username;
        include ('./views/users.php');
    } else {

        echo "incorrect";
    }
} else if ($action == 'new') {
    include ('views/newUsers.php');
} else if ($action == 'change') {
    include ('views/changePassword.php');
}else if ($action == 'add_tweet'){
    $createtweet = filter_input(INPUT_POST, 'create_tweet');
    add_tweets($createtweet);
    include ('./views/users.php');
    
}
?>