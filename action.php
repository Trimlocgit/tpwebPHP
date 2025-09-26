<?php
    $filename = "data.csv";
    $fp = fopen($filename, "a");



if (isset( $_POST['OK'], $_POST['nom'], $_POST['prenom'], $_POST['age'])) {


    if (is_string($_POST['nom']) and is_string($_POST['prenom']) and is_numeric($_POST['age']) and $_POST['age'] >= 0) {



        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];

        $result = array($nom, $prenom, $age);

        fputcsv($fp, $result);
        fclose($fp);
        $_POST['nom'] = null;
        $_POST['prenom'] = null;
        $_POST['age'] = null;

    }

}
    include ('lecture.php');

