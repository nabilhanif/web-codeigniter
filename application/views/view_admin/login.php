<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;?></title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>flat-admin/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>flat-admin/assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>flat-admin/assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>flat-admin/assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>flat-admin/assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>flat-admin/assets/css/theme/yellow.css">

</head>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
        <div class="form-header">
          <div class="app-brand"><span class="highlight">Admin-OC</span> v.1</div>
        </div>
        <form action="<?php echo site_url('adminlogin/auth');?>" method="POST">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="id_admin" placeholder="ID. Admin" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="pass" placeholder="Password" aria-describedby="basic-addon2">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>

        <div class="form-line">
          <div class="title"></div>
        </div>
        <div class="form-footer">
          <?php echo $error;?>
        </div>
      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>