<header>
    <nav>
    <!-- Leest vanaf Mythica folder -->
        <?php
        $basePath = '/Mythica/'; // Set this to your project root folder or '/' if at root
        ?>

        <a href="<?php echo $basePath; ?>index.php">
            <h1 id="HeaderOne_H1">Mythica</h1>
        </a>

        <!-- Inlogknop en Overzicht met wezens knop -->
        <div id="HeaderTwo_H2-LoginButtons">

            <!-- Inloggen -->
            <a href="<?php echo $basePath; ?>pages/login.php">
                <h2 class="ButtonH2">Login</h2>
            </a>

            <!-- Registreren -->
            <a href="<?php echo $basePath; ?>pages/register.php">
                <h2 class="ButtonH2">Register</h2>
            </a>

            <!-- Overzicht met wezens -->
            <a href="<?php echo $basePath; ?>pages/overzicht.php">
                <h2 class="ButtonH2">Overzicht Wezens</h2>
            </a>
        </div>
    </nav>
</header>