<?php
session_start();
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

        <title>Discussions</title>

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

        <!-- Plugins For This Page -->
        <link rel="stylesheet" href="global/vendor/plyr/plyr.min-v2.2.0.css">

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
    <body class=" site-navbar-small">
        <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->


        <?php
        require_once './topbar.php';
        require_once './navbar.php';
        ?>

        <!-- Page -->
        <div class="page animsition">
            <div class="page-header">
                <h1 class="page-title">Joined Discussions</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>

                    <li class="active">Discussions</li>
                </ol>

            </div>
            <div class="page-content container-fluid">
                <div class="row" data-plugin="masonry">




                    <!-- Widget With Audio -->
                    <?php
                    require_once './DiscusionClass.php';
                    $discussion = new DiscusionClass();
                    $alldiscussion = $discussion->getuserjoineddiscussions();
                    while ($row = mysql_fetch_assoc($alldiscussion)) {
                        ?>  
                        <div class="col-md-4 col-xs-12 masonry-item">
                            <div class="widget widget-article widget-shadow">
                                <div class="widget-body">
                                    <h3 class="widget-title"><?php echo $row['title'] ?></h3>
                                    <p class="widget-metas"><?php echo $row['date'] ?></p>
                                      <p><?php echo  $discussion->displaylimitecharacters($row['message'], 100); ?> </p>
                                  <div class="widget-body-footer">
                                        <a class="btn btn-info" href="discussion_detatil.php?discusion_id=<?php echo $row['discusson_id'] ?>">JOIN DISCUSSION</a>
                                        <div class="widget-actions pull-right">

                                            <a href="javascript:void(0)">
                                                <i class="icon md-comment"></i>
                                                <span><?php echo $row['total_comments'] ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget With Audio --><?php
                    }
                    ?>



                </div>
            </div>
        </div>
        <!-- End Page -->


        <!-- Footer -->
        <?php
        require_once './footer.php';
        ?>
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
        <script src="global/vendor/plyr/plyr.js"></script>
        <script src="global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="global/vendor/masonry/masonry.pkgd.min.js"></script>

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

        <script src="global/js/components/plyr.min.js"></script>
        <script src="global/js/components/matchheight.min.js"></script>
        <script src="global/js/components/masonry.min.js"></script>


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