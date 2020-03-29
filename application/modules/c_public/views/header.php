<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ari Rusmanto">
    <title>beaie.id - Responsive Landing Page</title>
    
    <!-- CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/style-responsive.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/third/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/third/hovericon/css/component.css');?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    </head>
    
    <!-- BODY WITH DATA STYPE FOR SCROLLSPY -->
    <body class="tooltips" id="top" data-spy="scroll" data-target="#myScrollspy">
    
    <!-- START PAGE -->
    <div class="wrapper">
    
        <!-- 
        ===========================================
        BEGIN HEADER SECTION
        ===========================================
        -->
        <div id="header-landing">
            
            <!-- NAV MENU WRAPPER FOR FIXED POSITION -->
            <div id="nav-menu">
                <!-- NAV MENU CONTAINER -->
                <div class="container">
                    <!-- LOGO -->
                    <div id="logo">
                        <img src="<?=base_url('assets/img/beaie.svg');?>" onclick="location.href='<?=base_url();?>'" style="width: 35%;">
                    </div><!-- /#logo -->
                    <!-- END LOGO -->
                    <!-- NAV MENU -->
                    <div class="menus" id="myScrollspy">
                        <ul class="nav scroll-nav">
                            <li class="active"><a href="#top"><i class="fa fa-home"></i><span>Home</span></a></li>
                            <li><a href="#services"><i class="fa fa-cog"></i><span>Services</span></a></li>
                            <li><a href="#portfolio"><i class="fa fa-flask"></i><span>Portfolio</span></a></li>
                            <li><a href="#contact"><i class="fa fa-envelope"></i><span>Contact</span></a></li>
                            <li><a href="#aboutus"><i class="fa fa-laptop"></i><span>About Us</span></a></li>
                        </ul>
                    </div><!-- /.menus -->
                    <!-- END NAV MENU -->
                </div><!-- /.container -->
                <!-- END NAV MENU CONTAINER -->
            </div><!-- /.nav-menu -->
            <!-- END NAV MENU FIXED POSITION -->

        </div><!-- /.header-landing -->