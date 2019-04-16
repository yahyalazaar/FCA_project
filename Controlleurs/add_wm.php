<?php

session_start();
include_once '../include_dao.php';
extract($_POST);

if (!empty($email) || !empty($nom) || !empty($prenom) || !empty($tel) || !empty($mot_de_passe)) {

    $add = new WebmasterMySqlDAO();
    if ($add->queryByEmailWm($email) == NULL) {
        $wm = new Webmaster();
        $wm->nomWm = $nom;
        $wm->prenomWm = $prenom;
        $wm->telWm = $telephone;
        $wm->emailWm = $email;
        $wm->mdpWm = $mot_de_passe;
        $last = $add->insert($wm);

        $msg = '<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>' . $email . '</strong> a bien été ajouté <a href="" class="btn btn-primary btn-xs">Actualiser la liste</a>.
  </div>';
        $error = 'false';
    } else {
        $msg = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>' . $email . '</strong> déjà existe.
  </div>';
        $error = 'true';
    }
} else {
    $msg = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>Veuillez remplir tous les champs svp !</strong>.
  </div>';
    $error = 'true';
}
$response = array('msg' => $msg, 'error' => $error);
echo json_encode($response, true);






