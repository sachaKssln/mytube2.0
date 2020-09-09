<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Page servant pour le connection de la DB
*/
include_once './fonction/confDB.php';
$bdd;
    try {
        $bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', USERNAME, PASSWORD);
    } catch (\Throwable $th) {
        throw $th;
    }
        
    ?>