<?php
session_start();
include_once '../include_dao.php';
extract($_POST);
$add = new AdminMySqlDAO();

if ($add->queryByEmailAdmin($email) == NULL) {
    $admin = new Admin();
    $admin->nomAdmin = $nom;
    $admin->prenomAdmin = $prenom;
    $admin->telAdmin = $telephone;
    $admin->emailAdmin = $email;
    $admin->mdpAdmin = $mot_de_passe;
    $last = $add->insert($admin);
    
    $fk = new AdminAdminMySqlDAO();
    $aa = new AdminAdmin();
    $aa->idAdmin = $last;
    $aa->admIdAdmin = $_SESSION['idlogin'];
    $aa->dateAdminAdmin = date("Y-m-d H:m:s");
    $aa->type = "add";
    $fk->insert($aa);
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
$response = array('msg' => $msg, 'error' => $error);
echo json_encode($response, true);






