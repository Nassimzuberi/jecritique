<?php

namespace Nassim\Php\Traits;

trait Likeable{

    private $like;
    private $dislike;
    private $retweet;


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


    public function like($id){
        $pdo = $this->getDb();
        $req = $pdo->query("UPDATE {$this->class_name} set {$this->class_name}.like = {$this->class_name}.like + 1 WHERE id = {$id}");
        return $req;
    }

    public function unlike($id){
        $pdo = $this->getDb();
        $req = $pdo->query("UPDATE {$this->class_name} set {$this->class_name}.like = {$this->class_name}.like - 1 WHERE id = {$id}");
        return $req;
    }
    public function dislike($id){
        $pdo = $this->getDb();
        $req = $pdo->query("UPDATE {$this->class_name} set {$this->class_name}.dislike = {$this->class_name}.dislike + 1 WHERE id = {$id}");
        return $req;
    }
    public function undislike($id){
        $pdo = $this->getDb();
        $req = $pdo->query("UPDATE {$this->class_name} set {$this->class_name}.dislike = {$this->class_name}.dislike - 1 WHERE id = {$id}");
        return $req;
    }
}