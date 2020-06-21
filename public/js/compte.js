class Compte{
    constructor(){};
    initialize = function (id, type, clients, frai){
        this.id = id;
        this.type = type;
        this.clients = clients;
        this.frai = frai;
    }
}
class TypeCompte{
    constructor(){};
    initialize = function (id, libelle){
        this.id = id;
        this.libelle = libelle;
    }
}


//Fonction de verification des champs input compte
function verificationCompte() {

    let typeCompte = document.getElementById("typecp");
    let choix = typeCompte.selectedIndex;
    let type = typeCompte.options[choix].text;
    if (type ==="--Type Compte--") {
        return false;
    }

    let client = document.getElementById("client");
    choix = client.selectedIndex;
    type = client.options[choix].text;
    if (type === "--Clients--") {
        return false;
    }

    if (document.getElementById('frai').value === '') {
        return false;
    }

    return true;
}

///
//Methode de validation de formulaire
///
function post() {
    if (verificationCompte()) {
        alert('Okey tout les champs sont remplis')
    }
    else{
        alert('Merci de renseigner les champs actives');
        return false;
    }
}