<?php

use entity\ClientMoral;
use entity\ClientPhysique;

include 'ClientPhysiqueController.php';
include 'ClientMoralController.php';

/*
 * Ajout d'un client
 * */
if(isset($_POST) && !empty($_POST))
{
    /*
     *
     * On test pour savir si c'est un client
     * moral ou un client physique
     *
     * */
    if($_POST['typeclient']==2)
    {
        //Cas d'un client moral

        $clientM=new ClientMoral();
        $clientM->setEmail($_POST['emailCM']);
        $clientM->setLogin($_POST['loginCM']);
        $clientM->setNom($_POST['nomCM']);
        $clientM->setAdresse($_POST['adresseCM']);
        $clientM->setPassword($_POST['passwdCM']);
        $clientM->setTelephone('771979043');
        $clientM->setIdentifiant('');
        $clientM->setRaisonSociale($_POST['raisonSocialCM']);
        addCM($clientM);
    }
    else{
        //Cas d'un client physique

        $clientP=new ClientPhysique();

        $clientP->setEmail($_POST['emailcp']);
        $clientP->setLogin($_POST['logincp']);
        $clientP->setNom($_POST['nomcp']);
        $clientP->setPrenom($_POST['prenomcp']);
        $clientP->setAdresse($_POST['adressecp']);
        $clientP->setPassword($_POST['passwdcp']);
        $clientP->setTelephone($_POST['telephonecp']);
        $clientP->setProfession($_POST['professioncp']);
        $clientP->setNci($_POST['cnicp']);
        if($_POST['statutcp']==1)
        {
            //Cas d'un salarier

            $clientP->setType($_POST['statutcp']);
            $clientP->setSalaire($_POST['salairecp']);
            if($_POST['employeur']!=3)
            {
                $clientP->setClMoral($_POST['employeur']);
            }
            else{
                //Cas d'un nouveau employeur d'un nouveau salarier
                $clientM=new ClientMoral();
                $clientM->setEmail($_POST['emailCM']);
                $clientM->setLogin($_POST['loginCM']);
                $clientM->setNom($_POST['nomCM']);
                $clientM->setAdresse($_POST['adresseCM']);
                $clientM->setPassword($_POST['passwdCM']);
                $clientM->setTelephone($_POST['telephoneCM']);
                $clientM->setIdentifiant($_POST['identifiantCM']);
                $clientM->setRaisonSociale($_POST['raisonSocialCM']);
                $id=addCM($clientM);
                $clientP->setClMoral($id);
            }
        }
        addCP($clientP);
    }

}
