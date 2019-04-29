<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> </title>
        <!-- Bootstrap -->
        <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="asset/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php
                include 'template.php';
                $rec = new ReclamationMySqlDAO();
                $rec = $rec->load($_GET['idRec']);
                $acht = new AcheteurMySqlDAO();
                $acht = $acht->load($rec->idAcht);
                $frn = new FournisseurMySqlDAO();
                $frn = $frn->load($rec->idFrn);
                $obj = new ObjetsMySqlDAO();
                $obj = $obj->queryByIdRec($_GET['idRec']);
                $pj = new PiecejointesMySqlDAO();
                $pj = $pj->queryByIdRec($_GET['idRec']);
                ?>
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Fiche de Réclamation</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>

                                    </div>
                                    <div id="notif_">
                                        <?php
                                        if (!empty($_SESSION['errorMSG'])) {
                                            echo $_SESSION['errorMSG'];
                                            unset($_SESSION['errorMSG']);
                                        }
                                        ?>
                                    </div>
                                    <div class="x_content">

                                        <form  method="POST" enctype="multipart/form-data" action="Controlleurs/update_rec.php">
                                            <input type="hidden" name="idRec" value="<?php echo $rec->idRec; ?>">
                                            <table border="1" cellspacing="0" cellpadding="0" align="left" width="730" style="margin-left: 10%">
                                                <tbody>
                                                    <tr>
                                                        <td width="362" rowspan="2" valign="top">
                                                            <p>
                                                                <img
                                                                    width="332"
                                                                    height="112"
                                                                    src="asset/img/rec.jpg"
                                                                    />
                                                            </p>
                                                        </td>
                                                        <td width="357" valign="bottom">
                                                            <p align="center">
                                                                <a name="_Toc1633131">Fiche de Réclamation</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="357">
                                                            <p align="center">
                                                                <strong>
                                                                    Date de réclamation : <?php echo $rec->dateRec; ?>
                                                                </strong>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2">
                                                            <p>
                                                                <strong>Réservé au FCA</strong>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="362" valign="top">
                                                            <table width="362" style="margin: 1%">
                                                                <tr>
                                                                    <td> <strong>Réalisé par :</strong></td>
                                                                    <td><strong><?php echo $acht->nomAcht . " " . $acht->prenomAcht; ?>  </strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Numéro de tél :</td><td><?php echo $acht->telAcht; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Email :</td><td><?php echo $acht->emailAcht; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fonction :</td><td> Acheteur</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="357" valign="top">
                                                            <table width="357" style="margin: 1%">
                                                                <tr>
                                                                    <td><strong>Fournisseur :</td><td> <?php echo $frn->nomFrn . " " . $frn->prenomFrn; ?>

                                                                        </strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Numéro de commande :</td><td><?php echo $rec->ncmdRec; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact principal :</td><td><?php echo $rec->contactRec; ?></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2" valign="top">
                                                            <p>
                                                                <strong>Objets possibles de la réclamation : </strong>
                                                            </p>
                                                            <p style="margin: 1%">
                                                                <?php
                                                                if ($obj[0]->retardObj) {
                                                                    echo "- Retard<br>";
                                                                }
                                                                if ($obj[0]->qteNCObj) {
                                                                    echo "- Quantité non conforme<br>";
                                                                }
                                                                if ($obj[0]->qltNCObj) {
                                                                    echo "- Qualité non conforme<br>";
                                                                }
                                                                if ($obj[0]->autreObj != null) {
                                                                    echo "- Autre: " . $obj[0]->autreObj;
                                                                }
                                                                ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2">
                                                            <p>
                                                                <strong>Date de</strong>
                                                                <strong>
                                                                    Réponse écrite souhaitée le : <?php echo $rec->dateRepRec; ?>
                                                                </strong>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2" valign="top">
                                                            <p>
                                                                <strong>Descriptif:</strong>
                                                            </p>
                                                            <p style="margin: 1%">
                                                                <?php echo $rec->descriptionRec; ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2" valign="top">
                                                            <p>
                                                                <strong>Pièces jointes si applicable : </strong>
                                                            </p>
                                                            <p style="margin: 1%">
                                                                <?php
                                                                if ($pj[0]->photoPj != null) {
                                                                    echo '- Photo: <a download class="btn btn-link" target=_blank href=Controlleurs/uploaded/' . $pj[0]->photoPj . '><i class="fa fa-download"></i> Telecharger </a><br>';
                                                                }
                                                                if ($pj[0]->emailPj != null) {
                                                                    echo '- Email: <a download class="btn btn-link" target=_blank href=Controlleurs/uploaded/' . $pj[0]->emailPj . '><i class="fa fa-download"></i> Telecharger </a><br>';
                                                                }
                                                                if ($pj[0]->bcPj != null) {
                                                                    echo '- Bon de commande: <a download class="btn btn-link" target=_blank href=Controlleurs/uploaded/' . $pj[0]->bcPj . '><i class="fa fa-download"></i> Telecharger </a><br>';
                                                                }
                                                                if ($pj[0]->blPj != null) {
                                                                    echo '- Bon de livraison: <a download class="btn btn-link" target=_blank href=Controlleurs/uploaded/' . $pj[0]->blPj . '><i class="fa fa-download"></i> Telecharger </a><br>';
                                                                }
                                                                if ($pj[0]->riPj != null) {
                                                                    echo '- Rapport d’inventaire: <a download class="btn btn-link" target=_blank href=Controlleurs/uploaded/' . $pj[0]->riPj . '><i class="fa fa-download"></i> Telecharger </a><br>';
                                                                }
                                                                if ($pj[0]->autrePj != null) {
                                                                    echo '- Autre: <a download class="btn btn-link" target=_blank href=Controlleurs/uploaded/' . $pj[0]->autrePj . '><i class="fa fa-download"></i> Telecharger </a><br>';
                                                                }
                                                                ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2">
                                                            <p>
                                                                <strong>Signature du FCA :</strong>
                                                            </p>
                                                        </td>
                                                    </tr>

                                                    <?php if ($_SESSION['cpt'] == "frn") { ?>
                                                        <tr>
                                                            <td width="730" colspan="2">
                                                                <p>
                                                                    <strong>Réservé au fournisseur </strong>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="730" colspan="2" valign="top">
                                                                <p>
                                                                    <strong>Actions à mettre en place : </strong>
                                                                </p>
                                                                <table border="1" cellspacing="0" cellpadding="0" width="694">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="199" valign="top">
                                                                                <p>
                                                                                    Action
                                                                                </p>
                                                                            </td>
                                                                            <td width="94" valign="top">
                                                                                <p>
                                                                                    Qui
                                                                                </p>
                                                                            </td>
                                                                            <td width="105" valign="top">
                                                                                <p>
                                                                                    Quand
                                                                                </p>
                                                                            </td>
                                                                            <td width="295" valign="top">
                                                                                <p>
                                                                                    Commentaire
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                        if ($rec->etatRec == "En cours") {
                                                                            for ($i = 0; $i < 3; $i++) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td width="199" valign="top">
                                                                                        <input type="text" name="<?php echo '_action' . $i ?>">
                                                                                    </td>
                                                                                    <td width="94" valign="top">
                                                                                        <input type="text" name="<?php echo '_qui' . $i ?>">
                                                                                    </td>
                                                                                    <td width="105" valign="top">
                                                                                        <input type="text" name="<?php echo '_quand' . $i ?>">
                                                                                    </td>
                                                                                    <td width="295" valign="top">
                                                                                        <textarea rows="2" name="<?php echo '_comm' . $i ?>"></textarea>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                            }
                                                                        } else {

                                                                            include_once 'include_dao.php';
                                                                            $action = new ActionMySqlDAO();
                                                                            $action = $action->queryByIdRec($_GET['idRec']);
                                                                            foreach ($action as $value) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td width="199" valign="top">
                                                                                        <?php echo $value->actionAct; ?>
                                                                                    </td>
                                                                                    <td width="94" valign="top">
                                                                                        <?php echo $value->quiAct; ?>
                                                                                    </td>
                                                                                    <td width="105" valign="top">
                                                                                        <?php echo $value->quandAct; ?>
                                                                                    </td>
                                                                                    <td width="295" valign="top">
                                                                                        <?php echo $value->commAct; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <p>
                                                                    <strong></strong>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="730" colspan="2" valign="top">
                                                                <p>
                                                                    <strong>
                                                                        Quelles seraient les dispositions à prendre pour éviter
                                                                        que le problème ne se reproduise ? :
                                                                    </strong>
                                                                </p>
                                                                <table border="1" cellspacing="0" cellpadding="0" width="697">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="200" valign="top">
                                                                                <p>
                                                                                    Action
                                                                                </p>
                                                                            </td>
                                                                            <td width="95" valign="top">
                                                                                <p>
                                                                                    Qui
                                                                                </p>
                                                                            </td>
                                                                            <td width="105" valign="top">
                                                                                <p>
                                                                                    Quand
                                                                                </p>
                                                                            </td>
                                                                            <td width="297" valign="top">
                                                                                <p>
                                                                                    Commentaire
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                        if ($rec->etatRec == "En cours") {
                                                                            for ($i = 0; $i < 3; $i++) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td width="199" valign="top">
                                                                                        <input type="text" name="<?php echo '_action_' . $i ?>">
                                                                                    </td>
                                                                                    <td width="94" valign="top">
                                                                                        <input type="text" name="<?php echo '_qui_' . $i ?>">
                                                                                    </td>
                                                                                    <td width="105" valign="top">
                                                                                        <input type="text" name="<?php echo '_quand_' . $i ?>">
                                                                                    </td>
                                                                                    <td width="295" valign="top">
                                                                                        <textarea rows="2" name="<?php echo '_comm_' . $i ?>"></textarea>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                            }
                                                                        } else {
                                                                            include_once 'include_dao.php';
                                                                            $disp = new DispositionMySqlDAO();
                                                                            $disp = $disp->queryByIdRec($_GET['idRec']);
                                                                            foreach ($disp as $value) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td width="199" valign="top">
                                                                                        <?php echo $value->actionDisp; ?>
                                                                                    </td>
                                                                                    <td width="94" valign="top">
                                                                                        <?php echo $value->quiDisp; ?>
                                                                                    </td>
                                                                                    <td width="105" valign="top">
                                                                                        <?php echo $value->quandDisp; ?>
                                                                                    </td>
                                                                                    <td width="295" valign="top">
                                                                                        <?php echo $value->commDisp; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="730" colspan="2">
                                                                <p>
                                                                    <strong>Signature du fournisseur : </strong>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    if ($rec->etatRec == "En cours") {
                                                        ?>
                                                        <tr>
                                                            <td width="730" colspan="2" style="text-align: right;">
                                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Modifier</button>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>



                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Salma  <a href="#"></a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <?php include 'script.php'; ?>

    </body>
</html>
