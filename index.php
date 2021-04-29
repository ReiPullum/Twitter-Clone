<?php
require('./models/database.php');
require('./models/twitter_database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
        $action = 'tweets';
       require('./views/welcome.php');
    } else {
        require('./views/Login.php');
    }
 
}
/*if($action == 'login'){
    
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $user = get_user($username);
}
    if ($user != NULL) {
        if (password_verify($password, $user['password_hash'])) {
            echo "login successful";
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $username;
            header("Location: ./users.php");
        } else {
            echo "incorrect password";
        }
}
else if($action == 'changePass'){
    
}
else if($action == 'newUser'){
    
}*/

    
?>


