<!DOCTYPE html>
<html lang="en">

<!-- 
Auteur: Dewi
Datum: 02-6-2025 
Omschrijving: Praktijk Projectopdracht T04
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mythica</title>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/login.css">

</head>

<body>

    <?php
    include "../includes/header.php"
    ?>

    <main>

        <!-- Hier ga je inloggen, email addres en wachtwoord -->
        <form action="./form-process.php" method="post">
            <h2 id="h2-login-p">Welcome to Mythica!</h2>


            <label for="email">&ast;Email adress</label>
            <input type="email" id="email" name="name" placeholder="email"><br><br>

            <label for="password">&ast;Password:</label>
            <input type="password" id="password" name="email" placeholder="password"><br><br>

            <input type="submit" value="Log in">
        </form>

    </main>

    <?php
    include "../includes/footer.php"
    ?>

</body>

</html>