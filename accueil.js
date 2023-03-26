document.addEventListener("DOMContentLoaded", function() {
    // Ajouter la classe 'show' pour afficher les éléments
    const cloudImages = document.querySelectorAll(".cloud-image");
    cloudImages.forEach(cloudImage => {
        cloudImage.classList.remove("item");
        cloudImage.classList.add("show");
    });

    // Supprimer la classe 'show' après 1 seconde
    setTimeout(function() {
        cloudImages.forEach(cloudImage => {
            cloudImage.classList.remove("show");
            cloudImage.classList.add("item");
        });
    }, 1000);
});