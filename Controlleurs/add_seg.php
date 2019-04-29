<?php

session_start();
include_once '../include_dao.php';
extract($_POST);

if (!empty($nom) && !empty($fa)) {
    $add = new SegementMySqlDAO();
    if ($add->queryByNomSeg($nom) == NULL) {
        $se = new Segement();
        $se->nomSeg = $nom;
        $se->idFa = $fa;
        $se->idAdmin = $_SESSION['idlogin'];


        $last = $add->insert($se);

        $msg = '<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>' . $nom . '</strong> a bien été ajouté <a href="" class="btn btn-primary btn-xs">Actualiser la liste</a>.
  </div>';
        $error = 'false';
    } else {
        $msg = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>' . $nom . ' est déjà exist !!!</strong>.
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






