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
    <link rel="stylesheet" type="text/css" href="/styles/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="/styles/home.css">

</head>

<body>

    <?php
    include "./includes/header.php" // Dit is de header, daarin komen de twee navigaties te staan. Inloggen en Overzicht Wezens 
    ?>

    <main>
        <!-- Hierin zijn er 3 items getoont op de startpagina, 3 Mythische wezen voorbeelden in een overzichtelijk layout -->
        <div id="MythicaPageOne">

            <!-- Plaatje met een visuele afbeelding -->
            <img id="MythicaPageOne-Image" alt="Different Creatures at the startpage" src="./images/Startpage-Creatures.png">

            <!-- Een soort slogan voor deze website -->
            <h3 class="tagline">
                Know everything about your favorite beast ,
                <br><br>
                <span class="H3-Cursive">Mythica, the encyclopedia</span>
            </h3>
        </div>
    </main>

    <?php
    include "./includes/footer.php" // Dit is de footer, daarin staat op de huidige datum en wanneer de gebruiker is ingelogd 
    ?>
</body>

</html>