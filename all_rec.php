<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Bootstrap -->
        <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css"
              rel="stylesheet">
        <!-- Font Awesome -->
        <link href="asset/vendors/font-awesome/css/font-awesome.min.css"
              rel="stylesheet">
        <!-- NProgress -->
        <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link
            href="asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
            rel="stylesheet">
        <!-- JQVMap -->
        <link href="asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
        <!-- bootstrap-daterangepicker -->
        <link href="asset/vendors/bootstrap-daterangepicker/daterangepicker.css"
              rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="asset/build/css/custom.min.css" rel="stylesheet">
        <!-- Datatables -->
        <link
            href="asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"
            rel="stylesheet">
        <link
            href="asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
            rel="stylesheet">
        <link
            href="asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
            rel="stylesheet">
        <link
            href="asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
            rel="stylesheet">
        <link
            href="asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
            rel="stylesheet">

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include 'template.php'; ?>
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Liste des Fournisseurs</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle"
                                                                    data-toggle="dropdown" role="button" aria-expanded="false"><i
                                                        class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a></li>
                                                    <li><a href="#">Settings 2</a></li>
                                                </ul></li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable-buttons"
                                               class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom</th>
                                                    <th>Prénom</th>
                                                    <th>Émail</th>
                                                    <th>Réclamation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once 'include_dao.php';
                                                $frn = new FournisseurMySqlDAO();
                                                $frn = $frn->queryAll();
                                                foreach ($frn as $value) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $value->idFrn; ?></td>
                                                        <td><?php echo $value->nomFrn; ?></td>
                                                        <td><?php echo $value->prenomFrn; ?></td>
                                                        <td><?php echo $value->emailFrn; ?></td>
                                                        <td style="width: 20%">
                                                            <a class="btn btn-link" href="reclamation.php?frn=<?php echo$value->idFrn; ?>"><i class="fa fa-edit"></i> Créer réclamation</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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
                        FCA <a href="#"></a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <?php include 'script.php'; ?>

    </body>

</html>