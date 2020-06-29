<?php

use src\repository\ClientPhysiqueRepository;

include '../../entity/ClientPhysique.php';
include '../repository/ClientPhysiqueRepository.php';

function addCP($clientP){
    $clphysiqueRepos=new ClientPhysiqueRepository();

    $result=$clphysiqueRepos->add($clientP);

    if($result){
        echo 'Client physique ajoute!...';
    }

}


