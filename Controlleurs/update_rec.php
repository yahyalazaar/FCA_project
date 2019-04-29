<?php

session_start();
include_once '../include_dao.php';
//extract($_POST);
$tmp = TRUE;
for ($i = 0; $i < 3; $i++) {
    if (empty($_POST['_action' . $i]) || empty($_POST['_qui' . $i]) || empty($_POST['_quand' . $i]) || empty($_POST['_comm' . $i]) || empty($_POST['_action_' . $i]) || empty($_POST['_qui_' . $i]) || empty($_POST['_quand_' . $i]) || empty($_POST['_comm_' . $i])) {
        $tmp = FALSE;
    }
}
if ($tmp) {
    $addAct = new ActionMySqlDAO();
    $addDisp = new DispositionMySqlDAO();
    for ($i = 0; $i < 3; $i++) {
        $action = new Action();
        $action->actionAct = $_POST['_action' . $i];
        $action->quiAct = $_POST['_qui' . $i];
        $action->quandAct = $_POST['_quand' . $i];
        $action->commAct = $_POST['_comm' . $i];
        $action->idRec = $_POST['idRec'];
        $addAct->insert($action);

        $disp = new Disposition();
        $disp->actionDisp = $_POST['_action_' . $i];
        $disp->quiDisp = $_POST['_qui_' . $i];
        $disp->quandDisp = $_POST['_quand_' . $i];
        $disp->commDisp = $_POST['_comm_' . $i];
        $disp->idRec = $_POST['idRec'];
        $addDisp->insert($disp);
    }

    $update = new ReclamationMySqlDAO();
    $rec = $update->load($_POST['idRec']);
    $rec->etatRec = "Traitée";
    $update->update($rec);

    $msg = '<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
   <strong>La réclamation a bien été traitée.</strong>
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
header('location: ../getReclamation.php?idRec=' . $_POST['idRec']);




