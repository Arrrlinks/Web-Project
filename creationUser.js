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