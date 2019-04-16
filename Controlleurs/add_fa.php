<?php

session_start();
include_once '../include_dao.php';
extract($_POST);

if (!empty($nom) && !empty($code) && !empty($type) && !empty($services_concernes) && !empty($segement1) && !empty($segement2) && !empty($segement3) && !empty($segement4) && !empty($leviers) && !empty($classe)) {
    
    $fa = new Familleachat();
    $fa->nomFa = $nom;
    $fa->codeFa = $code;
    $fa->classeFa = $classe;
    $fa->segement1Fa = $segement1;
    $fa->segement2Fa = $segement2;
    $fa->segement3Fa = $segement3;
    $fa->segement4Fa = $segement4;
    $fa->typeFa = $type;
    $fa->levierFa = $leviers;
    $fa->serviceFa = $services_concernes;
    
    $add = new FamilleachatMySqlDAO();
    $last = $add->insert($fa);

    $ad = new AdminFa();
    $ad->idAdmin = $_SESSION['idlogin'];
    $ad->idFa = $last;

    $add = new AdminFaMySqlDAO();
    $add->insert($ad);

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
   <strong>Veuillez remplir tous les champs svp !</strong>.
  </div>';
    $error = 'true';
}


$response = array('msg' => $msg, 'error' => $error);
echo json_encode($response, true);






