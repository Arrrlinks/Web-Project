// Sélectionner tous les boutons de suppression d'utilisateurs

const boutons_supprimer_Offre = document.querySelectorAll('.deleteButtonOffre');
for(let i = 0; i < boutons_supprimer_Offre.length; i++){
    boutons_supprimer_Offre[i].addEventListener('click', function(){
        const id_Offre = this.id.split('-')[1];

        // Afficher une alerte de confirmation avec SweetAlert2
        Swal.fire({
            title: 'Êtes-vous sûr de vouloir supprimer cet Offre ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            // Si l'utilisateur clique sur le bouton "Oui, supprimer"
            if (result.isConfirmed) {
                // Envoyer une requête AJAX pour supprimer l'utilisateur
                $.ajax({
                    type: 'GET',
                    url: 'supprimerOffre.php',
                    data: {id_Offre: id_Offre},
                    success: function(response){
                        // Si la suppression réussit, afficher une alerte de succès
                        if(response == 'success'){
                            Swal.fire({
                                title: 'Offre supprimé avec succès',
                                icon: 'success'
                            });

                            // Actualiser la page après une courte pause
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        }
                        // Si la suppression échoue, afficher une alerte d'erreur
                        else{
                            Swal.fire({
                                title: 'Une erreur s\'est produite lors de la suppression de l\'offre',
                                icon: 'error'
                            });
                        }
                    }
                });
            }
        });
    });
}