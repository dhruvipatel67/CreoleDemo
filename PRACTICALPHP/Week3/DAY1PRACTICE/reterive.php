<?php
session_start();
if (isset($_SESSION["name"]) && isset($_SESSION["email"])) {
    echo "Name : " . $_SESSION["name"] . "<br>";
    echo "Email : " . $_SESSION["email"] . "<br>";
} else {
    echo "No Session found!";
}
