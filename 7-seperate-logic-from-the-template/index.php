<?php

$books = [
    [
        "name"        => "The Great Gatsby",
        "author"      => "F. Scott Fitzgerald",
        "releaseYear" => 1925,
        "purchaseUrl" => "https://www.amazon.com/dp/0743273567",
    ],
    [
        "name"        => "To Kill a Mockingbird",
        "author"      => "Harper Lee",
        "releaseYear" => 1960,
        "purchaseUrl" => "https://www.amazon.com/dp/0061120081",
    ],
    [
        "name"        => "1984",
        "author"      => "George Orwell",
        "releaseYear" => 1949,
        "purchaseUrl" => "https://www.amazon.com/dp/0451524934",
    ],
    [
        "name"        => "The Catcher in the Rye",
        "author"      => "J.D. Salinger",
        "releaseYear" => 1951,
        "purchaseUrl" => "https://www.amazon.com/dp/0316769487",
    ],
];

// function filter($items, $key, $value) {
//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($item[$key] === $value) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

// $filteredBooks = filter($books, "author", "George Orwell");

# Using Lambda Functions (Anonymous Functions / Closures)
// function filter($items, $fn) {
//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

// $filteredBooks = filter($books, function($book) {
//     return $book["author"] === "George Orwell";
// });

$filteredBooks = array_filter($books, function ($book) {
    return $book["author"] === "George Orwell";
});

require "index.view.php";