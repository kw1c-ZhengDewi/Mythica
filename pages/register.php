<?php
global $conn;
include "../database/connectionRegister.php";
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

        <!-- Leg straks uit wat de code in styles doen, even styles op pauze zetten -->
<!--    <link rel="stylesheet" href="--><?php //= dirname($_SERVER['PHP_SELF']) ?><!--/../styles/stylesheet.css">-->
<!--     <link rel="stylesheet" href="--><?php //= dirname($_SERVER['PHP_SELF']) ?><!--/../styles/register.css">-->

    </head>
    <body>

    <?php
    include "../includes/header.php"
    ?>

    <main>
        <!-- Hier ga je inloggen, email addres en wachtwoord -->
        <div id="form-div">
            <h2 id="h2-login">Welcome to Mythica!</h2>
            <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <!-- Email adres invoeren -->
                <label for="email">&ast;Email adres</label>
                <input type="email" id="email" name="email" placeholder="type in your email" required><br><br>

                <!-- Wachtwoord invoeren -->
                <label for="password">&ast;Password:</label>
                <label for="pass"></label><input type="password" id="pass" name="pass" placeholder="type in your password" required><br><br>

                <input type="submit" id="btn" value="register">
            </form>
        </div>

    </main>

    <?php
    include "../includes/footer.php"
    ?>

    </body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "mythica"); // 👈 Update DB name

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email) && empty($password)) {
        echo "Please fill in all the fields";
    }
    elseif (empty($email)) {
        echo "Please enter a valid email address";
    }

    elseif (empty($password)) {
        echo "Please enter a password";
    }
    else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (User_Email, User_Password) VALUES ('$email', '$hash')";

        try {
            mysqli_query($conn, $sql);
            echo "You are now registered!";
        } catch (mysqli_sql_exception $e) {
            echo "That email is already used";
        }
    }
}

$conn->close(); // 👈 Only close at the very end
?>
