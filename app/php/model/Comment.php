<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/09/2019
 * Time: 09:49
 */
namespace app\php\model;
class Comment
{

    private $id;
    private $idCritique;
    private $idUser;
    private $text;
    private $like;
    private $dislike;
    private $retweet;


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
    public function getIdCritique()
    {
        return $this->idCritique;
    }

    /**
     * @param mixed $idCritique
     */
    public function setIdCritique($idCritique)
    {
        $this->idCritique = $idCritique;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
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




}
