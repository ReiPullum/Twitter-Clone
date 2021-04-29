 
<?php
session_start();
require('./models/database.php');
require('./models/twitter_database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL || $action == false || $action == "") {
        $action = 'signin';
       
    } 
 
if($action == 'signin'){
    include 'views/welcome.php';
}
else if($action == 'login'){
    
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    echo '$username';
    echo '$password';
    $user = twitter_database::check_Signin($username,$password);
    if ($user == "verified") {
        
            echo 'login successful';
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $username;
            include './views/users.php';
    }
        else {
            echo 'incorrect password';
            echo "incorrect";
        }
}
else if($action == 'changePass'){
    
}
else if($action == 'newUser'){
    
}
?>

    
