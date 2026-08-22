<?php

use Core\App;
use Core\Database;

$heading = "Edit Note";

$db = App::resolve(Database::class);

$currentUserId = 5;

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/edit.view.php", [
    "heading" => $heading,
    'errors' => [],
    'note' => $note
]);