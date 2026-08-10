<?php

use Core\Database;

$heading = "Note";

$config = require base_path('config.php');

$db = new Database($config['database']);

// dd($db);
$currentUserId = 5;

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    "heading" => $heading,
    'note' => $note
]);
