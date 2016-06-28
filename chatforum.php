<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>Chat Forum</title>

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
  <link rel="stylesheet" href="assets/examples/css/apps/message.min-v2.2.0.css">

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
<body class="app-message page-aside-scroll site-navbar-small">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <?php
        require_once './topbar.php';
        require_once './navbar.php';
        ?>

  <div class="page animsition">
    <!-- Message Sidebar -->
    <div class="page-aside">
      <div class="page-aside-switch">
        <i class="icon md-chevron-left" aria-hidden="true"></i>
        <i class="icon md-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner">
        <div class="input-search">
          <button class="input-search-btn" type="submit">
            <i class="icon md-search" aria-hidden="true"></i>
          </button>
          <form>
            <input class="form-control" type="text" placeholder="Search Keyword" name="">
          </form>
        </div>

        <div class="app-message-list" data-plugin="pageAsideScroll">
          <div data-role="container">
            <div data-role="content">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-online" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/1.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Kerem Sure</h4>
                      <span class="media-time">15 sec ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger">3</span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-online" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/2.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Eric hoffman</h4>
                      <span class="media-time">1 minutes ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-online" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/3.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Eddie Lobanovskiy</h4>
                      <span class="media-time">5 minutes ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-online" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/4.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Bill S Kenney</h4>
                      <span class="media-time">15 minutes ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger">5</span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item active">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-away" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/5.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Derek Bradley</h4>
                      <span class="media-time">40 minutes ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-away" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/6.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Mariusz Ciesla</h4>
                      <span class="media-time">2 hours ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-online" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/7.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Jesse Dodds</h4>
                      <span class="media-time">3 hours ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-off" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/8.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Gerren Lamson</h4>
                      <span class="media-time">3 hours ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-off" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/9.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Daniel Waldron</h4>
                      <span class="media-time">5 hours ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-off" href="javascript:void(0)">
                        <img class="img-responsive" src="global/portraits/10.jpg"
                        alt="..."><i></i></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Celikovic</h4>
                      <span class="media-time">7 hours ago</span>
                    </div>
                    <div class="media-right">
                      <span class="badge badge-danger"></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Message Sidebar -->
    <div class="page-main">
      <div class="panel">
        <div class="panel-header">
          <div class="panel-title">
            <a class="pull-left" href="javascript:void(0)">
              <i class="icon md-chevron-left" aria-hidden="true"></i>
            </a>
            <div class="text-right">
              Conversation with June Lane
              <a class="avatar margin-left-15" data-toggle="tooltip" href="#" data-placement="left"
              title="June Lane">
                <img src="global/portraits/4.jpg" alt="...">
              </a>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <!-- Chat Box -->
          <div class="chats-wrap">
            <button type="button" id="historyBtn" class="btn btn-round btn-default">Load Old Messages</button>
            <div class="chats">
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-content" data-toggle="tooltip" title="8:30 am">
                    <p>
                      Hello. What can I do for you?
                    </p>
                  </div>
                </div>
              </div>
              <div class="chat chat-right">
                <div class="chat-body">
                  <div class="chat-content" data-toggle="tooltip" title="8:35 am">
                    <p>
                      I'm just looking around.
                    </p>
                    <p>Will you tell me something about yourself? </p>
                  </div>
                  <div class="chat-content" data-toggle="tooltip" title="8:40 am">
                    <p>
                      Are you there? That time!
                    </p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-content" data-toggle="tooltip" title="8:35 am">
                    <p>
                      Where?
                    </p>
                  </div>
                  <div class="chat-content" data-toggle="tooltip" title="8:42 am">
                    <p>
                      OK, my name is Limingqiang. I like singing, playing basketballand so on.
                    </p>
                  </div>
                </div>
              </div>
              <div class="chat chat-right">
                <div class="chat-body">
                  <div class="chat-content" data-toggle="tooltip" title="8:49 am">
                    <p>You wait for notice.</p>
                  </div>
                  <div class="chat-content" data-toggle="tooltip" title="8:50 am">
                    <p>Consectetuorem ipsum dolor sit?</p>
                  </div>
                  <div class="chat-content" data-toggle="tooltip" title="8:55 am">
                    <p>OK?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-content" data-toggle="tooltip" title="9:00 am">
                    <p>OK!</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- End Chat Box -->
        </div>
      </div>

      <!-- Message Input-->
      <form class="app-message-input">
        <div class="input-group form-material">
          <span class="input-group-btn">
            <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-camera"></a>
          </span>
          <input class="form-control" type="text" placeholder="Type message here ...">
          <span class="input-group-btn">
            <button type="button" class="btn btn-pure btn-default icon md-mail-send"></button>
          </span>
        </div>
      </form>
      <!-- End Message Input-->

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
  <script src="global/vendor/slidepanel/jquery-slidePanel.min.js"></script>
  <script src="global/vendor/autosize/autosize.min.js"></script>

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


  <script src="assets/js/app.min.js"></script>

  <script src="assets/examples/js/apps/message.min.js"></script>



</body>

</html>
<!-- Localized -->