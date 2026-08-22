<?php

use Core\App;
use Core\Database;

$heading = "My Notes";

$db = App::resolve(Database::class);

// dd($db);

$notes = $db->query("SELECT * FROM notes where user_id = 5")->get();

// dd($notes);

view("notes/index.view.php", [
    "heading" => $heading,
    'notes' => $notes
]);