<?php
    function connecter($database, $param){
        include_once($param.".inc.php");
        $dns = "mysql:host=".HOST.";dbname=".$database.";charset=UTF8";
        $user = USER;
        $password = PASS;
        //Verifier la connexion avec MYSQL:
        try{
            //Lorsque la connexion a reussi;
            $connexion = new PDO($dns, $user, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connexion;
        }catch(PDOException $except){
            //Lorsque la connexion a echoué;
            echo "Echec de la connexion: ".$except->getMessage();
            return false;
            exit();
        }
    }
?>