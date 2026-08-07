<?php

$heading = "Note";

$config = require 'config.php';

$db = new Database($config['database']);

// dd($db);

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->fetch(); 

// dd($note);

require "views/note.view.php";  