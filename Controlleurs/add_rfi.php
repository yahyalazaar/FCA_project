<?php

session_start();
include_once '../include_dao.php';
if ($_FILES['rfi']['size'] > 0 && $_FILES['organ']['size'] > 0 && $_FILES['pfc']['size'] > 0 && $_FILES['bilan']['size'] > 0) {
    $add = new RfiMySqlDAO();
    $rfi = new Rfi();
    $folder = 'uploaded/rfi/';
    $rfi->idFrn = $_SESSION['idlogin'];
    if ($_FILES['rfi']['size'] > 0) {
        $fname = $_FILES['rfi']['name'];
        $ftype = $_FILES['rfi']['type'];
        $fsize = $_FILES['rfi']['size'];
        $ftmp = $_FILES['rfi']['tmp_name'];
        $file = $_FILES['rfi'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'RFI_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $rfi->rfiRemp = $image;
    }
    if ($_FILES['organ']['size'] > 0) {
        $fname = $_FILES['organ']['name'];
        $ftype = $_FILES['organ']['type'];
        $fsize = $_FILES['organ']['size'];
        $ftmp = $_FILES['organ']['tmp_name'];
        $file = $_FILES['organ'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'ORG_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $rfi->organRfi = $image;
    }
    if ($_FILES['pfc']['size'] > 0) {
        $fname = $_FILES['pfc']['name'];
        $ftype = $_FILES['pfc']['type'];
        $fsize = $_FILES['pfc']['size'];
        $ftmp = $_FILES['pfc']['tmp_name'];
        $file = $_FILES['pfc'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'PFC_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $rfi->pfRfi = $image;
    }
    if ($_FILES['bilan']['size'] > 0) {
        $fname = $_FILES['bilan']['name'];
        $ftype = $_FILES['bilan']['type'];
        $fsize = $_FILES['bilan']['size'];
        $ftmp = $_FILES['bilan']['tmp_name'];
        $file = $_FILES['bilan'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'BILAN_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $rfi->bilanRfi = $image;
    }
    $add->insert($rfi);
    $msg = '<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>La réclamation a bien été envoyée.</strong>
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
$_SESSION['errorMSG'] = $msg;

header('location: ../rfi.php');




