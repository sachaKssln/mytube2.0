<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Page servant pour le visionnage de vidéo
*/
    include_once './fonction/controller.php';
?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Mytube</title>
  <meta name="description" content="Mytube">
  <meta name="author" content="Kissling Sacha">

  <link rel="stylesheet" href="css/mainPage.css">

</head>

<body>
<h1 id="logoSite">
  <a href="#">
  <img src="./img/logoMyTube.png" alt="Stack Overflow" />
</a>
</h1>
<nav>
<a href="#" id="mainMenuLink">Accueil</a>
<a href="./upload.php" id="uploadLink">Mettre en ligne</a>
</nav>
  <div id="videoList">
    <?php
        fetchVideo();
    ?>
  </div>
</body>
</html>