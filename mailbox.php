<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap material admin template">
        <meta name="author" content="">

        <title>Mailbox</title>

        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="global/css/bootstrap.min-v2.2.0.css">
        <link rel="stylesheet" href="global/css/bootstrap-extend.min-v2.2.0.css">
        <link rel="stylesheet" href="assets/css/site.min-v2.2.0.css">

        <!-- Skin tools (demo site only) -->
        <!--  <link rel="stylesheet" href="global/css/skintools.min-v2.2.0.css">
          <script src="assets/js/sections/skintools.min.js"></script>-->

        <!-- Plugins -->
        <link rel="stylesheet" href="global/vendor/animsition/animsition.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/switchery/switchery.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/intro-js/introjs.min-v2.2.0.css">
        <!--  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min-v2.2.0.css">-->
        <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/waves/waves.min-v2.2.0.css">

        <!-- Plugins For This Page -->
        <!--  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min-v2.2.0.css">-->
        <link rel="stylesheet" href="global/vendor/bootstrap-markdown/bootstrap-markdown.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/select2/select2.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/apps/mailbox.min-v2.2.0.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="global/fonts/material-design/material-design.min-v2.2.0.css">
        <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min-v2.2.0.css">

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>

        <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.min-v2.2.0.css">

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
    <body class="app-mailbox site-navbar-small">
        <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

        <?php
        require_once './topbar.php';
        require_once './navbar.php';
        ?>


        <div class="page bg-white animsition">

            <!-- Mailbox Sidebar -->
            <div class="page-aside">
                <div class="page-aside-switch">
                    <i class="icon md-chevron-left" aria-hidden="true"></i>
                    <i class="icon md-chevron-right" aria-hidden="true"></i>
                </div>
                <div class="page-aside-inner" data-plugin="pageAsideScroll">
                    <div data-role="container">
                        <div data-role="content">
                            <div class="page-aside-section">
                                <div class="list-group">
                                    <a class="list-group-item active" href="javascript:void(0)">
                                        <span class="badge badge-danger">6</span><i class="icon md-inbox" aria-hidden="true"></i>Inbox</a>
                                    <a class="list-group-item" href="javascript:void(0)"><i class="icon md-email" aria-hidden="true"></i>Sent</a>
                                    <a class="list-group-item" href="javascript:void(0)">
                                        <span class="badge badge-info">2</span><i class="icon md-edit" aria-hidden="true"></i>Draft</a>
                            
                                    <a class="list-group-item" href="javascript:void(0)"><i class="icon md-delete" aria-hidden="true"></i>Trash</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Mailbox Content -->
            <div class="page-main">

                <!-- Mailbox Header -->
                <div class="page-header">
                    <h1 class="page-title">Mailbox</h1>
                    <div class="page-header-actions">
                        <form>
                            <div class="input-search input-search-dark">
                                <i class="input-search-icon md-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Mailbox Content -->
                <div class="page-content page-content-table" data-selectable="selectable">

                    <!-- Actions -->
                    <div class="page-content-actions">
                        <div class="pull-right filter">
                            <span>Filter :</span>
                            <div class="dropdown">
                                <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                    Check all
                                    <span class="icon md-chevron-down" aria-hidden="true"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right animation-scale-up animation-top-right animation-duration-250"
                                    role="menu">
                                    <li><a href="javascript:void(0)">Check all</a></li>
                                    <li><a href="javascript:void(0)">Check read</a></li>
                                    <li><a href="javascript:void(0)">Check unread</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)">Check starred</a></li>
                                    <li><a href="javascript:void(0)">Check unstarred</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="actions-main">
                            <span class="checkbox-custom checkbox-primary checkbox-lg inline-block vertical-align-bottom">
                                <input type="checkbox" class="mailbox-checkbox selectable-all" id="select_all"
                                       />
                                <label for="select_all"></label>
                            </span>
                            <div class="btn-group btn-group-flat">
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" type="button"><i class="icon md-folder" aria-hidden="true" data-toggle="tooltip"
                                                                           data-original-title="Folder" data-container="body" title=""></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="javascript:void(0)">work</a></li>
                                        <li><a href="javascript:void(0)">Family</a></li>
                                        <li><a href="javascript:void(0)">Private</a></li>
                                        <li><a href="javascript:void(0)">Friends</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Trash</a></li>
                                        <li><a href="javascript:void(0)">Spam</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" type="button"><i class="icon md-tag" aria-hidden="true" data-toggle="tooltip"
                                                                           data-original-title="Tag" data-container="body" title=""></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="javascript:void(0)">work</a></li>
                                        <li><a href="javascript:void(0)">Family</a></li>
                                        <li><a href="javascript:void(0)">Private</a></li>
                                        <li><a href="javascript:void(0)">Friends</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mailbox -->
                    <table id="mailboxTable" class="table" data-plugin="animateList" data-animate="fade"
                           data-child="tr">
                        <tbody>

                            <tr data-url="panel.tpl" data-toggle="slidePanel">
                                <td class="cell-60">
                                    <span class="checkbox-custom checkbox-primary checkbox-lg">
                                        <input type="checkbox" class="mailbox-checkbox selectable-item" id="mail_1"/>
                                        <label for="mail_1"></label>
                                    </span>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <span class="checkbox-important checkbox-default">
                                        <input type="checkbox" class="mailbox-checkbox mailbox-important" id="mail_1_important"/>
                                        <label for="mail_1_important"></label>
                                    </span>
                                </td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:void(0)"><img class="img-responsive" src="global/portraits/11.jpg" alt="..."></a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">Gwendolyn Wheeler</div>
                                        <div class="abstract"></div>
                                    </div>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <i class="icon md-attachment-alt" aria-hidden="true"></i>
                                </td>
                                <td class="cell-130">
                                    <div class="time">1 day ago</div>
                                    <div class="identity"><i class="md-circle " aria-hidden="true"></i></div>
                                </td>
                            </tr>
                            <tr data-url="panel.tpl" data-toggle="slidePanel">
                                <td class="cell-60">
                                    <span class="checkbox-custom checkbox-primary checkbox-lg">
                                        <input type="checkbox" class="mailbox-checkbox selectable-item" id="mail_2"/>
                                        <label for="mail_2"></label>
                                    </span>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <span class="checkbox-important checkbox-default">
                                        <input type="checkbox" class="mailbox-checkbox mailbox-important" id="mail_2_important"/>
                                        <label for="mail_2_important"></label>
                                    </span>
                                </td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:void(0)"><img class="img-responsive" src="global/portraits/12.jpg" alt="..."></a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">Daniel Russell</div>
                                        <div class="abstract"></div>
                                    </div>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <i class="icon md-attachment-alt" aria-hidden="true"></i>
                                </td>
                                <td class="cell-130">
                                    <div class="time">2 days ago</div>
                                    <div class="identity"><i class="md-circle " aria-hidden="true"></i></div>
                                </td>
                            </tr>
                            <tr data-url="panel.tpl" data-toggle="slidePanel">
                                <td class="cell-60">
                                    <span class="checkbox-custom checkbox-primary checkbox-lg">
                                        <input type="checkbox" class="mailbox-checkbox selectable-item" id="mail_3"/>
                                        <label for="mail_3"></label>
                                    </span>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <span class="checkbox-important checkbox-default">
                                        <input type="checkbox" class="mailbox-checkbox mailbox-important" id="mail_3_important"/>
                                        <label for="mail_3_important"></label>
                                    </span>
                                </td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:void(0)"><img class="img-responsive" src="global/portraits/13.jpg" alt="..."></a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">Sarah Graves</div>
                                        <div class="abstract"></div>
                                    </div>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <i class="icon md-attachment-alt" aria-hidden="true"></i>
                                </td>
                                <td class="cell-130">
                                    <div class="time">3 days ago</div>
                                    <div class="identity"><i class="md-circle " aria-hidden="true"></i></div>
                                </td>
                            </tr>
                            <tr data-url="panel.tpl" data-toggle="slidePanel">
                                <td class="cell-60">
                                    <span class="checkbox-custom checkbox-primary checkbox-lg">
                                        <input type="checkbox" class="mailbox-checkbox selectable-item" id="mail_4"/>
                                        <label for="mail_4"></label>
                                    </span>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <span class="checkbox-important checkbox-default">
                                        <input type="checkbox" class="mailbox-checkbox mailbox-important" id="mail_4_important"/>
                                        <label for="mail_4_important"></label>
                                    </span>
                                </td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:void(0)"><img class="img-responsive" src="global/portraits/14.jpg" alt="..."></a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">Andrew Hoffman</div>
                                        <div class="abstract"></div>
                                    </div>
                                </td>
                                <td class="cell-30 responsive-hide">
                                    <i class="icon md-attachment-alt" aria-hidden="true"></i>
                                </td>
                                <td class="cell-130">
                                    <div class="time">4 days ago</div>
                                    <div class="identity"><i class="md-circle " aria-hidden="true"></i></div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- pagination -->
                    <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
                </div>
            </div>
        </div>

        <div class="site-action">
            <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
                <i class="front-icon md-edit animation-scale-up" aria-hidden="true"></i>
                <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
            </button>
            <div class="site-action-buttons">
                <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                    <i class="icon md-delete" aria-hidden="true"></i>
                </button>
                <button type="button" data-action="inbox" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                    <i class="icon md-inbox" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Create New Messages Modal -->
        <div class="modal fade" id="addMailForm" aria-hidden="true" aria-labelledby="addMailForm"
             role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Send Message</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <select id="topicTo" class="form-control" data-plugin="select2" multiple="multiple"
                                        data-placeholder="To:">
                                    <optgroup label="">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group form-material floating">
                                <input type="text" class="form-control empty" name="inputFloatingEmail">
                                <label class="floating-label">Subject</label>
                            </div>
                            <div class="form-group">
                                <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer text-left">
                        <button class="btn btn-primary" data-dismiss="modal" type="submit">Send</button>
                        <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Create New Messages Modal -->

        <!-- Add Label Form -->
        <div class="modal fade" id="addLabelForm" aria-hidden="true" aria-labelledby="addLabelForm"
             role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Add New Label</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lablename" placeholder="Label Name"
                                       />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
                        <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Label Form -->


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
        <script src="global/vendor/select2/select2.min.js"></script>
      <!--  <script src="global/vendor/slidepanel/jquery-slidePanel.min.js"></script>-->
        <script src="global/vendor/bootstrap-markdown/bootstrap-markdown.js"></script>
        <script src="global/vendor/marked/marked.min.js"></script>
        <script src="global/vendor/to-markdown/to-markdown.js"></script>
        <script src="global/vendor/aspaginator/jquery.asPaginator.min.js"></script>
        <script src="global/vendor/bootbox/bootbox.js"></script>

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
      <!--  <script src="global/js/components/slidepanel.min.js"></script>-->
        <script src="global/js/components/switchery.min.js"></script>
        <script src="global/js/components/tabs.min.js"></script>

        <script src="global/js/components/select2.min.js"></script>
        <script src="global/js/components/aspaginator.min.js"></script>
        <script src="global/js/components/animate-list.min.js"></script>
        <script src="global/js/plugins/action-btn.min.js"></script>
        <script src="global/js/plugins/selectable.min.js"></script>
        <script src="global/js/components/selectable.min.js"></script>
        <script src="global/js/components/material.min.js"></script>
        <script src="global/js/components/bootbox.min.js"></script>


        <script src="assets/js/app.min.js"></script>

        <script src="assets/examples/js/apps/mailbox.min.js"></script>



    </body>

</html>
<!-- Localized -->