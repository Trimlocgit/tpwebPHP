<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>TP1 Exercice 1</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>TP1 Exercice 1</h1>
        <?php
            require("res/debug.php");
            require("res/stats.php");

            $x = array(1, 2, 3, 4, 5);
            $n = array(1, 1, 1, 1, 1);

        ?>
        <h2>Valeurs : </h2>
        <table>
            <tr>
                <th>x</th>
                <?php
                    foreach ($x as $value){
                       echo "<td>";
                       echo $value;
                       echo "</td>";
                    }
                ?>
            </tr>
            <tr>
                <th>n</th>
                <?php
                    foreach ($n as $value){
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                    }
                ?>
            </tr>
        </table>
        <hr>
        <h2>Calcul : </h2>
        <form action="" method="POST">
            <select name="typeCalcul" id="choix">
                <option value="Moyenne">Moyenne</option>
                <option value="Variance">Variance</option>
                <option value="EcartType">Ecart-type</option>
            </select>
            <input type="submit" name="OK" value="Calculer">
        </form>
        <br>
        <?php
            if(isset($_POST["OK"], $_POST["typeCalcul"])){
                $choixCalcul = $_POST["typeCalcul"];
                switch ($choixCalcul){
                    case 'Moyenne':
                        echo "Résultat Moyenne : ";
                        echo moyenne($x, $n);
                        break;
                    case 'Variance':
                        echo "Résultat variance : ";
                        echo variance($x, $n);
                        break;
                    case 'EcartType':
                        echo "Résulat Ecart-type : ";
                        echo ecartType($x ,$n);
                        break;
                }
            }
        ?>
    </body>
</html>



