<?php
include '../../entity/ClientMoral.php';
include '../repository/ClientMoralRepository.php';
use entity\ClientMoral;
use src\repository\ClientMoralRepository;


/**
 * Fonction d'ajout client moral
 * @param $clientM
 */
function addCM($clientM)
{
    $clmoralRepos=new ClientMoralRepository();

    $result=$clmoralRepos->addcm($clientM);

    if($result){
        echo 'Client moral ajoute!...';
    }
}
