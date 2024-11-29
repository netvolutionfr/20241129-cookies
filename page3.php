<?php
session_start();

$title = "Page réservée";
include("header.php");


if (isset($_SESSION["login"]) && $_SESSION["login"] == "admin") {
    echo "Vous êtes bien connecté en tant qu'admin";
} else {
    header("location: index.php");
}

include("footer.php");