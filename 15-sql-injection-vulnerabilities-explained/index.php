<?php

require "functions.php";
require "Database.php";
// require "router.php";

// dd($_SERVER);

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];

// $posts = $db->query("select * from posts")->fetchAll();

// // dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post["title"] . "</li>";
// }

$query = "select * from posts where id = :id";

// dd($query);

$post = $db->query($query, [':id' => $id])->fetch();
dd($post);