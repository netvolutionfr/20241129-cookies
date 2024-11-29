<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

if ($login == "admin" && $password == "admin") {
    $_SESSION['login'] = "admin";
    echo "C'est bon, vous êtes connecté";
} else {
    echo "Pas bon";
}