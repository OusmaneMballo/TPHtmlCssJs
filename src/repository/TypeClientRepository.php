<?php


namespace src\repository;
include 'DbAccess.php';

class TypeClientRepository
{
    private $dbaccess;

    /**
     * TypeClientRepository constructor
     */
    public function __construct()
    {
        $this->dbaccess = new DbAccess();
    }

    public function findAll()
    {
        $requete="SELECT * FROM type_client;";
        return $this->dbaccess->selection($requete);
    }


}