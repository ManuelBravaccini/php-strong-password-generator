<?php
        $length = (int) $_GET['password_length'];

        function generatePassword($length)
        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            return substr(str_shuffle($chars), 0, $length);
        }

        $password = generatePassword($length);

        echo "La tua password è: " . $password;
