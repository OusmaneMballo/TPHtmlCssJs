<?php


namespace src\repository;


use PDO;
use PDOException;

class DbAccess
{

    /**
     * DbAccess constructor.
     */
    public function __construct()
    {
    }

    /**
     * function de connexion a la BD.
     */
    public function getConnexion()
    {
        $Dbname="bp_groupe2";
        $host="localhost";
        $user="root";
        $password="";
        $dsn="mysql: host=".$host.";dbname=".$Dbname;
        $db=null;
        try{
            $db=new PDO($dsn,$user,$password);
        }catch(PDOException $e){
            echo "erreur de connection";
        }
        return $db;
    }

    /**
     * function d'execution des requetes de mise a jour
     * Insert,update,delete.
     */
    function MAJ($Requete)
    {
        $db=$this->getConnexion();
        return $db->prepare($Requete);
    }

    /**
     * function d'execution des requetes de lecture
     * select.
     */
    function selection($Requete)
    {
        $db=$this->getConnexion();
        return $db->query($Requete);
    }
}