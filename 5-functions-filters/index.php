<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5-functions-filters</title>
    <style>
        body {
            font-family: sans-serif;
        }
        ul {
            line-height: 1.8;
        }
        a {
            color: darkblue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>

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

        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book["author"] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <?php if ($book["author"] === "George Orwell"): ?>
                <li>
                    <a href="<?php echo $book["purchaseUrl"] ?>" target="_blank">
                        <?php echo $book["name"] ?>
                    </a>
                    : <?php echo $book["author"] ?> (<?php echo $book["releaseYear"] ?>)
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>
        <?= filterByAuthor($books, "George Orwell") ?>
    </p>

    <ul>
        <?php foreach (filterByAuthor($books, "George Orwell") as $book): ?>
             <li>
                <a href="<?php echo $book["purchaseUrl"] ?>" target="_blank">
                    <?php echo $book["name"] ?>
                </a>
                : <?php echo $book["author"] ?> (<?php echo $book["releaseYear"] ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
