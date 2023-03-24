const wishlistBtn = document.getElementsByClassName('wishlistButton');
let id = 0;

for(let i=0; i<wishlistBtn.length; i++) {
    id=wishlistBtn[i].style.getPropertyValue('--id');
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'wishlistCheck.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if(xhr.status === 200) {
            if(xhr.responseText === 'Wishlisted') {
                wishlistBtn[i].innerHTML = '<ion-icon name="heart" class="like-icon"></ion-icon>';
            }
            else if(xhr.responseText === 'notWishlisted') {
                wishlistBtn[i].innerHTML = '<ion-icon name="heart-outline" class="like-icon"></ion-icon>';
            }
            else {
                console.log('Erreur lors de la requête.');
            }
        }
        else {
            console.log('Erreur lors de la requête.');
        }
    };
    xhr.send('id=' + id);
}

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
                }
                else if (xhr.responseText === 'deleted') {
                    wishlistBtn[i].innerHTML = '<ion-icon name="heart-outline" class="like-icon"></ion-icon>';
                }
                else {
                    console.log('Erreur lors de la requête.');
                }
            }
            else {
                console.log('Erreur lors de la requête.');
            }
        };
        xhr.send('id=' + id);
    });
}