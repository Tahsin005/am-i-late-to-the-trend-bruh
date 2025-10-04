<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6-lambda-functions</title>
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
    <ul>
        <?php foreach ($filteredBooks as $book): ?>
             <li>
                <a href="<?php echo $book["purchaseUrl"] ?>" target="_blank">
                    <?php echo $book["name"] ?>
                </a>
                :                  <?php echo $book["author"] ?> (<?php echo $book["releaseYear"] ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
