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
<?php include ('footer.html'); ?>


