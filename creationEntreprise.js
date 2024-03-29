const adrBox = document.getElementById('adresseBox');


function initAutocomplete() {
    const inputs = document.querySelectorAll('.adresse');

    for (let i = 0; i < inputs.length; i++) {
        const autocomplete = new google.maps.places.Autocomplete(inputs[i]);
    }
}



function addAdr() {
    const adrBox = document.getElementById('adresseBox');
    const inputCount = adrBox.querySelectorAll('.adresse').length;

    if (inputCount >= 5) {
        const WL = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        })

        WL.fire({
            icon: 'error',
            title: 'Vous avez atteint le nombre maximum d\'adresses',
        })
        return;
    }

    const newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.name = 'Adr[]';
    newInput.id = `Adr-${inputCount}`;
    newInput.classList.add('adresse');

    const label = document.createElement('label');
    label.htmlFor = `Adr-${inputCount}`;

    adrBox.insertBefore(newInput, adrBox.lastElementChild);
    adrBox.insertBefore(label, adrBox.lastElementChild);

    initAutocomplete(); // Call the initAutocomplete function to update the Autocomplete instances
}


function removeAdr() {
    const inputs = adrBox.querySelectorAll('input[type="text"]');
    if(inputs.length > 1) {
        inputs[inputs.length - 1].remove();
    }
}

const nameEntreprise = document.getElementById("nameEntr");

nameEntreprise.addEventListener("input", function (event) {
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

numberOfEmployee.addEventListener("input", function (event) {
    let value = event.target.value;
    value = value.replace(/[^0-9]/g, "");
    event.target.value = value;
    if (value.length === 0) {
        numberOfEmployee.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un nombre d'employés");
    } else {
        numberOfEmployee.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const secteurEntreprise = document.getElementById("secteurEntr");

secteurEntreprise.addEventListener("input", function (event) {
    let value = event.target.value;
    value = value.replace(/[^a-zA-Z\-,/ ]/g, '');
    event.target.value = value;
    if (value.length === 0) {
        secteurEntreprise.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un secteur");
    } else {
        secteurEntreprise.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const email = document.getElementById("email");

email.addEventListener("input", function (event) {
    let value = event.target.value;

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
        email.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer une adresse email valide.");
    } else {
        email.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const adresse = document.getElementById("Adr");

adresse.addEventListener("input", function (event) {
    let value = event.target.value;
    if (value.length === 0) {
        adresse.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer une adresse");
    } else {
        adresse.classList.remove("error");
        event.target.setCustomValidity("");
    }
});


function showSuccessAlert() {
    Swal.fire({
        icon: 'success',
        title: 'L\'entreprise a bien été créée !',
        showConfirmButton: false,
        timer: 4000
    });
}

function showErrorAlert() {
    Swal.fire({
        icon: 'error',
        title: 'Une erreur est survenue',
        showConfirmButton: false,
        timer: 2000
    });
}