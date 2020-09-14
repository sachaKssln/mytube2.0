<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Ce fichier est un controller, servant à gérer les vidéos
*/
$action=$_GET['action'];
switch ($action) {
    case 'list':
        $lesVideos=Video::findAll();
        include('vues/videoList.php');
        break;    
    default:
    case 'upload':
        include('vues/formVideo.php');
        break;
    case 'valideForm':
        //ces lignes sont utilisés afin de confirmer l'envoi d'une vidéo

        //création des variables
        $video = new Video();
        $targetDir = "./videos/";
        $targetDirVideo = "videos/";
        $targetDirImg = "imgVideos/";

        $uploadOk = 1;

        //création d'un id unique
        $IDVideo = uniqid();
        $video->setUrl($IDVideo);

        $video->setName($_POST['videoName']);
        
        //nettoyage afin de récupérer l'extension de la vidéo et de l'image
        $fileExtensionVideo = ".".strtolower(pathinfo(basename($_FILES["videoFile"]["name"]), PATHINFO_EXTENSION));
        $video->setVideoExtension($fileExtensionVideo);

        $fileExtensionImage = ".".strtolower(pathinfo(basename($_FILES["imgFile"]["name"]), PATHINFO_EXTENSION));
        $video->setImgExtension($fileExtensionImage);

        //mise en cache dans une variables des fichier de destination de l'image et de la video
        $targetFileVideo = $targetDir.$targetDirVideo.$IDVideo;
        $targetFileImg = $targetDir.$targetDirImg.$IDVideo;

        //verification de si les fichier existe
        if (file_exists($targetFileVideo)) {
            $uploadOk = 0;
            echo "erreur 1";
            echo $targetDir.$targetDirVideo;
        }
        if (file_exists($targetFileImg)) {
            $uploadOk = 0;
            echo "erreur 1.5";
            echo $targetDir.$targetDirImg;
        }
        
        // si il n'y a oas eu d'erreur, mise en ligne des fichiers
        if ($uploadOk != 0) {
            if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $targetFileVideo.$fileExtensionVideo)) {
                if (move_uploaded_file($_FILES["imgFile"]["tmp_name"], $targetFileImg.$fileExtensionImage)) {


                    $nb=Video::add($video);
                    header('location: index.php?uc=video&action=list');
                }
            }
        }
        else {
            echo "Code Erreur 2";
        }
    break;
}
?>