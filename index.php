<?php
ob_start();
session_start();

if (isset($_GET['logout']) == "logout") {
    session_destroy(); // DESTROY ALL SESSION VARIABLES
    ?>
    <script type="text/javascript">

        window.location = "index.php";</script>
    <?php
}


$_SESSION['login_valid'] = "NO";
$_SESSION['user_id'] = "";
$_SESSION['name'] = "";
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap material admin template">
        <meta name="author" content="">

        <title>Login</title>

        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="global/css/bootstrap.min-v2.2.0.css">
        <link rel="stylesheet" href="global/css/bootstrap-extend.min-v2.2.0.css">
        <link rel="stylesheet" href="assets/css/site.min-v2.2.0.css">


        <!-- Plugins -->
        <link rel="stylesheet" href="global/vendor/animsition/animsition.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/switchery/switchery.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/intro-js/introjs.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/waves/waves.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/pages/login-v2.min-v2.2.0.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="global/fonts/material-design/material-design.min-v2.2.0.css">
        <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min-v2.2.0.css">

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>


        <!--[if lt IE 9]>
          <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
          <![endif]-->

        <!--[if lt IE 10]>
          <script src="global/vendor/media-match/media.match.min.js"></script>
          <script src="global/vendor/respond/respond.min.js"></script>
          <![endif]-->

        <!-- Scripts -->
        <script src="global/vendor/modernizr/modernizr.min.js"></script>
        <script src="global/vendor/breakpoints/breakpoints.min.js"></script>
        <script>
    Breakpoints();
        </script>
    </head>
    <body class="page-login-v2 layout-full page-dark">
        <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->


        <!-- Page -->
        <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
            <div class="page-content">
                <div class="page-brand-info">
                    <div class="brand">
                        <img class="brand-img" src="assets/images/logo@2x.png" alt="...">
                        <h2 class="brand-text font-size-40">Open Learning Exchange</h2>
                    </div>
                    <p class="font-size-20">

                    </p>
                </div>

                <div class="page-login-main">
                    <div class="brand visible-xs">
                        <img class="brand-img" src="assets/images/logo-blue@2x.png" alt="...">
                        <h3 class="brand-text font-size-40">OLE</h3>
                    </div>
                    <h3 class="font-size-24">Sign In</h3>
                    <?php
                    require_once './AdminClass.php';
                    require_once './LoginClass.php';
                    if (isset($_POST['login'])) {
                        $school_name = $_POST['school_name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $login = new LoginClass();
                        $login->login($school_name, $email, $password);
                    }
                    ?>

                    <form method="post"  autocomplete="off">
                        <div class="form-group form-material floating" >
                            <select class="form-control input-lg" name="school_name" required>

                                <option>Select School</option>
                                <?php
                                $schools = new AdminClass();
                                $allschools = $schools->getschools();
                                while ($row = mysql_fetch_assoc($allschools)) {
                                    echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group form-material floating">
                            <input type="email" class="form-control empty" id="inputEmail" name="email" required>
                            <label class="floating-label" for="inputEmail">Email</label>
                        </div>
                        <div class="form-group form-material floating">
                            <input type="password" class="form-control empty" id="inputPassword" name="password" required>
                            <label class="floating-label" for="inputPassword">Password</label>
                        </div>
                        <div class="form-group clearfix">
                            <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                                <input type="checkbox" id="remember" name="checkbox">
                                <label for="inputCheckbox">Remember me</label>
                            </div>
                            <a class="pull-right" href="#">Forgot password?</a>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
                    </form>

                    <p>No account? <a href="register.php">Sign Up</a></p>

                    <!--                    <footer class="page-copyright">
                                            <p>WEBSITE BY amazingSurge</p>
                                            <p>© 2016. All RIGHT RESERVED.</p>
                                           
                                        </footer>-->
                </div>

            </div>
        </div>
        <!-- End Page -->


        <!-- Core  -->
        <script src="global/vendor/jquery/jquery.min.js"></script>
        <script src="global/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="global/vendor/animsition/animsition.min.js"></script>
        <script src="global/vendor/asscroll/jquery-asScroll.min.js"></script>
        <script src="global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
        <script src="global/vendor/asscrollable/jquery.asScrollable.all.min.js"></script>
        <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.min.js"></script>
        <script src="global/vendor/waves/waves.min.js"></script>

        <!-- Plugins -->
        <script src="global/vendor/switchery/switchery.min.js"></script>
        <script src="global/vendor/intro-js/intro.min.js"></script>
        <script src="global/vendor/screenfull/screenfull.min.js"></script>
        <script src="global/vendor/slidepanel/jquery-slidePanel.min.js"></script>

        <!-- Plugins For This Page -->
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.min.js"></script>

        <!-- Scripts -->
        <script src="global/js/core.min.js"></script>
        <script src="assets/js/site.min.js"></script>

        <script src="assets/js/sections/menu.min.js"></script>
        <script src="assets/js/sections/menubar.min.js"></script>
        <script src="assets/js/sections/sidebar.min.js"></script>

        <script src="global/js/configs/config-colors.min.js"></script>
        <script src="assets/js/configs/config-tour.min.js"></script>

        <script src="global/js/components/asscrollable.min.js"></script>
        <script src="global/js/components/animsition.min.js"></script>
        <script src="global/js/components/slidepanel.min.js"></script>
        <script src="global/js/components/switchery.min.js"></script>
        <script src="global/js/components/tabs.min.js"></script>

        <script src="global/js/components/jquery-placeholder.min.js"></script>
        <script src="global/js/components/material.min.js"></script>


        <script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
        </script>


        <!-- Google Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js',
                    'ga');

            ga('create', 'UA-65522665-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>

</html>
<!-- Localized -->