<?php
$title = "Formulaire de connexion";
include("header.php");
?>
<form action="page2.php" method="post">
    <label for="login">Identifiant</label>
    <input type="text" id="login" name="login">
    <br>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password">
    <br>
    <button type="submit">Se connecter</button>
</form>
<?php include("footer.php"); ?>