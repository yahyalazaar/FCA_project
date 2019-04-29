<?php

session_start();
include_once '../include_dao.php';
extract($_POST);

if (!empty($frn) && !empty($nc) && !empty($contact)) {
    $add = new ReclamationMySqlDAO();
    $rec = new Reclamation();
    $rec->dateRec = date("Y-m-d H:m:s");
    $rec->idAcht = $_SESSION['idlogin'];
    $rec->idFrn = $frn;
    $rec->contactRec = $contact;
    $rec->descriptionRec = $description;
    $rec->dateRepRec = $dateRep;
    $rec->ncmdRec = $nc;
    $rec->etatRec = "En cours";
    $last = $add->insert($rec);

    $add = new ObjetsMySqlDAO();
    $obj = new Objet();
    $obj->idRec = $last;
    if (!empty($retard)) {
        $obj->retardObj = 1;
    } else {
        $obj->retardObj = 0;
    }
    if (!empty($qtenc)) {
        $obj->qteNCObj = 1;
    } else {
        $obj->qteNCObj = 0;
    }
    if (!empty($qltnc)) {
        $obj->qltNCObj = 1;
    } else {
        $obj->qltNCObj = 0;
    }
    if (!empty($autreObjc)) {
        $obj->autreObj = $autreObj;
    }
    $add->insert($obj);
    $add = new PiecejointesMySqlDAO();
    $pj = new Piecejointe();
    $MAX_FILE_SIZE = 3000000;
    $folder = 'uploaded/';
    if (!empty($blc) && $_FILES['bl']['size'] > 0) {
        $fname = $_FILES['bl']['name'];
        $ftype = $_FILES['bl']['type'];
        $fsize = $_FILES['bl']['size'];
        $ftmp = $_FILES['bl']['tmp_name'];
        $file = $_FILES['bl'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'P_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $pj->blPj = $image;
    }
    if (!empty($photoc) && $_FILES['photo']['size'] > 0) {
        $fname = $_FILES['photo']['name'];
        $ftype = $_FILES['photo']['type'];
        $fsize = $_FILES['photo']['size'];
        $ftmp = $_FILES['photo']['tmp_name'];
        $file = $_FILES['photo'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'P_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $pj->photoPj = $image;
    }
    if (!empty($emailc) && $_FILES['email']['size'] > 0) {
        $fname = $_FILES['email']['name'];
        $ftype = $_FILES['email']['type'];
        $fsize = $_FILES['email']['size'];
        $ftmp = $_FILES['email']['tmp_name'];
        $file = $_FILES['email'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'P_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $pj->emailPj = $image;
    }
    if (!empty($bcc) && $_FILES['bc']['size'] > 0) {
        $fname = $_FILES['bc']['name'];
        $ftype = $_FILES['bc']['type'];
        $fsize = $_FILES['bc']['size'];
        $ftmp = $_FILES['bc']['tmp_name'];
        $file = $_FILES['bc'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'P_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $pj->bcPj = $image;
    }
    if (!empty($ric) && $_FILES['ri']['size'] > 0) {
        $fname = $_FILES['ri']['name'];
        $ftype = $_FILES['ri']['type'];
        $fsize = $_FILES['ri']['size'];
        $ftmp = $_FILES['ri']['tmp_name'];
        $file = $_FILES['ri'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'P_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $pj->riPj = $image;
    }
    if (!empty($autrepjc) && $_FILES['autrepj']['size'] > 0) {
        $fname = $_FILES['autrepj']['name'];
        $ftype = $_FILES['autrepj']['type'];
        $fsize = $_FILES['autrepj']['size'];
        $ftmp = $_FILES['autrepj']['tmp_name'];
        $file = $_FILES['autrepj'];
        $nomImage = explode('.', $fname);
        $nomIma = date('dmYHis');
        $image = 'P_' . $nomIma . '.' . $nomImage[1];
        copy($ftmp, '' . $folder . '' . $image . '');
        $pj->autrePj = $image;
    }
    $pj->idRec = $last;
    $add->insert($pj);

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


/* $response = array('msg' => $msg, 'error' => $error);
  echo json_encode($response, true); */

$_SESSION['errorMSG'] = $msg;
header('location: ../reclamation.php');




