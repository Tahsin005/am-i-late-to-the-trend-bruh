<?php

use Core\App;
use Core\Database;

$heading = "Note";

$db = App::resolve(Database::class);

$currentUserId = 5;

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    "heading" => $heading,
    'note' => $note
]);
