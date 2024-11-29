<?php
session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == "admin") {
    echo "Vous êtes bien connecté en tant qu'admin";
} else {
    header("location: index.php");
}