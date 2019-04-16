<?php

session_start();
include_once '../include_dao.php';
$user1 = new AdminMySqlDAO();
$user2 = new FournisseurMySqlDAO();
$user3 = new AcheteurMySqlDAO();
$user4 = new WebmasterMySqlDAO();
extract($_POST);

if ($user1->queryByEmailAdmin($login) != null) {
    $user1 = $user1->queryByEmailAdmin($login);
    if ($user1[0]->mdpAdmin == $pwd) {
        $_SESSION['idlogin'] = $user1[0]->idAdmin;
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
} else if ($user2->queryByEmailFrn($login) != null) {
    $user2 = $user2->queryByEmailFrn($login);
    if ($user[0]->mdpFrn == $pwd) {
        $_SESSION['idlogin'] = $user2[0]->idFrn;
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
} else if ($user3->queryByEmailAcht($login) != null) {
    $user3 = $user3->queryByEmailAcht($login);
    if ($user3[0]->mdpAcht == $pwd) {
        $_SESSION['idlogin'] = $user3[0]->idAcht;
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
} else if ($user4->queryByEmailWm($login) != null) {
    $user4 = $user4->queryByEmailWm($login);
    if ($user4[0]->mdpWm == $pwd) {
        $_SESSION['idlogin'] = $user4[0]->idAdmin;
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

