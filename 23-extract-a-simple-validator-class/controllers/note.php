<?php

$heading = "Note";
$currentUserId = 5;

$config = require 'config.php';

$db = new Database($config['database']);

// dd($db);

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->findOrFail(); 

authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";  