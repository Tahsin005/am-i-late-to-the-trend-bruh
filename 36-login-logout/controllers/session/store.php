<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password)) {
    $errors['password'] = "Please provide a password.";
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query("select * from users where email = :email", [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email,
        ]);
        header("Location: /");
        exit();
    }
}

return view("session/create.view.php", [
    'errors' => [
        "email" => "Invaild email or password."
    ]
]);