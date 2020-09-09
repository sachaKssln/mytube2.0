<?php
$action=$_GET['action'];
switch ($action) {
    case 'list':
        $lesVideos=Video::findAll();
        include('vues/video.php');
        break;
    
    default:
        # code...
        break;
}
?>