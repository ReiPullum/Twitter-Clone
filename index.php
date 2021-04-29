<?php
require('./models/database.php');
require('./models/twitter_database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
        $action = 'tweets';
       require('./views/guest.php');
    }
 
}

    
    if ( $action == 'add_user') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    
    if ($user_name == null || $password == null) {
        $error = "missing username or password";
        include('./views/error.php');
    } else {
         $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
        add_user($user_name, $password_hash);
        require('./views/users.php');
    } 
}
if($action == 'login'){
    
}
else if($action == 'changePass'){
    
}
else if($action == 'newUser'){
    
}

    
?>


