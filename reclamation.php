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
                $user = new AcheteurMySqlDAO();
                $user = $user->load($_SESSION['idlogin']);
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

                                        <form  method="POST" enctype="multipart/form-data" action="Controlleurs/add_rec.php">
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
                                                                    Date de réclamation : <?php echo date("d/m/Y") ?>
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
                                                                    <td><strong><?php echo $user->nomAcht . " " . $user->prenomAcht; ?>  </strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Numéro de tél :</td><td><?php echo $user->telAcht; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Email :</td><td><?php echo $user->emailAcht; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fonction :</td><td> Acheteur</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="357" valign="top">
                                                            <table width="357" style="margin: 1%">
                                                                <tr>
                                                                    <td><strong>Fournisseur :</td><td> <select name="frn" required="">
                                                                            <?php
                                                                            $frn = new FournisseurMySqlDAO();
                                                                            $all_frn = $frn->queryAll();
                                                                            foreach ($all_frn as $value) {
                                                                                ?>
                                                                                <option value="<?php echo $value->idFrn; ?>"><?php echo $value->nomFrn . " " . $value->prenomFrn; ?></option>
                                                                            <?php } ?>
                                                                        </select>

                                                                        </strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Numéro de commande :</td><td><input type="text" name="nc" required=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact principal :</td><td><input type="text" name="contact" required=""></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2" valign="top">
                                                            <p>
                                                                <strong>Objets possibles de la réclamation : </strong>
                                                            </p>
                                                            <table style="margin: 2%" width='730'>
                                                                <tr>
                                                                    <td><input type="checkbox" name="retard" >Retard </td>
                                                                    <td><input type="checkbox" name="qtenc" >Quantité non conforme </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> <input type="checkbox" name="qltnc" >Qualité non conforme</td>
                                                                    <td> <input type="checkbox" name="autreObjc" id="autreObjc">Autres : 
                                                                        <input type="text" name="autreObj" id="autreObj" required="">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2">
                                                            <p>
                                                                <strong>Date de</strong>
                                                                <strong>
                                                                    Réponse écrite souhaitée le : <input type="date" name="dateRep">
                                                                </strong>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2" valign="top">
                                                            <p>
                                                                <strong>Descriptif:</strong>
                                                            </p>
                                                            <p>
                                                                <textarea rows="4" style="width: 98%;margin: 1%" name="description">
                                                                
                                                                </textarea>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2" valign="top">
                                                            <p>
                                                                <strong>Pièces jointes si applicable : </strong>
                                                            </p>
                                                            <table style="margin: 1%" border='1' >
                                                                <tr>
                                                                    <td><input type="checkbox" name="blc" id="blc"> </td>
                                                                    <td>Bon de livraison</td>
                                                                    <td><input type="file" name="bl" id="bl"> </td>

                                                                    <td><input type="checkbox" name="photoc" id="photoc"> </td>
                                                                    <td>Photo</td>
                                                                    <td><input type="file" name="photo" id="photo"> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" name="emailc" id="emailc"> </td>
                                                                    <td>Email</td>
                                                                    <td><input type="file" name="email" id="emailf"> </td>

                                                                    <td><input type="checkbox" name="bcc" id="bcc"> </td>
                                                                    <td>Bon de commande</td>
                                                                    <td><input type="file" name="bc" id="bc"> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="checkbox" name="ric" id="ric"> </td>
                                                                    <td>Rapport d'inventaire</td>
                                                                    <td><input type="file" name="ri" id="ri"> </td>

                                                                    <td><input type="checkbox" name="autrepjc" id="autrepjc"> </td>
                                                                    <td>Autres :</td>
                                                                    <td><input type="file" name="autrepj" id="autrepj"> </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="730" colspan="2">
                                                            <p>
                                                                <strong>Signature du FCA :</strong>
                                                            </p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td width="730" colspan="2" style="text-align: right;">
                                                            <button type="reset" class="btn btn-primary">Cancel</button>
                                                            <button  type="submit" class="btn btn-success">Submit</button>

                                                        </td>
                                                    </tr>
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
