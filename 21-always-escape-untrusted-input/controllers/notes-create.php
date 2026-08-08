<?php

$heading = "Create Note";

$config = require 'config.php';

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->query("INSERT INTO `notes`.`notes` (`body`, `user_id`) VALUES (:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 5
    ]);

    header('Location: /notes');
    exit();
}

require "views/notes-create.view.php";