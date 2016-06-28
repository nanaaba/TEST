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

        <title>Subject</title>

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
        <link rel="stylesheet" href="global/vendor/select2/select2.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-select/bootstrap-select.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/icheck/icheck.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/switchery/switchery.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/asrange/asRange.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/asspinner/asSpinner.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/clockpicker/clockpicker.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/ascolorpicker/asColorPicker.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-touchspin/bootstrap-touchspin.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/card/card.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/jquery-labelauty/jquery-labelauty.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-datepicker/bootstrap-datepicker.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/bootstrap-maxlength/bootstrap-maxlength.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/jt-timepicker/jquery-timepicker.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/jquery-strength/jquery-strength.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/multi-select/multi-select.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/typeahead-js/typeahead.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/ladda-bootstrap/ladda.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/forms/advanced.min-v2.2.0.css">
        <link rel="stylesheet" href="assets/examples/css/uikit/modals.min-v2.2.0.css">
        <!-- Plugins For This Page -->
        <link rel="stylesheet" href="global/vendor/datatables-bootstrap/dataTables.bootstrap.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/datatables-fixedheader/dataTables.fixedHeader.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/datatables-responsive/dataTables.responsive.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/tables/datatable.min-v2.2.0.css">

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
                <h1 class="page-title">Subject</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Admin</a></li>

                    <li class="active">Subject</li>
                </ol>

            </div>
            <div class="page-content container-fluid">
                <?php
                require_once './AdminClass.php';
                if (isset($_POST['add'])) {
                    $name = $_POST['subject'];
                    $target_group = $_POST['target_group'];
                    $new_group = new AdminClass();
                    $new_group->setsubjectname($name, $target_group);
                }
                ?>





                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">Subject</h3>
                    </header>
                    <div class=" pull-right" style="margin-bottom: 15px;padding-right: 20px;">
                        <button class="btn btn-info" data-target="#exampleNiftySlideFromRight" data-toggle="modal"
                                type="button">New Subject</button>
                    </div>
                    <div class="panel-body" >

                        <table class="table table-hover dataTable table-striped width-full" id="exampleTableSearch">
                            <thead>
                                <tr>

                                    <th>Subject</th>
                                    <th>Target Group</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $group = new AdminClass();
                                $allgroup = $group->getsubject();
                                while ($row = mysql_fetch_assoc($allgroup)) {
                                    echo '<tr>'
                                    . '<td>' . $row['name'] . '</td>'
                                            . '<td>' . $row['group_name'] . '</td>'
                                    . '<td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                            <i class="icon md-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                            <i class="icon md-close" aria-hidden="true"></i>
                          </button>
                        </td>'
                                    . '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade modal-slide-in-right" id="exampleNiftySlideFromRight" aria-hidden="true"
                     aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="exampleFormModalLabel">New Subject</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group">   
                                        <h4 class="example-title">Target Group</h4>
                                        <div class="example">
                                            <select data-plugin="selectpicker" name="target_group" data-live-search="true">
                                                <?php
                                                require_once './AdminClass.php';
                                                $group = new AdminClass();
                                                $target_groups = $group->gettargetgroup();
                                                while ($row = mysql_fetch_assoc($target_groups)) {
                                                    echo '<option value=' . $row['id'] . '>' . $row['name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="subject Name">
                                    </div>


                                    <div class="col-sm-12 pull-left">
                                        <button class="btn btn-primary" name="add"  type="submit">Add </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Modal -->
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
        <script src="global/vendor/select2/select2.min.js"></script>
        <script src="global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
        <script src="global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="global/vendor/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="global/vendor/icheck/icheck.min.js"></script>
        <script src="global/vendor/switchery/switchery.min.js"></script>
        <script src="global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="global/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="global/vendor/ascolor/jquery-asColor.min.js"></script>
        <script src="global/vendor/asgradient/jquery-asGradient.min.js"></script>
        <script src="global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
        <script src="global/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="global/vendor/jquery-knob/jquery.knob.min.js"></script>
        <script src="global/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="global/vendor/card/jquery.card.js"></script>
        <script src="global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
        <script src="global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="global/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
        <script src="global/vendor/datepair-js/datepair.min.js"></script>
        <script src="global/vendor/datepair-js/jquery.datepair.min.js"></script>
        <script src="global/vendor/jquery-strength/jquery-strength.min.js"></script>
        <script src="global/vendor/multi-select/jquery.multi-select.js"></script>
        <script src="global/vendor/typeahead-js/bloodhound.min.js"></script>
        <script src="global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.min.js"></script>

        <script src="global/vendor/ladda-bootstrap/spin.min.js"></script>
        <script src="global/vendor/ladda-bootstrap/ladda.min.js"></script>

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

        <script src="global/js/components/select2.min.js"></script>
        <script src="global/js/components/bootstrap-tokenfield.min.js"></script>
        <script src="global/js/components/bootstrap-tagsinput.min.js"></script>
        <script src="global/js/components/bootstrap-select.min.js"></script>
        <script src="global/js/components/icheck.min.js"></script>
        <script src="global/js/components/switchery.min.js"></script>
        <script src="global/js/components/asrange.min.js"></script>
        <script src="global/js/components/asspinner.min.js"></script>
        <script src="global/js/components/clockpicker.min.js"></script>
        <script src="global/js/components/ascolorpicker.min.js"></script>
        <script src="global/js/components/bootstrap-maxlength.min.js"></script>
        <script src="global/js/components/jquery-knob.min.js"></script>
        <script src="global/js/components/bootstrap-touchspin.min.js"></script>
        <script src="global/js/components/card.min.js"></script>
        <script src="global/js/components/jquery-labelauty.min.js"></script>
        <script src="global/js/components/bootstrap-datepicker.min.js"></script>
        <script src="global/js/components/jt-timepicker.min.js"></script>
        <script src="global/js/components/datepair-js.min.js"></script>
        <script src="global/js/components/jquery-strength.min.js"></script>
        <script src="global/js/components/multi-select.min.js"></script>
        <script src="global/js/components/jquery-placeholder.min.js"></script>


        <script src="assets/examples/js/forms/advanced.min.js"></script>
        <script src="global/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="global/vendor/datatables-bootstrap/dataTables.bootstrap.min.js"></script>
        <script src="global/vendor/datatables-responsive/dataTables.responsive.js"></script>
        <script src="global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
        <script src="global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="global/vendor/bootbox/bootbox.js"></script>

        <script src="global/js/components/datatables.min.js"></script>
        <script src="assets/examples/js/tables/datatable.min.js"></script>
        <script src="assets/examples/js/uikit/icon.min.js"></script>

      
    </body>

</html>
<!-- Localized -->