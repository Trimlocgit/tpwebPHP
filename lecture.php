<?php include('header.html'); ?>
<title>Lecture</title>
</head>
<body>
<h1>Lecture ecriture d'un fichier CSV</h1>
<h2>Lecture</h2>

<form action="action.php" method="POST">
    <label>Nom :
        <input type="text" name="nom"></label>
    <br>
    <label>Prénom :
        <input type="text" name="prenom"></label>
    <br>
    <label>Age :
        <input type="number" name="age"></label>
    <br>
    <input type="submit" value="Ajouter" name="OK">
</form>
<hr>

<?php

    $filename = "data.csv";
    $fp = fopen($filename, "a");

    if (isset( $_POST['OK'], $_POST['nom'], $_POST['prenom'], $_POST['age'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $result = array($nom, $prenom, $age);

        fputcsv($fp, $result);
        fclose($fp);

    }
?>

<?php
    echo "<table>";
    $fp = fopen($filename, "r");

    while (($resultA = fgetcsv($fp))) {
        echo "<tr>";
        foreach ($resultA as $val) {
            echo "<td>".$val."</td>";

        }
        echo "</tr>";
    }

    echo "</table>";




?>
<hr>
<?php include ('footer.html'); ?>


