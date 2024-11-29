<?php
session_start();

$title = "Déconnexion";
include("header.php");

$_SESSION["login"] = "";
echo "Vous êtes déconnecté";

include("footer.php");