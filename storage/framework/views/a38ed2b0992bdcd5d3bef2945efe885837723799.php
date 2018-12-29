<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title> DSS - Trial </title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('asset/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('asset/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('asset/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('asset/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendors/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('asset/build/css/custom.min.css')); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <script src="<?php echo e(asset('asset/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/select2/dist/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')); ?>"></script>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo e(url('/')); ?>" class="site_title"><i class="fa fa-paw"></i> <span> DSS - Trial </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo e(Auth::user()->name); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           
            <!-- /sidebar menu -->

           
          
          
       
