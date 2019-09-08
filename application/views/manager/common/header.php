<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Seagull Publications</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap.min.css">
  <!-- Font Awesome --> 
   <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/dataTables.bootstrap.min.css"> 
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap-timepicker.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap3-wysihtml5.min.css">
  

  <script src="<?=base_url();?>assets/dashboard/js/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/dashboard/chart.js/Chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Bootstrap 3.3.7 -->




  


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url('manager/dashboard');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Seagull</b> Publications</span>
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
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url();?>assets/dashboard/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?='Admin'//$sess=$this->session->userdata('man')[0]['name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url();?>assets/dashboard/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  ydf
                  <small>ydry</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('manager/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="<?=base_url();?>assets/dashboard/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="<?=site_url('students/stdaction')?>" method="POST" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Student ID...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li><a href="<?=site_url('manager');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>User Complaint</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/view-user-complaints');?>"><i class="fa fa-circle-o"></i> View User Complaints</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>User Message</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/view-user-message');?>"><i class="fa fa-circle-o"></i> View User Message</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>E-commerce</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('product/add_product_category');?>"><i class="fa fa-circle-o"></i> Add Product Category</a></li>
            <li><a href="<?=site_url('product/view_product_category');?>"><i class="fa fa-circle-o"></i> Product Category</a></li>
            <li><a href="<?=site_url('product/add_product_subcategory');?>"><i class="fa fa-circle-o"></i> Add Product SubCategory</a></li>
            <li><a href="<?=site_url('product/view_product_subcategory');?>"><i class="fa fa-circle-o"></i> Product SubCategory</a></li> 
            <li><a href="<?=site_url('product/add_product');?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="<?=site_url('product/view_product');?>"><i class="fa fa-circle-o"></i> View Product</a></li>         </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>News Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('news/add_news_category');?>"><i class="fa fa-circle-o"></i> Add news Category</a></li>
            <li><a href="<?=site_url('news/view_news_category');?>"><i class="fa fa-circle-o"></i> news Category</a></li>
            <li><a href="<?=site_url('news/add_news');?>"><i class="fa fa-circle-o"></i> Add news</a></li>
            <li><a href="<?=site_url('news/view_news');?>"><i class="fa fa-circle-o"></i> View news</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Book Manuscript</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('book_manuscript/submitted_books');?>"><i class="fa fa-circle-o"></i> View Book</a></li>
            <li><a href="<?=site_url('book_manuscript/view_book');?>"><i class="fa fa-circle-o"></i> View event</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Event Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('events/add_events');?>"><i class="fa fa-circle-o"></i> Add event</a></li>
            <li><a href="<?=site_url('events/view_events');?>"><i class="fa fa-circle-o"></i> View event</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Journal Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('journal/add_journal_category');?>"><i class="fa fa-circle-o"></i> Add Journal Category</a></li>
            <li><a href="<?=site_url('journal/view_journal_category');?>"><i class="fa fa-circle-o"></i> View Journal Category</a></li>
            <li><a href="<?=site_url('journal/add_journal_subcategory');?>"><i class="fa fa-circle-o"></i> Add Journal Subcategory</a></li>
            <li><a href="<?=site_url('journal/view_journal_subcategory');?>"><i class="fa fa-circle-o"></i> View Journal Subcategory</a></li>
            <li><a href="<?=site_url('journal/add_journal');?>"><i class="fa fa-circle-o"></i> Add Journal</a></li>
            <li><a href="<?=site_url('journal/view_journal');?>"><i class="fa fa-circle-o"></i> View Journal</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Editor Requests</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/view_editor_request');?>"><i class="fa fa-circle-o"></i> View Editor Request</a></li>
          </ul>
        </li>

        

      <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Book Reviewer</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/add_reviewer');?>"><i class="fa fa-circle-o"></i> Add a Reviewer</a></li>
            <li><a href="<?=site_url('manager/view_reviewer');?>"><i class="fa fa-circle-o"></i> View Reviewer</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Book Member</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/add_member');?>"><i class="fa fa-circle-o"></i> Add a Member</a></li>
            <li><a href="<?=site_url('manager/view_member');?>"><i class="fa fa-circle-o"></i> View Member</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Proposed Journal</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/view_propose_journal');?>"><i class="fa fa-circle-o"></i> View Proposed Journal</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Publisher Management</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('manager/view_publisher');?>"><i class="fa fa-circle-o"></i> View Publisher</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">