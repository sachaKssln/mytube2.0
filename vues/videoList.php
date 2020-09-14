<div class="mainContainer">

    <?php
    $number = 1;
    $maxVideoPerRow = 3;
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