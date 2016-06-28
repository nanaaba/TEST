<?php
session_start();
?><!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap material admin template">
        <meta name="author" content="">

        <title>Resources</title>

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
        <link rel="stylesheet" href="global/vendor/bootstrap-sweetalert/sweet-alert.min-v2.2.0.css">

        <!-- Plugins For This Page -->
        <link rel="stylesheet" href="global/vendor/bootstrap-select/bootstrap-select.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/apps/documents.min-v2.2.0.css">

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
    <body class="app-documents site-navbar-small">
        <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->
        <?php
        require_once './topbar.php';
        require_once './navbar.php';
        ?>

        <div class="page animsition">
            <div class="page-header">
                <h1 class="page-title margin-bottom-10">Resources Search </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Resources</li>
                </ol>
            </div>
            <div class="page-content">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <select data-plugin="selectpicker" id="doctypee" name="doctype" >
                                <option value="all">All resources</option>
                                <option value="video">Video</option>
                                <option value="video_book">Video Book</option>
                                <option value="pdf">Pdf</option>
                                <option value="power_point">Power Point</option>
                                <option value="excel">Excel</option>
                                <option value="word">Word</option>
                                <option value="audio">Audio</option>
                            </select>
                        </div>
                        <button type="submit" class="input-search-btn">
                            <i class="icon md-search" aria-hidden="true"></i>
                        </button>
                        <input type="text" class="form-control" id="searchval" placeholder="Search the knowledge base...">
                    </div>

                </div>

                <div class="row row-lg col-lg-12">
                    <div class="col-sm-6 col-lg-4 ">
                        <h4 class="example-title"></h4>
                        <div class="example">
                            <div class="margin-top-15">

                                <button type="button" id="searchbtn" class="btn btn-primary btn-block btn-round waves-effect waves-round waves-light" data-style="expand-left"
                                        >
                                    <span class=""><i class="margin-right-10" aria-hidden="true"></i>Search</span>
                                </button>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-6 col-lg-4 ">
                        <h4 class="example-title"></h4>
                        <div class="example">
                            <div class="margin-top-15">

                                <a href="advancedsearch.php" id="advanced_search" class="btn btn-primary btn-block btn-round waves-effect waves-round waves-light" data-style="expand-left">
                                    <span class=""><i class="margin-right-10" aria-hidden="true"></i>Advanced Search</span>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row row-lg col-lg-12"> 
                    <div class="documents-wrap categories" data-plugin="animateList" data-child="li">
                        <ul class="blocks blocks-100 blocks-xlg-4 blocks-md-3 blocks-xs-2 searchresults" data-plugin="matchHeight">


                        </ul>
                    </div>
                </div>
            </div>
        </div>


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
        <script src="global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="global/vendor/bootstrap-select/bootstrap-select.min.js"></script>

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

        <script src="global/js/components/matchheight.min.js"></script>
        <script src="global/js/components/bootstrap-select.min.js"></script>
        <script src="global/js/components/animate-list.min.js"></script>

        <script src="global/vendor/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <script src="assets/examples/js/apps/documents.min.js"></script>
        <script src="assets/js/customize.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {




                $('#searchbtn').click(function () {
                    var searchval = $('#searchval').val();
                    var doctype = $('#doctypee').val();

                    var info = {
                        'searchval': searchval,
                        'doctype': doctype
                    };
                    $.ajax({
                        url: 'basicresourcesearch.php',
                        type: "POST",
                        data: info,
                        success: function (data) {
                            $(".searchresults").html(data);

                        },
                        error: function (jXHR, textStatus, errorThrown) {
                            alert(errorThrown);
                        }
                    });
                });
            });
        </script>
    </body>

</html>
<!-- Localized -->