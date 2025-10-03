<?php
function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if(isset($_POST["OK"], $_POST["login"], $_POST["mdp"])){
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];

    $fp = fopen("identifiant.csv", "r");

    while(!feof($fp)){
        $compte = fgetcsv($fp, 1024, ";");
        if($login == $compte[0] && $mdp == $compte[1]){
            session_start();
            $_SESSION["login"] = $login;
            fclose($fp);
            $fp = fopen("log.csv", "a");

            $result = array($login, date("Y-m-d H:i:s"), $_SERVER['HTTP_CLIENT_IP'], $_SERVER['REMOTE_ADDR']);
            fputcsv($fp, $result, ";");
            fclose($fp);
            header("location: admin.php");
        }
    }
    fclose($fp);
    header("location: login.php?error");

}
