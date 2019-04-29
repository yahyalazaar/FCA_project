<?php
session_start();
if (empty($_SESSION['emailLogin'])) {
    header("location: login.php");
}
include_once 'include_dao.php';
$nom = '';
if ($_SESSION['cpt'] == 'admin') {
    $get = new AdminMySqlDAO();
    $user = $get->queryByEmailAdmin($_SESSION['emailLogin']);
    $nom = $user[0]->nomAdmin . " " . $user[0]->prenomAdmin;
} else if ($_SESSION['cpt'] == 'frn') {
    $get = new FournisseurMySqlDAO();
    $user = $get->queryByEmailFrn($_SESSION['emailLogin']);
    $nom = $user[0]->nomFrn . " " . $user[0]->prenomFrn;
} else if ($_SESSION['cpt'] == 'acht') {
    $get = new AcheteurMySqlDAO();
    $user = $get->queryByEmailAcht($_SESSION['emailLogin']);
    $nom = $user[0]->nomAcht . " " . $user[0]->prenomAcht;
} else if ($_SESSION['cpt'] == 'wm') {
    $get = new WebmasterMySqlDAO();
    $user = $get->queryByEmailWm($_SESSION['emailLogin']);
    $nom = $user[0]->nomWm . " " . $user[0]->prenomWm;
}
?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Salma Project!</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="asset/img/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenue,</span>
                <h2><?php echo $nom; ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <?php if ($_SESSION['cpt'] == 'admin') { ?>
                        <li><a href="admins.php"><i class="fa fa-user"></i>Admins</a></li>
                        <li><a href="acheteurs.php"><i class="fa fa-user"></i>Acheteurs</a></li>
                        <li><a href="webMaster.php"><i class="fa fa-user"></i>Web Master</a></li>
                        <li><a href="segements.php"><i class="fa fa-archive"></i>Segments</a></li>
                        <li><a href="familleAchats.php"><i class="fa fa-group"></i>Familles d'achats</a></li>
                    <?php } else if ($_SESSION['cpt'] == 'acht') { ?>
                        <li><a href="fournisseurs.php"><i class="fa fa-user"></i>Fournisseurs</a></li>
                    <?php } if ($_SESSION['cpt'] == 'frn') { ?>
                        <li><a href="allReclamation.php"><i class="fa fa-warning"></i>Réclamations</a></li>
                        <li><a href="#"><i class="fa fa-file-text-o"></i>RFI</a></li>
                    <?php } else if ($_SESSION['cpt'] == 'acht') { ?>
                        <li><a href="reclamation.php"><i class="fa fa-warning"></i>Réclamations</a></li>
                    <?php } ?>
                    <li><a href="eval_am.php"><i class="fa fa-file-text"></i>Évaluation en amont</a></li>
                    <li><a href="eval_av.php"><i class="fa fa-file-text"></i>Évaluation en aval</a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Profile">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Déconnexion" href="Controlleurs/deconnexion.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="asset/img/user.png" alt=""><?php echo $nom; ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li><a href="Controlleurs/deconnexion.php"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a></li>
                    </ul>
                </li>
                <!--
                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>-->
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
