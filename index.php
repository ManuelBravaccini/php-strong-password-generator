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
            <input type="text" name="password_length">
            <button type="submit">Genera password</button>
        </form>

        <?php
        $length = (int) $_GET['password_length'];

        function generatePassword($length)
        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            return substr(str_shuffle($chars), 0, $length);
        }

        $password = generatePassword($length);

        echo "La tua password è: " . $password;
        ?>
    </main>
</body>

</html>