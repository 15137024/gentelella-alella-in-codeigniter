<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=  $site_title ?> | </title>

    <!-- Bootstrap -->
    <link href="<?= BASE_URL ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= BASE_URL ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

     <link href="<?= BASE_URL ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->

    <link href="<?= BASE_URL ?>assets_admin/css/custom.css" rel="stylesheet">
  <!-- jQuery -->
    <script src="<?= BASE_URL ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- NProgress -->
    <link href="<?= BASE_URL ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= BASE_URL ?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= BASE_URL ?>assets_admin/css/custom.css" rel="stylesheet">
    <script src="<?= BASE_URL ?>vendors/validator/validator.js"></script>
    <script src="<?= BASE_URL ?>assets_admin/js/custom.js"></script>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <?php if($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= $this->session->flashdata('error'); ?>
        </div>
        <?php } ?>
        <?php if($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= $this->session->flashdata('success'); ?>
        </div>
        <?php } ?>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="login" id="form" method="POST" action="<?=  BASE_URL.'User/login'  ?>" novalidate>
              <h1>Login</h1>
              <div class="form-group item item-one">
                  <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required" />
              </div>
              <div class="form-group item item-one">
                  <input type="password" class="form-control" placeholder="Password" name="password" required="required" />
              </div>
              <div>
                <button type="submit" class="btn btn-sm btn-primary submit">Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> <?= $site_title ?>!</h1>
                  <p>©2020 All Rights Reserved. <?=  $site_title ?></p>
                </div>
              </div>
            </form>
          </section>
        </div>
</div>
    </div>

  </body>
</html>
