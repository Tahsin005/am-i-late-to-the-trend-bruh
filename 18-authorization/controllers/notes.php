<?php

$heading = "My Notes";

$config = require 'config.php';

$db = new Database($config['database']);

// dd($db);

$notes = $db->query("SELECT * FROM notes where user_id = 5")->fetchAll(); 

// dd($notes);

require "views/notes.view.php";