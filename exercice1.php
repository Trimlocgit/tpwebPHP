<!doctype html>
<html lang="fr">
    <head>
        <title>TP1 Web</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet"/>
    </head>
    <body>
        <h1>Tableau :</h1>
        <?php
            require("res/debug.php");
            require("res/stats.php");
            $x = array(1, 3, 4, 7, 9, 10);
            $n = array(2, 4, 1, 3, 5, 1);
            ?>
        <table>
            <tr>
                <th>x</th>
                <?php
                foreach ($x as $value) {
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                }
                ?>
            </tr>
            <tr>
                <th>n</th>
                <?php
                foreach ($n as $value) {
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                }
                ?>
            </tr>
        </table>
        <hr>
        <h2>Calcul :</h2>
        <form action='' method='post'>
                <select name='typeCalcul' id="choix">
                    <option value='Moyenne'>Moyenne</option>
                    <option value='Variance'>Variance</option>
                    <option value='EcartType'>Ecart-type</option>
                </select>
                <br>

                <input id='buttonOK' type='submit' name='OK' value='Calculer'>
        </form>
        <?php

            if(isset($_POST['OK'], $_POST['typeCalcul'])){
                $choixCalcul =  $_POST['typeCalcul'];
                switch ($choixCalcul){
                    case 'Moyenne':
                        echo "Résultats de la moyenne : ";
                        echo moyenne($x, $n);
                        break;
                    case 'Variance':
                        echo "Résultats de la variance : ";
                        echo variance($x, $n);
                        break;
                    case 'EcartType':
                        echo "Resultats de l'ecart-type : ";
                        echo ecart_type($x, $n);
                        break;
                }
            }
        ?>

    </body>
</html>
