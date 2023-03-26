entrepriseSelect.addEventListener('change', () => {
    const entreprise = entrepriseSelect.value;
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'creationOffreAddress.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Traitement de la réponse du script PHP
            const response = JSON.parse(xhr.responseText);
            adrSelect.innerHTML = '';
            response.forEach(function (value) {
                const option = document.createElement('option');
                option.value = value;
                option.innerHTML = value;
                adrSelect.appendChild(option);
            });
        }
        else {
            console.log('Erreur lors de la requête.');
        }
    };
    xhr.send('Entr=' + entreprise);
});

const name= document.getElementById('nomPoste');

name.addEventListener('input', function (event) {
    let value = event.target.value;
    if (value.length >= 3) {
        name.classList.remove('error');
        name.setCustomValidity('');
    }
    else {
        name.classList.add('error');
        name.setCustomValidity('Le nom du poste doit contenir au moins 3 caractères.');
    }
});

const numberOfPlace = document.getElementById('nombre');

numberOfPlace.addEventListener('input', function (event) {
    let value = event.target.value;
    value = value.replace(/[^0-9]/g, "");
    event.target.value = value;
    if (value.length === 0) {
        numberOfPlace.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un nombre d'employés");
    } else {
        numberOfPlace.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const skills = document.getElementById('skills');

skills.addEventListener('input', function (event) {
    let value = event.target.value;
    event.target.value = value;
    if (value.length === 0) {
        skills.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer une compétence");
    } else {
        skills.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const salary = document.getElementById('salary');

salary.addEventListener('input', function (event) {
    let value = event.target.value;
    value = value.replace(/[^0-9]/g, "");
    event.target.value = value;
    if (value.length === 0) {
        salary.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un salaire");
    } else {
        salary.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const fromDateInput = document.getElementById('fromDate');
const toDateInput = document.getElementById('toDate');

fromDateInput.addEventListener('input', validateDates);
toDateInput.addEventListener('input', validateDates);

function validateDates() {
    const fromDate = new Date(fromDateInput.value);
    const toDate = new Date(toDateInput.value);

    if (!isValidDate(fromDate)) {
        fromDateInput.classList.add("error");
        fromDateInput.setCustomValidity('Veuillez entrer une date de début valide');
    } else {
        fromDateInput.classList.remove("error");
        fromDateInput.setCustomValidity('');
    }

    if (!isValidDate(toDate)) {
        toDateInput.classList.add("error");
        toDateInput.setCustomValidity('Veuillez entrer une date de fin valide');
    } else {
        toDateInput.classList.remove("error");
        toDateInput.setCustomValidity('');
    }

    if (fromDate >= toDate) {
        fromDateInput.classList.add("error");
        toDateInput.classList.add("error");
        toDateInput.setCustomValidity('La date de fin doit être supérieure à la date de début');
    } else {
        fromDateInput.classList.remove("error");
        toDateInput.classList.remove("error");
        toDateInput.setCustomValidity('');
    }
}

function isValidDate(date) {
    return date instanceof Date && !isNaN(date);
}

function showSuccessAlert() {
    Swal.fire({
        icon: 'success',
        title: 'L\'offre a bien été créée !',
        showConfirmButton: false,
        timer: 2000
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