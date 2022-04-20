<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Amanda">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/amanda/img/amanda-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/amanda">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title><?=$title?></title>

    <!-- vendor css -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/amanda.css">
  </head>

  <body>

    <div class="am-signin-wrapper">
      <div class="am-signin-box">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <div>
              <!--<h2>Wismartlink</h2>-->
              <img src="<?=base_url()?>images/tes.png">
              <p>Services Manager Apps dashboard</p>
              <p>Menyediakan pelayanan kepada Pemilik Condominium, Penyewa Rusun, Penyewa/Tenant Mall,  Pemilik Perumahan Cluster, Pelayanan RT / RW, Group Keanggotaan, dan lain lain. </p>

              <hr>
              <p>Version 1.0</p>
            </div>
          </div>
          <div class="col-lg-7">
            <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>
            <form method="post">
              <?=$response;?>
            <div class="form-group">
              <label class="form-control-label">Email:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email address">
            </div><!-- form-group -->

            <div class="form-group">
              <label class="form-control-label">Password:</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->

            <div class="form-group mg-b-20"><a href="">Reset password</a></div>

            <button type="submit" class="btn btn-block">Sign In</button>
            </form>

          </div><!-- col-7 -->
        </div><!-- row -->
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; <?=date("Y")?>. All Rights Reserved.</p>
      </div><!-- signin-box -->
    </div><!-- am-signin-wrapper -->

    <script src="<?=base_url()?>assets/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets/popper.js/popper.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/bootstrap.js"></script>
    <script src="<?=base_url()?>assets/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="<?=base_url()?>assets/js/amanda.js"></script>
  </body>
</html>
