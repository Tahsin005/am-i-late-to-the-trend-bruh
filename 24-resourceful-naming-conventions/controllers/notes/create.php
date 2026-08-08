<?php

require base_path('Validator.php');

$heading = "Create Note";

$config = require base_path('config.php');

$db = new Database($config['database']);

// dd(Validator::email("test@example.com"));

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A Body of no less than 1 and no more than 1000 characters is required';  
    }

    if (empty($errors)) {
        $db->query("INSERT INTO `notes`.`notes` (`body`, `user_id`) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 5
        ]);
        header('Location: /notes');
        exit();
    }

}

require base_path("views/notes/create.view.php");