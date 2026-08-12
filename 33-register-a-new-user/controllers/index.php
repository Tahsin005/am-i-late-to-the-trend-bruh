<?php

$_SESSION['name'] = "Tahsin";

$heading = "Home";

view("index.view.php", [
    "heading" => $heading
]);