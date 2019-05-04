<?php

session_start();
include_once '../include_dao.php';
$add = new EvalamontMySqlDAO();
$am = new Evalamont();
$am->dateEam = date("Y-m-d H:m:s");
$am->idFrn = $_POST['idfrn'];
$am->scoreEam = $_POST['score_finale'];
$am->classeEam = $_POST['classe'];

if ($_SESSION['cpt'] == 'admin') {
    $am->idAdmin = $_SESSION['idlogin'];
    $am->etatEam = 1;
} else if ($_SESSION['cpt'] == 'acht') {
    $am->idAcht = $_SESSION['idlogin'];
    $am->etatEam = 0;
}
$last = $add->insert($am);
$add = new AttreamMySqlDAO();
for ($i = 0; $i < $_POST['indice']; $i++) {
    $attr = new Attream();
    $attr->critereEam = $_POST['critere_' . $i];
    $attr->domaineEam = $_POST['domaine_' . $i];
    $attr->idEam = $last;
    $attr->importanceEam = $_POST['importance_' . $i];
    $attr->indicateurEam = $_POST['indecateur_' . $i];
    $attr->notationEam = $_POST['notation_' . $i];
    $attr->noteEam = $_POST['note_' . $i];
    $attr->poidsEam = $_POST['poids_' . $i];
    $attr->ponderationEam = $_POST['ponderation_' . $i];
    $attr->priseEam = $_POST['prise_cmpt_' . $i];
    $add->insert($attr);
}

$msg = '<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>L\'évaluation a bien été envoyée.</strong>
  </div>';
$error = 'false';

$_SESSION['errorMSG'] = $msg;
header('location: ../frn_am.php');




