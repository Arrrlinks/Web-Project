// Sélectionner tous les boutons de suppression d'utilisateurs
var boutons_supprimer = document.querySelectorAll('.deleteButton');

// Boucle pour ajouter un événement "click" à chaque bouton de suppression
    for(var i = 0; i < boutons_supprimer.length; i++){
        boutons_supprimer[i].addEventListener('click', function(){
            var id_utilisateur = this.id.split('-')[1];

            // Afficher une alerte de confirmation avec SweetAlert2
            Swal.fire({
                title: 'Êtes-vous sûr de vouloir supprimer cet utilisateur ?',
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
                        url: 'supprimerUtilisateur.php',
                        data: {id_utilisateur: id_utilisateur},
                        success: function(response){
                            // Si la suppression réussit, afficher une alerte de succès
                            if(response == 'success'){
                                Swal.fire({
                                    title: 'Utilisateur supprimé avec succès',
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
                                    title: 'Une erreur s\'est produite lors de la suppression de l\'utilisateur',
                                    icon: 'error'
                                });
                            }
                        }
                    });
                }
            });
        });
    }