<?php


namespace entity;


class Compte
{
    private $id;
    private $numero;
    private $cle_rib;
    private $agence;
    private $solde;
    private $etat;
    private $clt_physique;
    private $clt_moral;
    private $type;
    private $date_crea;
    private $date_ferm;
    private $date_ouver;

    /**
     * Compte constructor.
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getCleRib()
    {
        return $this->cle_rib;
    }

    /**
     * @param mixed $cle_rib
     */
    public function setCleRib($cle_rib)
    {
        $this->cle_rib = $cle_rib;
    }

    /**
     * @return mixed
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * @param mixed $agence
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getCltPhysique()
    {
        return $this->clt_physique;
    }

    /**
     * @param mixed $clt_physique
     */
    public function setCltPhysique($clt_physique)
    {
        $this->clt_physique = $clt_physique;
    }

    /**
     * @return mixed
     */
    public function getCltMoral()
    {
        return $this->clt_moral;
    }

    /**
     * @param mixed $clt_moral
     */
    public function setCltMoral($clt_moral)
    {
        $this->clt_moral = $clt_moral;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDateCrea()
    {
        return $this->date_crea;
    }

    /**
     * @param mixed $date_crea
     */
    public function setDateCrea($date_crea)
    {
        $this->date_crea = $date_crea;
    }

    /**
     * @return mixed
     */
    public function getDateFerm()
    {
        return $this->date_ferm;
    }

    /**
     * @param mixed $date_ferm
     */
    public function setDateFerm($date_ferm)
    {
        $this->date_ferm = $date_ferm;
    }

    /**
     * @return mixed
     */
    public function getDateOuver()
    {
        return $this->date_ouver;
    }

    /**
     * @param mixed $date_ouver
     */
    public function setDateOuver($date_ouver)
    {
        $this->date_ouver = $date_ouver;
    }

}