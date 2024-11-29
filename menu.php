<nav>
    <ul>
        <li><a href="index.php">Connexion</a></li>
        <?php
        if (isset($_SESSION["login"]) && $_SESSION["login"] == "admin") {
            ?>
        <li><a href="deconnexion.php">Déconnexion</a></li>
        <li><a href="page3.php">Page réservée</a></li>
        <?php
        }
        ?>
    </ul>
</nav>