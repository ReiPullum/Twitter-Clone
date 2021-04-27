<?php

require('/models/database.php');
require('/models/twitter_database.php');

$id = $_GET['id'];

$image = get_image($id);
$name = $image['name'];
$content = $image['data'];

header("Content-type", "image/jpg");
print($content);

?>