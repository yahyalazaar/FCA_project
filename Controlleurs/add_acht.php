<?php

session_start();
include_once '../include_dao.php';
extract($_POST);

if (!empty($email) || !empty($nom) || !empty($prenom) || !empty($tel) || !empty($mot_de_passe) || !empty($idfa)) {
    $add = new AcheteurMySqlDAO();
    $user2 = new FournisseurMySqlDAO();
    $user2 = new AcheteurMySqlDAO();
    $user3 = new WebmasterMySqlDAO();
    if ($add->queryByEmailAcht($email) == NULL) {
        $acht = new Acheteur();
        $acht->nomAcht = $nom;
        $acht->prenomAcht = $prenom;
        $acht->telAcht = $telephone;
        $acht->emailAcht = $email;
        $acht->mdpAcht = $mot_de_passe;
        $acht->etatAcht = 0;

        $last = $add->insert($acht);

        $fk = new AdAchtMySqlDAO();
        $aa = new AdAcht();
        $aa->idAcht = $last;
        $aa->idAdmin = $_SESSION['idlogin'];
        $aa->dateAdAcht = date("Y-m-d H:m:s");
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






