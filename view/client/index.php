<?php
include '../layout/header.php';
?>

<!--=========Debut sideBarre============-->
<?php
include '../layout/sidebarre.php';
?>
<!--=========Debut sideBarre============-->

<!--========Contenu du body===========-->
    <article class="content">
        <fieldset>
            <legend>Creation Client</legend>
            <form class="form" onsubmit="return post()" method="post" action="add_client">
                <div>
                    <select name="typeclient" id="typeclient" class="slct selectclt" onchange="typeClient()">
                        <option value="0">--Choix du Type de Client--</option>
                        <option value="1">1- Client Physique</option>
                        <option value="2">2- Client Moral</option>
                    </select>
                </div>
                <div class="formulaire">
                    <div>
                        <fieldset id="cm" hidden>
                            <legend>Client Moral</legend>
                            <div class="row">
                                <label for="nomCM">Nom</label>
                                <input type="text" class="inputcl" id="nomCM" name="nomCM"/>
                                <label for="adresseCM">Adresse</label>
                                <input type="text" class="inputcl" id="adresseCM" name="adresseCM"/>
                            </div>
                            <div class="row">
                                <label for="raisonSocialCM">Raison Social</label>
                                <input type="text" class="inputcl" id="raisonSocialCM" name="raisonSocialCM"/>
                                <label for="emailCM">Email</label>
                                <input type="email" class="inputcl" id="emailCM" name="emailCM"/>
                            </div>
                            <div class="row">
                                <label for="identifiantCM">Identifiant</label>
                                <input type="text" class="inputcl" id="identifiantCM" name="identifiantCM"/>
                                <label for="telephoneCM">Telephone</label>
                                <input type="text" class="inputcl" id="telephoneCM" name="telephoneCM"/>
                            </div>
                            <div class="row">
                                <label for="loginCM">Login</label>
                                <input type="text" class="inputcl" id="loginCM" name="loginCM"/>
                                <label for="passwdCM">PassWord</label>
                                <input type="password" class="inputcl" id="passwdCM" name="passwdCM"/>
                            </div>
                        </fieldset>
                    </div>
                    <div>
                        <fieldset id="cp" hidden>
                            <legend>Client Physique</legend>
                            <div class="row">
                                <label for="nomcp">Nom</label>
                                <input type="text" class="inputcl" id="nomcp" name="nomcp"/>
                                <label for="prenomcp">Prenom</label>
                                <input type="text" class="inputcl" id="prenomcp" name="prenomcp"/>
                            </div>
                            <div class="row">
                                <label for="telephonecp">Telephone</label>
                                <input type="text" class="inputcl" id="telephonecp" name="telephonecp"/>
                                <label for="adressecp">Adresse</label>
                                <input type="text" class="inputcl" id="adressecp" name="adressecp"/>
                            </div>
                            <div class="row">
                                <label for="professioncp">Profession</label>
                                <input type="text" class="inputcl" id="professioncp" name="professioncp"/>
                                <label for="emailcp">Email</label>
                                <input type="email" class="inputcl" id="emailcp" name="emailcp"/>
                            </div>
                            <div class="row">
                                <label for="logincp">Login</label>
                                <input type="text" class="inputcl" id="logincp" name="logincp"/>
                                <label for="passwdcp">PassWord</label>
                                <input type="password" class="inputcl" id="passwdcp" name="passwdcp"/>
                            </div>
                            <div class="row">
                                <label for="cnicp">CNI</label>
                                <input type="text" class="inputcl" id="cnicp" name="cnicp"/>
                                <select name="statutcp" id="statutcp" class="slct2 selectclt" onchange="salaryForm()">
                                    <option value="0">--Statut Client--</option>
                                    <option value="1">Salarier </option>
                                    <option value="2">Non Salarier </option>
                               <!-- <php
                                   include '../../src/controller/TypeClientController.php';
                                    /*echo "<option value=\"1\">Salarierecho </option>";
                                    echo "<option value=\"2\">Non Salarierecho </option>";
                                $lisTypeClient=listTypeClient();
                                if($lisTypeClient!=null)
                                {
                                    while ($resultat=$lisTypeClient->fetch(PDO::FETCH_ASSOC))
                                    {
                                        $id=$resultat['id'];
                                        $libelle=$resultat['libelle'];
                                        echo "<option value=\"$id\">$libelle</option>";
                                    }
                                }

                                */?>-->
                                </select>
                            </div>
                            <div class="row" id="salarier" hidden>
                                <label for="salairecp" id="lbsalairecp">Salaire</label>
                                <input type="text" class="inputcl" id="salairecp" name="salairecp"/>
                                <select name="employeur" id="employeur" class="slct2 selectclt" onchange="employeurForm()">
                                    <option value="0">--Employer--</option>
                                    <option value="1">Empleur1</option>
                                    <option value="2">Empleur1</option>
                                    <option value="3">Ajouter son employeur</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="valider" id="ajout" disabled>Ajouter</button>
                    <button type="reset" class="annuler" id="annuler" disabled>Annuler</button>
                </div>
            </form>
        </fieldset>
        <div id="affiche"></div>
    </article>
    <script src="./public/js/main.js"></script>
    <script src="./public/js/client.js"></script>
</body>

</html>