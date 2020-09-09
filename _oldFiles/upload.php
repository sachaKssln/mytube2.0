<?php
/*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Page servant pour lûpload de vidéo
*/

//Permetant de faire l'upload si les infos néssésaire ont été mise
//(nb) les variables devront être changé afin de les nettoyer par sécurité
if (isset($_POST["submit"]) && $_FILES["fileToUpload"] && $_POST["videoName"]) {
  include_once './fonction/uploadFonc.php';
}
?>
<!doctype html>
<!--
Page servant pour l'upload de vidéo
  -->
<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>Mytube - Upload</title>
  <meta name="description" content="Mytube - Upload">
  <meta name="author" content="Kissling Sacha">

  <link rel="stylesheet" href="css/mainPage.css?v=1.0">
  <link rel="stylesheet" href="css/upload.css?v=1.0">
</head>

<body>
<h1 id="logoSite">
  <a href="./">
  <img src="./img/logoMyTube.png" alt="Stack Overflow" />
</a>
</h1>
<nav>
<a href="./" id="mainMenuLink">Menu</a>
<a href="./upload.php" id="uploadLink">Mettre en ligne</a>
</nav>
    <form action="#" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>
            <label for="fileToPload">Choisir une vidéo à Upload:</label>
          </td>
          <td>
            <input type="file" name="fileToUpload" id="fileToUpload">
          </td>
        </tr>
        <tr>
          <td>
            <label for="videoName">Nom de la video:</label>
          </td>
          <td>
            <input type="text" name="videoName" id="videoName" placeholder="Nom de la Video">
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            <input type="submit" id="submit" value="Mettre en ligne" name="submit">
          </td>
        </tr>
      </table>
      </form>
</body>
</html>
