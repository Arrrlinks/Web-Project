const name = document.getElementById("prenomU");
name.addEventListener("input", function (event) {
    let value = event.target.value;
    value = value.replace(/[^a-zA-Z- ]/g, '');
    event.target.value = value;
    if (value.length === 0) {
        name.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un prénom");
    } else {
        name.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const lastName = document.getElementById("nomU");
lastName.addEventListener("input", function (event) {
    let value = event.target.value;
    value = value.replace(/[^a-zA-Z- ]/g, '');
    event.target.value = value;
    if (value.length === 0) {
        lastName.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un nom");
    } else {
        lastName.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const centre = document.getElementById("Centre");

centre.addEventListener("input", function (event) {
    let value = event.target.value;
    if (value.length === 0) {
        centre.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un centre");
    } else {
        centre.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const promo = document.getElementById("Promo");

promo.addEventListener("input", function (event) {
    let value = event.target.value;
    if (value.length === 0) {
        promo.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer une promo");
    } else {
        promo.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

const password = document.getElementById("password");

password.addEventListener("input", function (event) {
    let value = event.target.value;
    if (value.length === 0) {
        password.classList.add("error");
        event.target.setCustomValidity("Veuillez entrer un mot de passe");
    } else {
        password.classList.remove("error");
        event.target.setCustomValidity("");
    }
});

function showSuccessAlert(username){
    Swal.fire({
        icon: 'success',
        title: 'L\'utilisateur ' + username + ' a bien été créé !',
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