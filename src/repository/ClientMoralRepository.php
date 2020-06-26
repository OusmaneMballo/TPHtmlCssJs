<?php


namespace src\repository;

include 'DbAccess.php';

use entity\ClientMoral;

class ClientMoralRepository
{
    private $dbaccess;

    /**
     * ClientMoralRepository constructor.
     */
    public function __construct()
    {
        $this->dbaccess=new DbAccess();
    }

    /**
     * @param ClientMoral $clientMoral
     * @return bool
     * la fonction permet d'ajouter un client moral
     */
    public function addcm(ClientMoral $cm)
    {
        $requete="INSERT INTO `client_moral`(`id`, `raison_social`,
                                `nom`, `adresse`, `numidentf`, `telephone`, 
                                `email`, `login`, `password`)
                    VALUES (null ,? ,? ,? ,? ,? ,? ,? ,?)";


        $prepare=$this->dbaccess->MAJ($requete);
        if($prepare->execute(array($cm->getRaisonSociale(),$cm->getNom(),
            $cm->getAdresse(),$cm->getIdentifiant(),$cm->getTelephone(),
            $cm->getEmail(), $cm->getLogin(), $cm->getPassword())))
        {
            return true;
        }
        return false;
    }

    /**
     * @return mixed
     * return un tableau de client moral.
     */
    public  function findAll()
    {
        $requete="SELECT * FROM client_moral;";
        return $this->dbaccess->selection($requete);
    }
}