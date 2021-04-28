<?php

require('./views/login.php');
$action = filter_input(INPUT_POST, 'action');


/*if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'submitLogin';
        
    }
     require('./views/Login.php');
}*/