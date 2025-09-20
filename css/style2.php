<?php
header("Content-type: text/css; charset: UTF-8");
session_start();

// Variables PHP
$fontSize = "16px";

function getColor() {
    $defaultColor = "#ed0c00";

    print $_POST['couleur'];
    if (isset($_POST['couleur'])) {

        return $_POST['couleur'];
    }

    return $defaultColor;
}

$primaryColor = getColor();
?>


table{
    border-collapse: collapse;
    border: 1px solid white;

}

th{
    background-color: <?php echo $primaryColor ?>;
    padding: 10px;
}

td{
    padding: 10px;
}