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
