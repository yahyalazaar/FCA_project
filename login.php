<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! |</title>

        <!-- Bootstrap -->
        <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css"
              rel="stylesheet">
        <!-- Font Awesome -->
        <link href="asset/vendors/font-awesome/css/font-awesome.min.css"
              rel="stylesheet">
        <!-- NProgress -->
        <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="asset/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="asset/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a> <a class="hiddenanchor"
                                                        id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <div id="notif_"> </div>
                        <form id="login_form" method="post">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username"
                                       required="" name="login" />
                            </div>
                            <div>
                                <input type="password" class="form-control"
                                       placeholder="Password" required="" name="pwd" />
                            </div>
                            <div>
                                <button class="btn btn-default submit" id="login_btn" type="button">Log in</button> <a
                                    class="reset_pass" href="#">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1>
                                        <i class="fa fa-paw"></i> Salma
                                    </h1>
                                    <p>©2019 All Rights Reserved. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script src="asset/vendors/jquery/dist/jquery.min.js"></script>
        <script src="Controlleurs/scripts/script.js"></script>
    </body>
</html>
