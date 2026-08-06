<?php

require "functions.php";
require "Database.php";
// require "router.php";

// dd($_SERVER);

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];

$notes = $db->query("select * from notes")->fetchAll();

// dd($posts);

foreach ($notes as $note) {
    echo "<li>" . $note["body"] . "</li>";
}

// $query = "select * from notes where id = :id";

// // dd($query);

// $note = $db->query($query, [':id' => $id])->fetch();
// dd($post);