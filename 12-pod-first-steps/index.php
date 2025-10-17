<?php

require "functions.php";
// require "router.php";

// dd($_SERVER);

// Database connection settings
$dsn      = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
$username = "dbeaver_user";
$password = "your_password_here";

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
// dd($posts);

foreach ($posts as $post) {
    echo "<li>". $post["title"]. "</li>";
}
