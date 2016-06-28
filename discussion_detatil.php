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

        <title>Discussion Detail</title>

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
        <link rel="stylesheet" href="global/vendor/tasklist/tasklist.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/widgets/data.min-v2.2.0.css">

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
                <h1 class="page-title">Discussions</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="javascript:void(0)">Discussion</a></li>
                    <li class="active">Discussion Detail</li>
                </ol>

            </div>

            <?php
            require_once './DiscusionClass.php';
            $post_id = $_GET['discusion_id'];
            $discussion_info = new DiscusionClass();
            $discussions = $discussion_info->getdiscussiondetail($post_id);
            $message = mysql_result($discussions, 0, 'message');
            $comments = $discussion_info->getdiscussioncomments($post_id);
            $total_comments = mysql_num_rows($comments);
            ?>

            <div class="page-content container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-10">
                        <!-- Panel Labelauty -->
                        <div class="panel">
                            <header class="panel-heading">
                                <h3 class="panel-title">TOPIC

                                </h3>
                            </header>
                            <div class="panel-body container-fluid">
                                <?php
                                echo $message;
                                ?>
                            </div>
                        </div>
                        <!-- End Panel Labelauty -->
                    </div>
                    <div class="col-lg-1">

                    </div>
                </div>
                <div class="row">




                    <div class="col-md-12 col-xs-12 masonry-item">
                        <!-- Panel Daily Feed -->
                        <div class="panel" id="daily-feed">
                            <div class="panel-heading">
                                <h3 class="panel-title">Comments
                                    <span class="pull-right label label-round label-warning"><?php echo $total_comments; ?> Messages</span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group list-group-dividered comments list-group-full">
                                    <?php
                                    $post_id = $_GET['discusion_id'];
                                    $discussion = new DiscusionClass();
                                    $alldiscussions = $discussion->getdiscussioncomments($post_id);
                                    while ($row = mysql_fetch_assoc($alldiscussions)) {
                                          $_SESSION['numrows'] = $total_comments;
                                          $_SESSION['discussion_id'] =$post_id;
                                        ?>  
                                    <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="avatar avatar-away" href="javascript:void(0)">
                                                        <img src="global/portraits/7.jpg" alt=""><i></i></a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <small class="pull-right">6h ago</small>
                                                        <a class="name"><?php echo $row['membername'] ?></a> posted message 
                                                        <!--                                                        <a class="name">Nathan Watts</a> site.-->
                                                    </h4>
                                                    <small><?php echo $row['datecommented'] ?></small>
                                                    <div class="content well">
                                                        <?php echo $row['comments'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                            <?php
                                    }
                                    ?>


                                </ul>
                                <!--                                 <div class="clearfix"></div>
                                                                <button type="button" class="btn btn-block btn-primary"><i class="icon md-chevron-down margin-right-5" aria-hidden="true"></i>Show
                                                                    More</button>-->
                                <form method="post" id="commentform">
                                    <div class="form-group">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Enter comments here ..." rows="3" required></textarea>
                                    </div>
                                    <input type="hidden" name="post_id" value="<?php echo $_GET['discusion_id']?>"/>
                                    <button type="submit" class="btn btn-primary btn-sm pull-right">Post</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>

                        </div>
                        <!-- End Panel Daily Feed -->
                    </div>




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
        <script src="global/vendor/peity/jquery.peity.min.js"></script>
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

        <script src="global/js/components/peity.min.js"></script>
        <script src="global/js/components/tasklist.min.js"></script>
        <script src="global/js/components/masonry.min.js"></script>


        <script src="assets/examples/js/charts/peity.min.js"></script>

        <script src="global/js/customize.js"></script>

        <!-- Google Analytics -->
       <script type="text/javascript">
            function pullnoty() {
              
                var urll = 'pulldiscussioncomments.php';
                $.ajax({
                    url: urll,
                    cache: false,
                    success: function (html) {

                        if (html != 0) {
                            $(".comments").html(html); //Insert chat log into the #chatbox div	
                            
                        }
                    }
                });
            }
            setInterval(pullnoty, 500);	//Reload file every 2500 ms or
        </script>
    </body>

</html>
<!-- Localized -->