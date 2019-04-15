<?php

session_start();
include_once '../include_dao.php';
$user = new AdminMySqlDAO();
extract($_POST);

if ($user->queryByEmailAdmin($login) != null) {
    $user = $user->queryByEmailAdmin($login);
    if ($user[0]->mdpAdmin == $pwd) {
        $_SESSION['idlogin'] = $user[0]->idAdmin;
        $msg = 'no error';
        $error = 'false';
    } else {
        $msg = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>Erreur</strong> Email ou mot de passe incorrect.
  </div>';
        $error = 'true';
    }
} else {
    $msg = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
    <strong>Erreur</strong> Email ou mot de passe incorrect.
  </div>';
    $error = 'true';
}
$response = array('msg' => $msg, 'error' => $error);
echo json_encode($response, true);

