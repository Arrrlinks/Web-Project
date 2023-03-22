let i = 0;
const adrBox = document.getElementById('adresseBox');
function addAdr() {
    i++;
    adrBox.innerHTML += `<label for="Adr"></label><input type="text" name="Adr[]" id="Adr" class="adresse">`;
}

function removeAdr() {
    if(adrBox.childElementCount > 4) {
        adrBox.removeChild(adrBox.lastChild);
    }
}

const nameEntreprise = document.getElementById("nameEntr");

nameEntreprise.addEventListener("input", function(event) {
    let value = event.target.value;
    if (value.length === 0) {
        nameEntreprise.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un nom");
    } else {
        nameEntreprise.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const numberOfEmployee = document.getElementById("numberOfEmployee");

numberOfEmployee.addEventListener("input", function(event) {
    let value = event.target.value;
    value = value.replace(/[^0-9]/g, "");
    event.target.value = value;
    if (value.length === 0) {
        numberOfEmployee.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un nombre");
    } else {
        numberOfEmployee.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const secteurEntreprise = document.getElementById("secteurEntr");

secteurEntreprise.addEventListener("input", function(event) {
    let value = event.target.value;
    value = value.replace(/[^a-zA-Z\- ]/g, '');
    event.target.value = value;
    if (value.length === 0) {
        secteurEntreprise.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un secteur");
    } else {
        secteurEntreprise.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const input = document.getElementById("Adr"); // récupérer l'élément input
const apiKey = "YOUR_API_KEY"; // remplacez YOUR_API_KEY par votre clé d'API SmartyStreets
