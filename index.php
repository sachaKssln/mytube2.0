<?php
session_start(); 
include 'vues/header.php';
include 'vues/navbar.php';
include 'modeles/monPdo.php';
include 'modeles/Video.php';

$uc = empty($_GET['uc']) ? "accueil" : $_GET['uc'];
switch ($uc) {
    case 'accueil':
        include('vues/accueil.php');
    break;
    case 'video':
        include('controllers/videoController.php');
    break;
}
include 'vues/footer.php';
?>
