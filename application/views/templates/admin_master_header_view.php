<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CMS PCC">
        <meta name="author" content="pccnf21@gmail.com">
        <title><?php echo $page_title;?></title>
        <?php echo $before_head;?>
        
        <link href="<?php echo base_url('assets/admin/vendor/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/vendor/fonts/css/font-awesome.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/vendor/css/animate.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/vendor/css/pnotify.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/vendor/css/pnotify.buttons.css')?>" rel="stylesheet">
        <!--Ultimo -->
        <link href="<?php echo base_url('assets/admin/vendor/css/custom.min.css')?>" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                        </div>

                        <div class="clearfix"></div>
                        <div class="profile clearfix">
                        <div class="profile_info text-center">
                            <span>Bem Vindo,</span>
                            <h2><?php echo $current_user->username?></h2>
                        </div>
                        </div>
                        <br />
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo site_url('admin/');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a></li>
                                    <?php echo $current_user_menu?>
                                </ul>
                            </div> 
                        </div>                    
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="<?php echo site_url('admin/user/logout');?>">Sair <i class="fa fa-sign-out"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">