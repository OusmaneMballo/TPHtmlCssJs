<?php


namespace entity;


class FraiBancaire
{
    private $id;
    private $frai;
    private $compte;
    private $typefrai;

    /**
     * FraiBancaire constructor.
     */
    public function __construct()
    {
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
    public function getFrai()
    {
        return $this->frai;
    }

    /**
     * @param mixed $frai
     */
    public function setFrai($frai)
    {
        $this->frai = $frai;
    }

    /**
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * @param mixed $compte
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }

    /**
     * @return mixed
     */
    public function getTypefrai()
    {
        return $this->typefrai;
    }

    /**
     * @param mixed $typefrai
     */
    public function setTypefrai($typefrai)
    {
        $this->typefrai = $typefrai;
    }

}