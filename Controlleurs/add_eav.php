<?php

session_start();
include_once '../include_dao.php';
$add = new EvalavalMySqlDAO();
$am = new Evalaval();
$am->dateEav = date("Y-m-d H:m:s");
$am->idFrn = $_POST['idfrn'];
$am->scoreEav = $_POST['score_finale'];
$am->classeEav = $_POST['classe'];
if ($_SESSION['cpt'] == 'admin') {
    $am->idAdmin = $_SESSION['idlogin'];
    $am->etatEav = 1;
} else if ($_SESSION['cpt'] == 'acht') {
    $am->idAcht = $_SESSION['idlogin'];
    $am->etatEav = 0;
}
$last = $add->insert($am);
$add = new AttreavMySqlDAO();
for ($i = 0; $i < $_POST['indice']; $i++) {
    $attr = new Attreav();
    $attr->critereEav = $_POST['critere_' . $i];
    $attr->domaineEav = $_POST['domaine_' . $i];
    $attr->idEav = $last;
    $attr->importanceEav = $_POST['importance_' . $i];
    $attr->indicateurEav = $_POST['indecateur_' . $i];
    $attr->notationEav = $_POST['notation_' . $i];
    $attr->noteEav = $_POST['note_' . $i];
    $attr->poidsEav = $_POST['poids_' . $i];
    $attr->ponderationEav = $_POST['ponderation_' . $i];
    $attr->priseEav = $_POST['prise_cmpt_' . $i];
    $add->insert($attr);
}

$msg = '<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>L\'évaluation a bien été envoyée.</strong>
  </div>';
$error = 'false';

$_SESSION['errorMSG'] = $msg;
header('location: ../frn_av.php');




