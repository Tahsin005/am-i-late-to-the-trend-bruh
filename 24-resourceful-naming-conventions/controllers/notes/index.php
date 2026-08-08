<?php

$heading = "My Notes";

$config = require base_path('config.php');

$db = new Database($config['database']);

// dd($db);

$notes = $db->query("SELECT * FROM notes where user_id = 5")->get(); 

// dd($notes);

require base_path("views/notes/index.view.php");