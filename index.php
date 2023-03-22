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
    require_once('src/controllers/detail_c.php');
}
elseif (isset($_GET['modifierEntreprise'])){
    require_once('src/controllers/modifierEntreprise_C.php');
}
elseif (isset($_GET['modifierOffre'])){
    require_once('src/controllers/modifierOffre_C.php');
}
elseif (isset($_GET['modifierUtilisateur'])){
    require_once('src/controllers/modifierUtilisateur_c.php');
}
else {
    require_once('src/controllers/accueil_c.php');
}