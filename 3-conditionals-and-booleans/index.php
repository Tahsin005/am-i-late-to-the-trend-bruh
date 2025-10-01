<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-conditionals-and-booleans</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter";
        $read = true;

        $x              = 10;
        $y              = 5;
        $sum            = $x + $y;
        $multiplication = $x * $y;
        $division       = $x / $y;
        $remainder      = $x % $y;

        if ($read) {
            $message = "You have read $name. Thanks! You are $z years old.";
        } else {
            $message = "You have not read $name.";
        }
    ?>
    <h1>
        <?php
            echo $message;
            var_dump($read);
            var_dump($message);
        ?>
        <br>
        <?php echo $message ?>

        <p>Bruhh</p>
        <?php
            echo $sum;
            echo $multiplication;
            echo $division;
            echo $remainder;
        ?>
        <br>
        <?php
            var_dump(5);
            var_dump("John");
            var_dump(3.14);
            var_dump(true);
            var_dump(null);
        ?>
    </h1>
</body>
</html>