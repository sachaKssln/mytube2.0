<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Cette page est dédié à l'upload de vidéo 
sans pour autant faire de fonction pour des questions de facilité
et est donc intimement lié à la page upload.php

(nb) devra être changé au fur et à mesure des options(miniature, description etc)
*/

include_once './fonction/databaseConnection.php';
include_once './fonction/controller.php';
//récupération des variables php
$videoName = $_POST['videoName'];


//code récupérer et en grande proportions modifier du w3cSchool

//création des variables
$uploadOk = 1;
$target_dir = "./video/";
$IDVideo = uniqid();

//mise en cache de l'extension
$imageFileType = ".".strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));


// ceci permet de dire où sera la video ainsi que son nom dans le sytème de fichier du serveur
$videoURL = $IDVideo.$imageFileType;

$target_file = $target_dir.$videoURL;


// Si pour la moindre erreur le fichier exite déjà, l'uload est annulée
//(nb) normalement, cette fonction n'est qu'une sécurité, le nom de vidéo est sensé être unique
if (file_exists($target_file)) {
  echo "Une erreur s'est produite lors de l'Upload, veuillez réessayer";
  $uploadOk = 0;
}

// Fonction pour vérifier la taille du fichier

//(nb) ne pas supprimer
// if ($_FILES["fileToUpload"]["size"] > 500000000000000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }


// On vérifie si l'upload est possible
if ($uploadOk == 0) {
  echo "Une erreur s'est produite lors de l'Upload.";
// Si tout est confirmé, tentavive d'upload du fichier
}
else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "La vidéo est en cours d'upload";
    uploadVideo($videoURL, $videoName);
  }
  else {
    echo "Une erreur s'est produite lors de l'Upload.";
  }
}

?>