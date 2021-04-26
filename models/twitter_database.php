<?php

function get_tweets() {
    global $db; // tells PHP to go find the $db variable defined already

    $query = "select * from tweets";
    $statement = $db->prepare($query);

    $statement->execute();

    $tweets = $statement->fetchAll();

    $statement->closeCursor();

    return $tweets;
}
