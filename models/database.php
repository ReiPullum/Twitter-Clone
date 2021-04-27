<?php
try {
    $data_source_name = 'mysql:host=localhost;dbname=test';
    $user_name = 'root';
    $password = 'test';

   $user_id= filter_input(INPUT_GET, 'user_id');

    $db = new PDO($data_source_name, $user_name, $password);
} catch (PDOException $ex) {
    $error_message = $ex->getMessage();
    include('database_error.php');
    exit();
}

