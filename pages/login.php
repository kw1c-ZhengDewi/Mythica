<?php
include "../database/connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<!-- 
Auteur: Dewi Hu
Datum: 02-6-2025 
Omschrijving: Praktijk Projectopdracht T04
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mythica</title>

    <!-- todo: Leg straks uit wat de code in styles doen -->
    <link rel="stylesheet" href="<?= dirname($_SERVER['PHP_SELF']) ?>/../styles/stylesheet.css">
    <link rel="stylesheet" href="<?= dirname($_SERVER['PHP_SELF']) ?>/../styles/login.css">

</head>

<body>

    <?php
    include "../includes/header.php"
    ?>

    <main>
        <!-- Hier ga je inloggen, email addres en wachtwoord -->
        <div id="form-div">
            <h2 id="h2-login">Welcome to Mythica!</h2>
            <form name="form" action="../database/connection.php" method="post">
                <!-- Email adres invoeren -->
                <label for="email">&ast;Email adress</label>
                <input type="email" id="email" name="name" placeholder="type in your email"><br><br>

                <!-- Wachtwoord invoeren -->
                <label for="password">&ast;Password:</label>
                <label for="pass"></label><input type="password" id="pass" name="pass" placeholder="type in your password"><br><br>

                <input type="submit" id="btn" value="Log in">
            </form>
        </div>

    </main>

    <?php
    include "../includes/footer.php"
    ?>

</body>

</html>