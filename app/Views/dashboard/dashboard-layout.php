<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Run Application | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <?= $this->renderSection('css-styles') ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url('public/dashboard') ?>/index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b>R</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Home</b>Run</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('public/dashboard') ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('public/dashboard') ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    User Full Name
                    <!-- <small>Member since Nov. 2012</small> -->
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Followers</a> -->
                    </div>
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Sales</a> -->
                    </div>
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Friends</a> -->
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('public/dashboard') ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview <?= (url_is('dashboard'))? 'active': '' ?>">
            <a href="<?= base_url() ?>dashboard">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          

          <!--  -->
          <li class="treeview <?= (url_is('dashboard/users*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Users Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/users/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/users/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/users/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/users/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/users/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/users/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>
          

          <!--  -->
          <li class="treeview <?= (url_is('dashboard/orders*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Orders Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/orders/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/orders/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/orders/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/orders/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/orders/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/orders/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>
          

          <!--  -->
          <li class="treeview <?= (url_is('dashboard/contracts*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Contracts Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/contracts/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/contracts/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/contracts/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/contracts/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/contracts/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/contracts/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>
          

          <!--  -->
          <li class="treeview <?= (url_is('dashboard/technicians*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Technicians Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/technicians/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/technicians/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/technicians/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/technicians/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/technicians/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/technicians/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>

          <li class="header">SETTINGS NAVIGATION</li>


          <!--  -->
          <li class="treeview <?= (url_is('dashboard/settings/roomtypes*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Room types</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/settings/roomtypes/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/roomtypes/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/settings/roomtypes/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/roomtypes/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/settings/roomtypes/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/roomtypes/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>



          <!--  -->
          <li class="treeview <?= (url_is('dashboard/settings/Designsprices*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Designs and prices</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/settings/Designsprices/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/Designsprices/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/settings/Designsprices/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/Designsprices/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/settings/Designsprices/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/Designsprices/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>



          

          <!--  -->
          <li class="treeview <?= (url_is('dashboard/settings/services*'))? 'active': '' ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Services</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?= (url_is('dashboard/settings/services/create'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/services/create">
                  <i class="fa fa-plus-circle"></i> Create New
                </a>
              </li>
              <li class="<?= (url_is('dashboard/settings/services/list'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/services/list">
                  <i class="fa fa-list"></i> List
                </a>
              </li>
              <!-- <li class="<?= (url_is('dashboard/settings/services/trash'))? 'active': '' ?>">
                <a href="<?= base_url() ?>dashboard/settings/services/trash">
                  <i class="fa fa-trash"></i> Trash
                </a>
              </li> -->
            </ul>
          </li>




        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <?= $this->renderSection('content') ?>

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2023-2024 <a href="###">Home run application</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?= base_url('public/dashboard') ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url('public/dashboard') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?= base_url('public/dashboard') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('public/dashboard') ?>/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('public/dashboard') ?>/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('public/dashboard') ?>/dist/js/demo.js"></script>

  <?= $this->renderSection('js-scripts') ?>

</body>

</html>