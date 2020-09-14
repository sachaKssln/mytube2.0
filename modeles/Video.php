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
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
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
     * Set the value of imgExtension
     *
     * @return  self
     */ 
    public function setImgExtension($imgExtension)
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
     * Set the value of videoExtension
     *
     * @return  self
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
     * Set the value of name
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
    public function add(Video $video){
        $req=MonPdo::getInstance()->prepare("insert into videos(url, name, imgExtension, videoExtension) values(':url', ':name', ':imgExtension', ':videoExtensions')");
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


?>