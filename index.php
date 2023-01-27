<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <main>
        <form action="./index.php" method="GET">
            <label for="password_length">Lunghezza password:</label>
            <input type="number" name="password_length">
            <button type="submit">Genera password</button>
        </form>

        <?php
        include_once __DIR__ . '/function.php';
        ?>
    </main>
</body>

</html>