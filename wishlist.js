const wishlistBtn = document.getElementsByClassName('wishlistButton');
let id = 0;

for (let i = 0; i < wishlistBtn.length; i++) {
    wishlistBtn[i].addEventListener('click', function() {
        id = wishlistBtn[i].style.getPropertyValue('--id');
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'wishlistChange.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                if (xhr.responseText === 'added') {
                    wishlistBtn[i].innerHTML = '<ion-icon name="heart" class="like-icon"></ion-icon>';
                    const WL = Swal.mixin({
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    })

                    WL.fire({
                        icon: 'success',
                        title: 'L\'offre a été ajoutée à la wishlist'
                    })
                }
                else if (xhr.responseText === 'deleted') {
                    wishlistBtn[i].innerHTML = '<ion-icon name="heart-outline" class="like-icon"></ion-icon>';
                    const WL = Swal.mixin({
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    })

                    WL.fire({
                        icon: 'error',
                        title: 'L\'offre a été supprimée de la wishlist'
                    })

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

