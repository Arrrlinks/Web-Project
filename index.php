<?php
if (isset($_GET['login'])) {
    require_once('src/controllers/login_c.php');
}
elseif (isset($_GET['logout'])) {
    require_once('src/controllers/logout_c.php');
}
elseif (isset($_GET['pwdReset'])) {
    require_once('src/controllers/pwdReset_c.php');
}
elseif (isset($_GET['account'])) {
    require_once('src/controllers/account_c.php');
}
elseif (isset($_GET['navigation'])) {
    require_once('src/controllers/navigation_c.php');
}
elseif (isset($_GET['creationEntreprise'])) {
    require_once('src/controllers/creationEntreprise_c.php');
}
elseif (isset($_GET['creationOffre'])) {
    require_once('src/controllers/creationOffre_c.php');
}
elseif (isset($_GET['creationUser'])) {
    require_once('src/controllers/creationUser_c.php');
}
elseif (isset($_GET['detail'])) {
    require_once('src/controllers/postuler_c.php');
}
elseif (isset($_GET['modifierEntreprise'])){
    require_once('src/controllers/modifierEntreprise_c.php');
}
elseif (isset($_GET['modifierOffre'])){
    require_once('src/controllers/modifierOffre_C.php');
}
elseif (isset($_GET['modifierUtilisateur'])){
    require_once('src/controllers/modifierUtilisateur_c.php');
}
elseif (isset($_GET['statentreprise'])){
    require_once('src/controllers/statEntreprise_c.php');
}
elseif (isset($_GET['statUser'])){
    require_once('src/controllers/statUser_c.php');
}
elseif (isset($_GET['wishlist'])){
    require_once('src/controllers/wishlist_c.php');
}
elseif (isset($_GET['postuler'])){
    require_once('src/controllers/postuler_c.php');
}
elseif (isset($_GET['notifications'])){
    require_once('src/controllers/notifications_c.php');
}
elseif (isset($_GET['aPropos'])){
    require_once('src/controllers/aPropos_c.php');
}
elseif (isset($_GET['mentionLegale'])){
    require_once('src/controllers/mentionlegal_c.php');
}
elseif (isset($_GET['rgpd'])){
    require_once('src/controllers/rgpd_c.php');
}
else {
    require_once('src/controllers/accueil_c.php');
}