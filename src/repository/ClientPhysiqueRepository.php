<?php


namespace src\repository;

include 'DbAccess.php';
use entity\ClientPhysique;

class ClientPhysiqueRepository
{
    private $dbaccess;

    /**
     * ClientPhysiqueRepository constructor.
     */
    public function __construct()
    {
        $this->dbaccess=new DbAccess();
    }

    /**
     * La fonction permet d'ajouter un client physique dans la BD
     * @param ClientPhysique $cltph
     * @return bool
     */
    public function add(ClientPhysique $cltph)
    {
        $requete="INSERT INTO `client_physique`(`id`, `nom`, `prenom`,
                    `telephone`, `salaire`, `adresse`, `profession`,
                     `login`, `password`, `email`, `nci`, `typeclt_id`,
                      `cltmoral_id`) 
                      VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)";
        $prepared=$this->dbaccess->MAJ($requete);

        return $prepared->execute(array($cltph->getNom(),$cltph->getPrenom(),
            $cltph->getTelephone(),$cltph->getSalaire(),$cltph->getAdresse(),
            $cltph->getProfession(),$cltph->getLogin(),$cltph->getPassword(),
            $cltph->getEmail(),$cltph->getNci(),$cltph->getType(),
            $cltph->getClMoral()));

    }

}