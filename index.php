<?php
require('./models/database.php');
require('./models/twitter_database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
        $action = 'tweets';
       
    }
    require('./views/guest.php');
}
if($action == 'login'){
    
}
else if($action == 'changePass'){
    
}
else if($action == 'newUser'){
    
}

    
?>


