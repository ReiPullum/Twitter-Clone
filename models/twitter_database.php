<?php

function get_tweets() {
    global $db; // tells PHP to go find the $db variable defined already

    $query = "select * from tweets";
    $statement = $db->prepare($query);

    $statement->execute();

    $tweet = $statement->fetchAll();

    $statement->closeCursor();

    return $tweet;
}

function change_password($user_name) {
    global $db;

    $query = 'update user set password_hash = :id where name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(":user_name", $user_name);
    $statement->bindValue(":id", $id);

    $statement->execute();
    $statement->closeCursor();
}

function get_user() {
    global $db; // tells PHP to go find the $db variable defined already

    $query = "SELECT * from user ";

    $statement = $db->prepare($query);

    $statement->execute();

    $user = $statement->fetch();

    $statement->closeCursor();

    return $user;
}

function upload_image($image_data, $name) {
    global $db;

    $query = 'INSERT INTO tweets (data, name)'
            . 'values ( :data, :name)';
    $statement = $db->prepare($query);
    $statement->bindValue(":data", $image_data);
    $statement->bindValue(":name", $name);

    $statement->execute();
    $statement->closeCursor();
}

function get_image($id) {
    global $db;

    $query = "select * from tweets where id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);

    $statement->execute();

    $image = $statement->fetch();

    $statement->closeCursor();

    return $image;
}

function get_guest_tweets() {
    global $db; // tells PHP to go find the $db variable defined already

    $query = "select * from user "
            . "join tweets on tweets.user_id = user.id ";

    $statement = $db->prepare($query);

    $statement->execute();

    $guesttweets = $statement->fetchAll();

    $statement->closeCursor();

    return $guesttweets;
}

function check_Signin($username, $password) {
    $message = "not verified";
    foreach (get_user() as $users) {
        if ($username == $users['name']) {
            if ($password == $users['password_hash']) {
                $message = "verified";
                break;
            } else {
                $message = "not verified";
                break;
            }
        } else {
            continue;
        }
    }
    return $message;
}

?>