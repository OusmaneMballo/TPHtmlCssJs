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