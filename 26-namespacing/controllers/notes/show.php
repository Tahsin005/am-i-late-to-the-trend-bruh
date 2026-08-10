<?php

use Core\Database;

$heading = "Note";
$currentUserId = 5;

$config = require base_path('config.php');

$db = new Database($config['database']);

// dd($db);

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    "heading" => $heading,
    'note' => $note
]);