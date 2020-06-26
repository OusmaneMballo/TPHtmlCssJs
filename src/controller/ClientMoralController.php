<?php
include '../../entity/ClientMoral.php';
include '../repository/ClientMoralRepository.php';
use entity\ClientMoral;
use src\repository\ClientMoralRepository;
function add($clientM)
{
    $clmoralRepos=new ClientMoralRepository();

    $clientM->setEmail('mballo@gmail.com');
    $clientM->setLogin('mballoS');
    $clientM->setNom('mballoS');
    $clientM->setAdresse('Parcelles');
    $clientM->setPassword('mballos');
    $clientM->setTelephone('338675564');
    $clientM->setIdentifiant('MS2020');
    $clientM->setRaisonSociale('mballoSoft');
    $result=$clmoralRepos->addcm($clientM);

    if($result){
        echo 'Client moral ajoute!...';
    }
}

if(isset($_POST))
{
    $clientM=new ClientMoral();
    add($clientM);
}