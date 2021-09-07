<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=  $site_title ?>! | </title>

    <!-- Bootstrap -->
    <link href="<?= BASE_URL ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= BASE_URL ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= BASE_URL ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= BASE_URL ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="<?= BASE_URL ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= BASE_URL ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= BASE_URL ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">



    <!-- Datatables -->
    <link href="<?= BASE_URL ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">



    <!-- Custom Theme Style -->
    <link href="<?= BASE_URL ?>assets_admin/css/custom.css" rel="stylesheet">
    <script src="<?= BASE_URL ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= BASE_URL ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= BASE_URL ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= BASE_URL ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= BASE_URL ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= BASE_URL ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= BASE_URL ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= BASE_URL ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= BASE_URL ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= BASE_URL ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?= BASE_URL ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= BASE_URL ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= BASE_URL ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= BASE_URL ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= BASE_URL ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= BASE_URL ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= BASE_URL ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= BASE_URL ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= BASE_URL ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= BASE_URL ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= BASE_URL ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= BASE_URL ?>vendors/validator/validator.js"></script>

    <script src="<?= BASE_URL ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= BASE_URL ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/pdfmake/build/vfs_fonts.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?=  $site_title ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= BASE_URL ?>assets_admin/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $this->loginUser['full_name']  ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <?php $this->load->view("admin/template_sidebar.php");  ?>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php $this->load->view("admin/template_navbar.php"); ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <?= $main_content ?>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ©2020 All Rights Reserved. <a href="<?= BASE_URL ?>"><?=  $site_title ?></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    

    <!-- Custom Theme Scripts -->

    <script src="<?= BASE_URL ?>assets_admin/js/custom.js"></script>
  </body>
</html>
