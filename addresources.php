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

        <title>Add Resources</title>

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
        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/structure/alerts.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/forms/advanced.min-v2.2.0.css">
        <link rel="stylesheet" href="global/vendor/ladda-bootstrap/ladda.min-v2.2.0.css">

        <!-- Page -->
        <link rel="stylesheet" href="assets/examples/css/uikit/buttons.min-v2.2.0.css">

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
                <h1 class="page-title">New Resource</h1>
            </div>
            <div class="page-content container-fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        </h3>
                    </div>
                    <div class="panel-body container-fluid">
                        <?php
                        require_once './AdminClass.php';
                        require_once './NotificationClass.php';
                        if (isset($_POST['upload_resource'])) {
                            $title = $_POST['title'];
                            $classification_no = $_POST['classificationno'];
                            $author = $_POST['author'];
                            $publisher = $_POST['publisher'];
                            $date_published = $_POST['datepublished']; //description
                            $description = $_POST['description']; //description
                            $keywords = $_POST['keywords']; //target_group
                            $target_group = $_POST['target_group']; //target_group

                            $language = $_POST['language']; //target_group
                            $themtic_area = $_POST['themtic_area']; //target_group
                            $subject = $_POST['subject']; //target_group
                            $grade = $_POST['grade']; //target_group
                            $doctype = $_POST['doctype']; //target_group
                            //type extensions pdf docx,doc,ppt,pptx txt csv xlsx xls mp4 mp3
                            $image = $_FILES['file']['name'];
                            $tmp_image = $_FILES["file"]["tmp_name"];
                            $target_dir = "resources/";
                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                            if ($doctype == 'pdf' && $imageFileType == 'pdf') {
                                $uploadOk = 'YES';
                            } else if ($doctype == 'power_point' && ( $imageFileType == 'pptx' || $imageFileType == 'ppt' )) {
                                $uploadOk = 'YES';
                            } else if ($doctype == 'excel' && ( $imageFileType == 'csv' || $imageFileType == 'xlsx' || $imageFileType == 'xls' )) {
                                $uploadOk = 'YES';
                            } else if ($doctype == 'word' && ( $imageFileType == 'docx' || $imageFileType == 'doc' )) {
                                $uploadOk = 'YES';
                            } else if ($doctype == 'video' && ( $imageFileType == 'mp4' || $imageFileType == 'mp3' )) {
                                $uploadOk = 'YES';
                            } else if ($doctype == 'video_book' && ( $imageFileType == 'mp4' || $imageFileType == 'mp3' )) {
                                $uploadOk = 'YES';
                            } else if ($doctype == 'audio' && ( $imageFileType == 'mp4' || $imageFileType == 'mp3' )) {
                                $uploadOk = 'YES';
                            } else {
                                $uploadOk = 'NO';
                            }
                            // Check if file already exists
                            if (file_exists($target_file)) {
                                print '<div class="alert dark alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>Sorry, file name already exists.Please rename your file then upload</div>';


                                $uploadOk = 'NO';
                            }
                            if ($uploadOk == 'NO') {
                                print '<div class="alert dark alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>Please you have to upload the right file based on the type you chose.Thank you.Couldnt upload resource.</div>';
                            } else {
                                if (move_uploaded_file($tmp_image, $target_dir . $image)) {
                                    $new_resource = new AdminClass();
                                    $new_resource->setresources($classification_no, $title, $author, $publisher, $date_published, $description, $keywords, $target_group, $language, $themtic_area, $subject, $grade, $doctype, $image);
                                }
                            }
                        }
                        ?>
                        <div class="row row-lg">
                            <form method="post" id="resoucesform" action="#" enctype="multipart/form-data">
                                <div class="col-sm-6 col-lg-5">
                                    <!-- Example Basic -->
                                    <div class="example-wrap">
                                        <h4 class="example-title">Resource Title</h4>
                                        <div class="example">
                                            <input type="text" class="form-control" name="title" id="title" required/>
                                        </div>

                                        <h4 class="example-title">Resource Classification Number</h4>
                                        <div class="example">
                                            <input type="text" class="form-control" name="classificationno" id="classificationno" required/>
                                        </div>

                                        <h4 class="example-title">Source/ Author</h4>
                                        <div class="example">
                                            <input type="text" class="form-control" name="author" id="author" required/>
                                        </div>
                                        <h4 class="example-title">Publisher/Producer</h4>
                                        <div class="example">
                                            <input type="text" class="form-control" name="publisher" id="publisher" required/>
                                        </div>

                                        <div class="example">
                                            <h4 class="example-title">Date Published/Produced</h4>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                                </span>
                                                <input type="text" class="form-control" data-plugin="datepicker"  id="datepublished" name="datepublished" required>
                                            </div>
                                        </div>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Description</h4>

                                            <div class="example">
                                                <textarea class="maxlength-textarea form-control" 
                                                          name="description"       rows="3" ></textarea>
                                            </div>
                                        </div>
                                        <div class="example">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Keywords:</span>
                                                    <input type="text" class="form-control" data-plugin="tokenfield" name="keywords[]"
                                                           />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Example Basic -->
                                    </div>

                                </div>

                                <div class="col-sm-1 col-lg-2">

                                </div>
                                <div class="col-sm-6 col-lg-5">
                                    <!-- Example Basic -->
                                    <div class="example-wrap">
                                        <h4 class="example-title">Target group</h4>
                                        <div class="example">
                                            <select data-plugin="selectpicker" name="target_group" data-live-search="true" onChange="getInfo(this.value)">
                                                <option value="">Select group</option>
                                                <?php
                                                $group = new AdminClass();
                                                $target_groups = $group->gettargetgroup();
                                                while ($row = mysql_fetch_assoc($target_groups)) {
                                                    echo '<option value=' . $row['id'] . '>' . $row['name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <h4 class="example-title">Language</h4>
                                        <div class="example">
                                            <select data-plugin="selectpicker" name="language[]" multiple data-live-search="true">
                                                <option value="">Select language</option>
                                                <?php
                                                $group = new AdminClass();
                                                $target_groups = $group->getlanguages();
                                                while ($row = mysql_fetch_assoc($target_groups)) {
                                                    echo '<option value=' . $row['name'] . '>' . $row['name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <h4 class="example-title">Thematic Area</h4>
                                        <div class="example">
                                            <select  name="themtic_area[]" data-plugin="selectpicker" id="thematic_area" multiple data-live-search="true">


                                            </select>
                                        </div>
                                        <h4 class="example-title">Subject</h4>
                                        <div class="example">
                                            <select data-plugin="selectpicker" name="subject[]" id="subject" multiple data-live-search="true">

                                            </select>
                                        </div>
                                        <h4 class="example-title">Grade/Level</h4>
                                        <div class="example">
                                            <select data-plugin="selectpicker" name="grade[]" id="grade" multiple data-live-search="true">

                                            </select>
                                        </div>
                                        <h4 class="example-title">Type</h4>
                                        <div class="example">
                                            <select data-plugin="selectpicker" name="doctype" data-live-search="true">
                                              
                                                <option value="video">Video</option>
                                                <option value="video_book">Video Book</option>
                                                <option value="pdf">Pdf</option>
                                                <option value="power_point">Power Point</option>
                                                <option value="excel">Excel</option>
                                                <option value="word">Word</option>
                                                <option value="audio">Audio</option>
                                            </select>
                                        </div>
                                        <h4 class="example-title">Resource File</h4>
                                        <div class="example">
                                            <input type="file" class="form-control" name="file" id="file" required/>

                                        </div>
                                        <!-- End Example Basic -->
                                    </div>

                                </div>  

                                <div class="row">
                                    <div class="pull-left">
                                        <button type="submit" class="btn btn-primary ladda-button" name="upload_resource" data-style="slide-up"
                                                data-plugin="ladda">
                                            <span class="ladda-label"><i class="icon md-long-arrow-up margin-right-10" aria-hidden="true"></i>Upload 
                                                Resource</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <!-- End Page -->


        <!-- Footer -->
        <?php
        require './footer.php';
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
        <!-- Plugins For This Page -->
        <script src="global/vendor/ladda-bootstrap/spin.min.js"></script>
        <script src="global/vendor/ladda-bootstrap/ladda.min.js"></script>
        <script src="global/js/components/buttons.min.js"></script>
        <script src="global/js/components/ladda-bootstrap.min.js"></script>


        <script src="assets/examples/js/uikit/button.min.js"></script>

        <script type="text/javascript">
                                                function getInfo(val) {

                                                    $.ajax({
                                                        type: "POST",
                                                        url: "getthematics.php",
                                                        data: 'target_group=' + val,
                                                        success: function (data) {

                                                            $("#thematic_area").html(data);
                                                            getSubject(val);
                                                            getGrade(val);
                                                            $('#thematic_area').selectpicker('refresh');


                                                        }
                                                    });
                                                }
                                                function getSubject(val) {
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "getsubject.php",
                                                        data: 'target_group=' + val,
                                                        success: function (data) {

                                                            $("#subject").html(data);
                                                            $('#subject').selectpicker('refresh');
                                                        }
                                                    });
                                                }
                                                function getGrade(val) {
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "getgrade.php",
                                                        data: 'target_group=' + val,
                                                        success: function (data) {

                                                            $("#grade").html(data);
                                                            $('#grade').selectpicker('refresh');
                                                        }
                                                    });
                                                }
        </script>
    </body>

</html>
<!-- Localized -->