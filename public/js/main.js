///
//constructeur de l'objet Client
///
function clients(id,nom,prenom,tel,salaire,profession,email,login,passwd,nci,address,employeur){
    this.id=id;
    this.nom=nom;
    this.prenom=prenom;
    this.tel=tel;
    this.salaire=salaire;
    this.profession=profession;
    this.email=email;
    this.login=login;
    this.passwd=passwd;
    this.nci=nci;
    this.address=address;
    this.employeur=employeur;
}

///
//constructeur de l'objet TypeCompte
///
function TypeCompte(id,libelle){
    this.id=id;
    this.libelle=libelle;
}

///
//constructeur de l'objet Compte
///
function comptes(id,type,clients,frai){
    this.id=id;
    this.type=type;
    this.clients=clients;
    this.frai=frai;
}
export function addclient(){
    console.log('fonction exporte')
}

function addcompte(cpt, i) {
    comptes[i++] = cpt
}

export default main;