import { addclient} from 'main';

addclient();

function employeurForm(){
    
    let client = document.getElementById("employeur");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "Ajouter son employeur") {
        document.getElementById("cm").disabled = false;
    }else{
        document.getElementById("cm").disabled = true;
    }
}
function typeClient() {
    let client = document.getElementById("typeclient");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "1- Client Physique") {
        document.getElementById("cp").disabled = false;
        document.getElementById("cm").disabled = true;
    }
    else {
        if (type === "2- Client Moral") {
            document.getElementById("cm").disabled = false;
            document.getElementById("cp").disabled = true;
        }
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
        
        
        alert('Okey tout les champs sont remplis')
        return true;
    }

    alert('Merci de renseigner les champs actives');
    return false;
}