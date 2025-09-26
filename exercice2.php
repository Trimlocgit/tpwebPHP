<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>TP1 Exercie 2</title>
        <meta charset="UTF-8">
        <link href="css/style2.php" rel="stylesheet" type="text/css">
        <style>
            th{
                background-color: <?php echo $_POST['couleur']; ?>;
            }
        </style>
    </head>
    <body>
        <h1>TP1 Exercie 2</h1>
        <h2>Caractéristiques du damier : </h2>
        <form action="" method="POST">
            <label>Nombre de ligne :
                <input type="number" name="ligne" value="<?php if(isset($_POST['ligne'])){echo $_POST['ligne'];} ?>"></label>
            <br>
            <label>Nombre de colonne :
                <input type="number" name="colonne" value="<?php if(isset($_POST['colonne'])){echo $_POST['colonne'];} ?>"></label>
            <br>
            <label>Couleur :
            <input type="color" name="couleur" value="<?php if(isset($_POST['couleur'])){echo $_POST['couleur'];} ?>"></label>
            <br>
            <input type="submit" value="Afficher" name="OK">
        </form>
        <hr>
        <h2>Damier : </h2>
        <table>
            <?php

                if (isset($_POST["OK"], $_POST["colonne"], $_POST["ligne"])){
                    $ligne = $_POST["ligne"];
                    $colonne = $_POST["colonne"];

                    for($i = 0; $i < $ligne; $i++){
                        echo "<tr>";
                        for($j = 0; $j < $colonne; $j++){
                            if(($j+$i)%2 == 0){
                                echo "<th>";
                                echo "&nbsp;";
                                echo "</th>";
                            }else{
                                echo "<td>";
                                echo "&nbsp;";
                                echo "</td>";
                            }
                        }
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>


