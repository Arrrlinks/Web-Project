const displayBtn = document.getElementsByClassName('setDisplayButton');

for (let i = 0; i < displayBtn.length; i++) {
    displayBtn[i].addEventListener('click', function() {
        id = displayBtn[i].style.getPropertyValue('--id');
        console.log(id);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'displayEntreprise.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                if (xhr.responseText === 'masked') {
                    displayBtn[i].innerHTML = '<ion-icon class="eye-icon" name="eye-off-outline"></ion-icon>';
                    Swal.fire({
                        position: 'bottom-end',
                        width: '300px',
                        icon: 'info',
                        title: "L'entreprise a été masquée",
                        showConfirmButton: false,
                        timer: 1000,
                        backdrop: false,
                    });
                }
                else if (xhr.responseText === 'unmasked') {
                    displayBtn[i].innerHTML = '<ion-icon class="eye-icon" name="eye-outline"></ion-icon>';
                    Swal.fire({
                        position: 'bottom-end',
                        width: '300px',
                        icon: 'info',
                        title: "L'entreprise est maintenant visible",
                        showConfirmButton: false,
                        timer: 1000,
                        backdrop: false,
                    });

                }
                else {
                    Swal.fire({
                        position: 'bottom-end',
                        width: '300px',
                        icon: 'error',
                        title: "Une erreur est survenue",
                        showConfirmButton: false,
                        timer: 1000,
                        backdrop: false,
                    });
                }
            }
            else {
                Swal.fire({
                    position: 'bottom-end',
                    width: '300px',
                    icon: 'warning',
                    title: "Une erreur est survenue",
                    showConfirmButton: false,
                    timer: 1000,
                    backdrop: false,
                });
            }
        };
        xhr.send('id=' + id);
    });
}

