<?php
    function moyenne($x, $n)
    {
        $sum = 0;
        for ($i = 0; $i < count($n); $i++){
            $sum += $x[$i] * $n[$i];
        }
        return $sum/array_sum($n);
    }

    function auCarre($n)
    {
        return $n**2;
    }


    function variance($x, $n)
    {

        $moyenne = moyenne($x, $n);
        $somme_ecarts = 0;

        for ($i = 0; $i < count($x); $i++) {
            $ecart = $x[$i] - $moyenne;
            $somme_ecarts += $n[$i] * ($ecart * $ecart);
        }
        return $somme_ecarts/array_sum($n);
    }

    function ecartType($x, $n)
    {
        return sqrt(variance($x, $n));
    }