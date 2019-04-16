<?php

session_start();
include_once '../include_dao.php';
extract($_POST);

if (!empty($email) || !empty($nom) || !empty($prenom) || !empty($tel) || !empty($mot_de_passe) || !empty($idfa)) {
    $add = new FournisseurMySqlDAO();
    if ($add->queryByEmailFournisseur($email) == NULL) {
        $Fournisseur = new Fournisseur();
        $Fournisseur->nomFrn = $nom;
        $Fournisseur->idFa = $idfa;
        $Fournisseur->prenomFrn = $prenom;
        $Fournisseur->telFrn = $telephone;
        $Fournisseur->emailFrn = $email;
        $Fournisseur->mdpFrn = $mot_de_passe;


        $last = $add->insert($Fournisseur);

        $fk = new AchtFrnMySqlDAO();
        $aa = new AchtFrn();
        $aa->idFrn = $last;
        $aa->idAcht = $_SESSION['idlogin'];
        $aa->dateAchtFrn = date("Y-m-d H:m:s");
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






