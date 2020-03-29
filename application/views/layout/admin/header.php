<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?=ucfirst($site);?> | <?=$page;?></title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/bootstrap/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?=base_url('assets');?>/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?=base_url('assets');?>/css/animate.css">

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/toast/toastr.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?=base_url('assets');?>/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/iCheck/line/_all.css">

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/flag-icon/css/flag-icon.min.css">

  

  <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/dropzone/dropzone.min.css">

  <script src="<?=base_url('assets');?>/plugins/dropzone/dropzone.js"></script>

  <script src="<?=base_url('assets');?>/plugins/jquery/dist/jquery.min.js"></script>

  <script src="<?=base_url('assets');?>/plugins/toast/toastr.min.js"></script>
  <script src="<?=base_url('assets');?>/js/clipboard.min.js"></script>

  <script type="text/javascript">

    $(function () {
      new ClipboardJS('.btn');

      <?=$this->session->flashdata('pesan');?>

    });

  </script>



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">

<!-- Site wrapper -->

<div class="wrapper">



  <header class="main-header">

    <!-- Logo -->

    <a href="../../index2.html" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>SSS</b></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><?=ucfirst($site);?></span>

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

          <li onclick="window.open('<?=base_url();?>','_blank')">

            <a href="#" data-toggle="control-sidebar"><i class="fa fa-eye"></i> View Website</a>

          </li>

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="<?=base_url('assets');?>/img/user2-160x160.jpg" class="user-image" alt="User Image">

              <span class="hidden-xs"><?=ucfirst($this->session->userdata('admin_username'));?></span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                <img src="<?=base_url('assets');?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">



                <p>

                  <?=ucfirst($this->session->userdata('admin_username'));?>

                  <small><?=date("D, d M Y H:i:s", strtotime($this->session->userdata('last_login')));?></small>

                </p>

              </li>

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                  <a href="#" class="btn btn-default btn-flat">Settings</a>

                </div>

                <div class="pull-right">

                  <a href="<?=base_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>

                </div>

              </li>

            </ul>

          </li>

        </ul>

      </div>

    </nav>

  </header>



  <!-- =============================================== -->



  <!-- Left side column. contains the sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>

        <li class="<?=$this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>"><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>        

        <li class="<?=$this->uri->segment(2) == 'users' ? 'active' : ''; ?>"><a href="<?=base_url('admin/users');?>"><i class="fa fa-user"></i> <span>Users</span></a></li> 

        <li class="<?=$this->uri->segment(2) == 'home_slider' ? 'active' : ''; ?>"><a href="<?=base_url('admin/home_slider');?>"><i class="fa fa-circle-o"></i> Home Slider</a></li>

        <!-- <li class="treeview <?=$this->uri->segment(2) == 'history' || $this->uri->segment(2) == 'onfarm_img' || $this->uri->segment(2) == 'processing' || $this->uri->segment(2) == 'processing_img' ? 'active' : ''; ?>">

          <a href="#">

            <i class="fa fa-home"></i> <span>Home Settings</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?=$this->uri->segment(2) == 'history' ? 'active' : ''; ?>"><a href="<?=base_url('admin/history');?>"><i class="fa fa-circle-o"></i> History</a></li>

            

            <li class="<?=$this->uri->segment(2) == 'onfarm' ? 'active' : ''; ?>"><a href="<?=base_url('admin/onfarm');?>"><i class="fa fa-circle-o"></i> OnFarm</a></li>

            <li class="<?=$this->uri->segment(2) == 'onfarm_img' ? 'active' : ''; ?>"><a href="<?=base_url('admin/onfarm_img');?>"><i class="fa fa-circle-o"></i> OnFarm Image</a></li> 

            <li class="<?=$this->uri->segment(2) == 'processing' ? 'active' : ''; ?>"><a href="<?=base_url('admin/processing');?>"><i class="fa fa-circle-o"></i> Processing</a></li>

            <li class="<?=$this->uri->segment(2) == 'processing_img' ? 'active' : ''; ?>"><a href="<?=base_url('admin/processing_img');?>"><i class="fa fa-circle-o"></i> Processing Image</a></li>

            <li class="<?=$this->uri->segment(2) == 'home_slider' ? 'active' : ''; ?>"><a href="<?=base_url('admin/home_slider');?>"><i class="fa fa-circle-o"></i> Home Slider</a></li>


          </ul>

        </li>  -->    

        <!-- <li class="<?=$this->uri->segment(2) == 'kemitraan' ? 'active' : ''; ?>"><a href="<?=base_url('admin/kemitraan');?>"><i class="fa fa-user"></i> <span>Kemitraan</span></a></li>  -->

        <li class="treeview <?=$this->uri->segment(2) == 'profile' || $this->uri->segment(2) == 'OurClient' ? 'active' : ''; ?>">

          <a href="#">

            <i class="fa fa-user"></i> <span>Company Profile</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?=$this->uri->segment(2) == 'profile' ? 'active' : ''; ?>"><a href="<?=base_url('admin/profile');?>"><i class="fa fa-circle-o"></i> Profile</a></li>

            <!-- <li class="<?=$this->uri->segment(2) == 'OurClient' ? 'active' : ''; ?>"><a href="<?=base_url('admin/OurClient');?>"><i class="fa fa-circle-o"></i> Our Client</a></li> -->

          </ul>

        </li>

        <li class="<?=$this->uri->segment(2) == 'video' || $this->uri->segment(2) == 'video_upload' ? 'active' : ''; ?>"><a href="<?=base_url('admin/video');?>"><i class="fa fa-video-camera"></i> <span>Video</span></a></li>   

        <li class="<?=$this->uri->segment(2) == 'gallery' ? 'active' : ''; ?>"><a href="<?=base_url('admin/gallery');?>"><i class="fa fa-file-image-o"></i> <span>Galeri</span></a></li>   
        <li class="<?=$this->uri->segment(2) == 'activity' ? 'active' : ''; ?>"><a href="<?=base_url('admin/activity');?>"><i class="fa fa-tasks"></i> <span>Kegiatan</span></a></li>   


        <!-- <li class="<?=$this->uri->segment(2) == 'joinus' ? 'active' : ''; ?>"><a href="<?=base_url('admin/joinus');?>"><i class="fa fa-users"></i> <span>JoinUs</span></a></li>  

        <li class="<?=$this->uri->segment(2) == 'faq' ? 'active' : ''; ?>"><a href="<?=base_url('admin/faq');?>"><i class="fa fa-question-circle"></i> <span>FAQ</span></a></li>  -->

        <li class="<?=$this->uri->segment(2) == 'news' ? 'active' : ''; ?>"><a href="<?=base_url('admin/news');?>"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li> 

      </ul>

    </section>

    <!-- /.sidebar -->

  </aside>



   <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

      <!-- Content Header (Page header) -->

      <section class="content-header">

        <h1>

          <?=$page;?>

          <small><?=$this->uri->segment(2) != "" && !is_numeric($this->uri->segment(2)) ? ucfirst($this->uri->segment(2)) : "it all starts here";?></small>

        </h1>

        <ol class="breadcrumb">

          <li><a href="<?=base_url('admin/dashboard');?>"><?=ucfirst($this->uri->segment(1) == "admin" ? "Dashboard" : "home");?></a></li>

          <?=$this->uri->segment(2) != "" ? '<li class="active">'.ucfirst($this->uri->segment(2)).'</li>' : "";?>

          <?=$this->uri->segment(2) != "" && !is_numeric($this->uri->segment(2)) ? '<li class="active">'.ucfirst($this->uri->segment(2)).'</li>' : "";?>

        </ol>

      </section>



      <!-- Main content -->

      <section class="content">