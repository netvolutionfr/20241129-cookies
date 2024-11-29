<?php
$login = $_POST['login'];
$password = $_POST['password'];

if ($login == "admin" && $password == "admin") {
    $_SESSION['login'] = "admin";
}
$title = "Formulaire de connexion";
include("header.php");

session_start();


if ($login == "admin" && $password == "admin") {
    echo "C'est bon, vous êtes connecté";
} else {
    echo "Pas bon";
}

include("footer.php");