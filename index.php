<?php


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL || $action == false || $action == "") {
   $action = 'tweets';
     
}
if($action == 'tweets'){
    include'./views/Login.php';
}
else if($action == 'login'){
    
}
else if($action == 'changePass'){
    
}
else if($action == 'newUser'){
    
}

?>
