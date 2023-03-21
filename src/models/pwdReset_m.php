<?php
require_once('src/models/init.php');
ifNoSessionExit();
function pwdReset(){
    if (isset($_POST['current']) && isset($_POST['new'])) {
        $current = $_POST['current'];
        $new = $_POST['new'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT password FROM users WHERE id = :id');
        $req->execute(array('id' => $_SESSION["id"]));
        $result = $req->fetch();
        if (password_verify($current, $result['password'])) {
            $req2 = $bdd->prepare('UPDATE users SET password = :password WHERE id = :id');
            $req2->execute(array(
                'password' => password_hash($new, PASSWORD_DEFAULT),
                'id' => $_SESSION["id"]
            ));
            header("Location: index.php");
        } else {
            return '<p class="error">Wrong password</p>';
        }
    }
}
?>