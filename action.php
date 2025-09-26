<?php
    $filename = "data.csv";
    $fp = fopen($filename, "a");



if (isset( $_POST['OK'], $_POST['nom'], $_POST['prenom'], $_POST['age'])) {
    if (is_string($_POST['nom']) and strlen($_POST['nom']) >= 3 and strlen($_POST['nom']) <= 15){
        $nom = $_POST['nom'];
    }
    if (is_string($_POST['prenom']) and strlen($_POST['prenom']) >= 3 and strlen($_POST['prenom']) <= 15){
        $prenom = $_POST['prenom'];
    }

    if (is_int($_POST['age']) and $_POST['age'] >= 0) {
        $age = $_POST['age'];
    }

    $age = $_POST['age'];
    $result = array($nom, $prenom, $age);

    fputcsv($fp, $result);
    fclose($fp);

}

?>
