<?php
include '../layout/header.php';
?>

<!--=========Debut sideBarre============-->
<?php

include '../layout/sidebarre.php';

?>
<!--=========Debut sideBarre============-->

<!--========Contenu du body===========-->
    <!--Contenu du body-->
    <article class="content">
        <fieldset>
            <legend>Creation Compte</legend>
            <form action="" class="form">
                    <div class="row">
                        <select name="typecp" id="typecp" onchange="frais()">
                            <option value="0">--Type Compte--</option>
                            <option value="1">Xewel | Epargne</option>
                            <option value="2">Courant</option>
                            <option value="2">Bloquer</option>
                        </select>
                        <select name="client" id="client" class="slct">
                            <option value="0">--Clients--</option>
                            <option value="1">Client1</option>
                            <option value="2">Client2</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="frai">Frais:<b id="frai"></b></label>
                    </div>
                <div class="row">
                    <button type="button" class="valider" onclick="post()">Ajouter</button>
                    <button type="reset" class="annuler">Annuler</button>
                </div>
            </form>
        </fieldset>
    </article>
    <script src="./public/js/compte.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>