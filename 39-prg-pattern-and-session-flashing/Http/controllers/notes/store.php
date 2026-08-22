<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A Body of no less than 1 and no more than 1000 characters is required';
}

if (!empty($errors)) {
    // validation issue here
    return view("notes/create.view.php", [
        "heading" => $heading,
        'errors' => $errors ?? []
    ]);
}

$db->query("INSERT INTO `notes`.`notes` (`body`, `user_id`) VALUES (:body, :user_id)", [
    'body' => $_POST['body'],
    'user_id' => 5
]);

header('Location: /notes');
exit();