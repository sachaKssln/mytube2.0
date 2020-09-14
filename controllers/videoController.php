<?php
$action=$_GET['action'];
switch ($action) {
    case 'list':
        $lesVideos=Video::findAll();
        include('vues/video.php');
        break;    
    default:
    case 'upload':
        include('vues/formVideo.php');
        break;
    case 'valideForm':
        $video = new Video();
    break;
}
?>