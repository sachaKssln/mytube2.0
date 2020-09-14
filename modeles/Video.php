<?php
class Video{
    private $url;

    private $imgExtension;
    private $videoExtension;

    private $name;

    
    public static function findAll() :array
    {
        $req=MonPdo::getInstance()->prepare('Select * from videos');
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Video');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }
    



    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * set l'url de la video
     *
     * @param string $url
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of imgExtension
     */ 
    public function getImgExtension()
    {
        return $this->imgExtension;
    }

    /**
     * set l'extension de l'image
     *
     * @param string $imgExtension
     * @return self
     */
    public function setImgExtension(string $imgExtension)
    {
        $this->imgExtension = $imgExtension;

        return $this;
    }

    /**
     * Get the value of videoExtension
     */ 
    public function getVideoExtension()
    {
        return $this->videoExtension;
    }

    /**
     * set la string de l'extension
     *
     * @param string $videoExtension
     * @return self
     */
    public function setVideoExtension($videoExtension)
    {
        $this->videoExtension = $videoExtension;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set le nom de la video
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getVideoUrl()
    {
        $value = $this->url.$this->videoExtension;
        return $value;
    }

    public function getImageUrl()
    {
        $value = $this->url.$this->imgExtension;
        return $value;
    }
//--------------------------------------------------------------------

    /**
     * Fonction pour ajouter une video
     *
     * @param Video $video video a ajouter
     * @return integer resultat (1 si l'opération a réussi, 0 sinon)
     */
    public static function add(Video $video) :int
    {
        $req=MonPdo::getInstance()->prepare("insert into videos(url, name, imgExtension, videoExtension) values(:url, :name, :imgExtension, :videoExtension)");
        $url=$video->getUrl();
        $req->bindParam(':url', $url);

        $name=$video->getName();
        $req->bindParam(':name', $name);

        $imgExtension=$video->getImgExtension();
        $req->bindParam(':imgExtension', $imgExtension);

        $videoExtension = $video->getVideoExtension();
        $req->bindParam(':videoExtension', $videoExtension);
        $nb=$req->execute();
        return $nb;
    }
}

?>