<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "functions.php";

spl_autoload_register(function ($class) {
    // var_dump($class);
    require base_path("Core/" . $class . ".php");
});

require base_path("router.php");

// dd($_SERVER);