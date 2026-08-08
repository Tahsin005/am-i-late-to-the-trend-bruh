<?php

$heading = "Create Note";

$config = require 'config.php';

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    if (strlen(trim($_POST['body'])) === 0) {
        $errors['body'] = 'A Body is required';
    }

    if (strlen(trim($_POST['body'])) > 1000) {
        $errors['body'] = 'Body cannot be longer than 1000 characters';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO `notes`.`notes` (`body`, `user_id`) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 5
        ]);
    }

    // header('Location: /notes');
    // exit();
}

require "views/notes-create.view.php";