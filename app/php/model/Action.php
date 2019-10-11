<?php

namespace app\php\model;

class Action{
    private $id;
    private $idUser;
    private $idAction;
    private $libAction;
    private $libObjet;
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
    public function getIdAction()
    {
        return $this->idAction;
    }

    /**
     * @param mixed $idAction
     */
    public function setIdAction($idAction)
    {
        $this->idAction = $idAction;
    }

    /**
     * @return mixed
     */
    public function getLibAction()
    {
        return $this->libAction;
    }

    /**
     * @param mixed $libAction
     */
    public function setLibAction($libAction)
    {
        $this->libAction = $libAction;
    }

    /**
     * @return mixed
     */
    public function getLibObjet()
    {
        return $this->libObjet;
    }

    /**
     * @param mixed $libObjet
     */
    public function setLibObjet($libObjet)
    {
        $this->libObjet = $libObjet;
    }


}