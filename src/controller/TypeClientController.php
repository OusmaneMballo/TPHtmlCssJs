<?php
include '../../entity/TypeClient.php';
include '../repository/TypeClientRepository.php';
use \src\repository\TypeClientRepository;

function listTypeClient()
{
    $type_clt_repos=new TypeClientRepository();
    return $type_clt_repos->findAll();
}

