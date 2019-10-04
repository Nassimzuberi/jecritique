<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/09/2019
 * Time: 09:49
 */
namespace app\php\model;
class Post
{

    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    private $titre;
    private $source;
    private $link;
    private $idcategorie;
    private $media;
    private $text;
    private $like;
    private $dislike;
    private $retweet;




    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getIdategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setIdcategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param mixed $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param mixed $like
     */
    public function setLike($like)
    {
        $this->like = $like;
    }

    /**
     * @return mixed
     */
    public function getDislike()
    {
        return $this->dislike;
    }

    /**
     * @param mixed $dislike
     */
    public function setDislike($dislike)
    {
        $this->dislike = $dislike;
    }

    /**
     * @return mixed
     */
    public function getRetweet()
    {
        return $this->retweet;
    }

    /**
     * @param mixed $retweet
     */
    public function setRetweet($retweet)
    {
        $this->retweet = $retweet;
    }



    public function __construct(array $donnees){
        $this->dispatch($donnees);

    }
    private function dispatch(array $donnees)
    {
        foreach ($donnees as $key => $val) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($val);
            }
        }
    }

}
