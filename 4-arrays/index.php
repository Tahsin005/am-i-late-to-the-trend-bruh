<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4-arrays</title>

    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>

    <ul>
        <?php
            $books = [
                "The Alchemist",
                "Rich Dad Poor Dad",
                "Atomic Habits",
                "The Power of Habit",
                "Deep Work",
            ];
        ?>
    </ul>
    <ul>
        <?php
            $books = [
                "The Alchemist",
                "Rich Dad Poor Dad",
                "Atomic Habits",
                "The Power of Habit",
                "Deep Work",
            ];

            foreach ($books as $book) {
                echo "<li>{$book}™</li>";
            }
        ?>
    </ul>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?php echo $book ?>™
            </li>
        <?php endforeach; ?>
    </ul>

    <p>Associative Array</p>
    <p>
        <?php echo $books[1]?>
    </p>

    <ul>
        <?php
            $persons = [
                [
                    "name" => "Tahsin",
                    "age"  => 21,
                    "city" => "Dhaka",
                ],
                [
                    "name" => "John",
                    "age"  => 25,
                    "city" => "New York",
                ],
                [
                    "name" => "Alice",
                    "age"  => 30,
                    "city" => "Los Angeles",
                ],
            ];

            foreach ($persons as $p) {
                echo "<li>{$p['name']} is {$p['age']} years old and lives in {$p['city']}.</li>";
            }
        ?>
</body>
</html>