function submitForm(event, form) {
    event.preventDefault();
    Swal.fire({
        title: 'Confirmer la modification ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#3963AD",
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, confirmer',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
}