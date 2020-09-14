<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Ce fichier est un index permettant d'afficher toute les pages à partir d'un fichier
*/
session_start(); 
include 'vues/header.php';
include 'vues/navbar.php';
include 'modeles/monPdo.php';
include 'modeles/Video.php';

$uc = empty($_GET['uc']) ? "home" : $_GET['uc'];
switch ($uc) {
    case 'home':
        include('vues/home.php');
    break;
    case 'video':
        include('controllers/videoController.php');
    break;
}
include 'vues/footer.php';
?>
