<?php

require "functions.php";
require "Database.php";
// require "router.php";

// dd($_SERVER);

$config = require 'config.php';

$db = new Database($config['database']);

$posts = $db->query("select * from posts")->fetchAll();

// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
