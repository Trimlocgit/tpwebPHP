<?php
session_start(); //A mettre sur tt les page web accessible par session
if(isset($_SESSION["login"])) {
    echo "Bonjour " . $_SESSION["login"];
    echo "<br>";
    echo "<a href='logout.php'>logout</a>";
} else { //si on ne met pas de else alors cela affiche une page vide
    header("location: login.php?error");
}
