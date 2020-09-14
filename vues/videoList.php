<div class="mainContainer">

    <?php
    /*
Projet: Mytube
Auteur: Kissling Sacha
Desc: Ce fichier est une vue pour afficher la liste des vidéo
*/
  //création des variables
    $number = 1;
    $maxVideoPerRow = 3;
    //cette fonction va chercher toute les vidéos pour les mettre dans une liste
      foreach ($lesVideos as $video) {
        if ($number == 1) {
          echo '<div class="row">';
        }
        echo '
          
        <div class="col-md-4">
          <a href="videos/videos/'.$video->getVideoUrl().'">
            <img src="videos/imgVideos/'.$video->getImageUrl().'" class="img-fluid" alt="descriptionImageForTheVideo">
            <p>'.$video->getName().'</p>
          </a>
        </div>
        ';
        if ($number >= $maxVideoPerRow) {
          echo "</div>";
          $number = 0;
        }
        $number++;
    }
    if ($number < $maxVideoPerRow) {
      echo "</div>";
    }
    ?>
</div>