<?php
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

        $video = new Video();
        $targetDir = "./videos/";
        $targetDirVideo = "videos/";
        $targetDirImg = "imgVideos/";

        $uploadOk = 1;

        $IDVideo = uniqid();
        $video->setUrl($IDVideo);

        $video->setName($_POST['videoName']);
        
        $fileExtensionVideo = ".".strtolower(pathinfo(basename($_FILES["videoFile"]["name"]), PATHINFO_EXTENSION));
        $video->setVideoExtension($fileExtensionVideo);

        $fileExtensionImage = ".".strtolower(pathinfo(basename($_FILES["imgFile"]["name"]), PATHINFO_EXTENSION));
        $video->setImgExtension($fileExtensionImage);

        $targetFileVideo = $targetDir.$targetDirVideo.$IDVideo;
        $targetFileImg = $targetDir.$targetDirImg.$IDVideo;

        if (file_exists($targetFileVideo)) {
            $uploadOk = 0;
            echo "erreur 1";
            echo $targetDir.$targetDirVideo;
        }


        if ($uploadOk != 0) {
            if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $targetFileVideo.$fileExtensionVideo)) {
                if (move_uploaded_file($_FILES["imgFile"]["tmp_name"], $targetFileImg.$fileExtensionImage)) {


                    $nb=Video::add($video);
                }
            }
        }
        else {
            echo "Code Erreur 2";
        }
        header('location: index.php?uc=video&action=list');
    break;
}
?>