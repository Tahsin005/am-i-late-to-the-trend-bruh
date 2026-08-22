<?php

use Core\App;
use Core\Database;

$heading = "Note";

$db = App::resolve(Database::class);

$currentUserId = 5;

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("DELETE FROM notes where id = :id", ['id' => $_POST['id']]);

header("Location: /notes");
exit();

