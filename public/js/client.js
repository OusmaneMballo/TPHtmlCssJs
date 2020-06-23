
//Creation de l'objet client
class Client {
    constructor() { };
    initialize = function (id, nom, prenom, tel, salaire, profession, email, login, passwd, nci, address) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.tel = tel;
        this.salaire = salaire;
        this.profession = profession;
        this.email = email;
        this.login = login;
        this.passwd = passwd;
        this.nci = nci;
        this.address = address;
    }
    addEmployeur = function (employeur) {
        this.employeur = employeur;
    };
} 
//--------Declaration de variables globales------//

var cl = new Client();
var clients = [];
var i = 0;

//------Fin de declaration des variable globales------//

///
//Lea methode addClient permet d'ajout un client dans le tableau de client
///
function addClient() {
    //console.log(document.getElementById('nomcp').value);
    cl.nom = document.getElementById('nomcp').value;
    cl.prenom = document.getElementById('prenomcp').value;
    cl.nci = document.getElementById('cnicp').value;
    cl.passwd = document.getElementById('passwdcp').value;
    cl.profession = document.getElementById('professioncp').value;
    cl.salaire = document.getElementById('salairecp').value;
    cl.tel = document.getElementById('telephonecp').value;
    cl.email = document.getElementById('emailcp').value;
    cl.login = document.getElementById('logincp').value;
    cl.id = i + 1;
    clients[i++] = cl;
}

function optionClient() {
    let slct=document.getElementById('client');
    for (let index = 0; index < clients.length; index++) {
        //let option=document.createElement('option');
        let newOption = new Option(
            clients[index].prenom + " " + clients[index].nom + "-" + clients[index].nci,
            clients[index].id
            );
        slct.options.add(newOption);
        console.log(clients[index].prenom + " " + clients[index].nom + "-" + clients[index].nci);
        //option.attributes('value') = clients[index].id;
        //option.textContent = clients[index].id + "-" + clients[index].prenom + " " + clients[index].nom + "-" + clients[index].nci;
        //slct.append(option);
    }
}

function employeurForm(){
    
    let client = document.getElementById("employeur");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "Ajouter son employeur") {
        document.getElementById("cm").hidden = false;
    }else{
        document.getElementById("cm").hidden = true;
    }
}
//Fonction de verification des champs input d'un client moral
function verificationMoral() {

    if (document.getElementById("cm").disabled == false){
       
        if (document.getElementById('nomCM').value === '' || document.getElementById('adresseCM').value === '') {
                return false;
        }
        if (document.getElementById('raisonSocialCM').value === '' || document.getElementById('emailCM').value === ''){
            return false;
        }
        if (document.getElementById('loginCM').value === '' || document.getElementById('passwdCM').value === '') {
            return false;
        }
    }

    return true;
}

function typeClient() {
    let client = document.getElementById("typeclient");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "1- Client Physique") {
        document.getElementById("cp").hidden= false;
        document.getElementById("cm").hidden = true;
    }
    else {
        if (type === "2- Client Moral") {
            document.getElementById("cm").hidden = false;
            document.getElementById("cp").hidden = true;
        }
    }
}

//Fonction de verification des champs input d'un client physique
function verificationPhysique() {

    if (document.getElementById("cp").disabled == false) {

        if (document.getElementById('nomcp').value === '' || document.getElementById('prenomcp').value === '') {
            return false;
        }
        if (document.getElementById('telephonecp').value === '' || document.getElementById('salairecp').value === '') {
            return false;
        }
        if (document.getElementById('emailcp').value === '' || document.getElementById('logincp').value === '') {
            return false;
        }
        if (document.getElementById('passwdcp').value === '') {
            return false;
        }
        if (document.getElementById('cnicp').value === '' || document.getElementById('adressecp').value === '') {
            return false;
        }
        let client = document.getElementById("statutcp");
        let choix = client.selectedIndex;
        let statut = client.options[choix].value;
        if (statut<=0){
            return false;
        }
    }
    return true;
}
//Fonction de validation des champs input
function validation(){
    
    if(verificationMoral()==true && verificationPhysique()==true){
        
        return true;
    }

    return false;
}

function post(){
    if (validation()){
        
        addClient();
    }
    else{
        alert('Merci de renseigner les champs actives');
        return false;
    }
}