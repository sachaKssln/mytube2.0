<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Page servant pour avoir le pluspart des fonction utilisés dans les pages du site
*/
include_once './fonction/databaseConnection.php';
$sql = "";
//fonction pour upload une vidéo via un insert
function uploadVideo($videoPath, $videoName){
    global $bdd;
    $sql = "INSERT INTO video (videoURL, videoName) VALUES (?,?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$videoPath, $videoName]);
}

//cette fonction est une fonction de base pour aller chercher l'intégralité des vidéos dans l'ordre d'upload

//(nb) à changer pour permetre un maximum dse vidéo limité pour ne pas surcharger la page
function fetchVideo(){
    global $bdd;
    $reponse = $bdd->query('SELECT * FROM video');
    //récupération de chaque ligne de la BD
    while ($donnee = $reponse->fetch()) {
        echo '<div onclick="location.href=\'./video/'.$donnee['videoURL'].'\';">';
        echo '<a href="./video/'.$donnee['videoURL'].'">'.$donnee['videoName'].'</a>';
        echo "</div>";
    }
}

?>