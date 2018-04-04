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

  <script type="text/javascript" src="<?php echo base_url()?>flat-admin/tinymce/tinymce.min.js"> </script>
</head>
<body>
  <div class="app app-default">

 <!-- LEFT-MENU : START -->
<?php $this->load->view('view_admin/left-menu');?>
<!-- LEFT-MENU : FINISH -->
<div class="app-container">
<!-- HEADER : START -->
  <?php $this->load->view('view_admin/header');?>
<!-- HEADER : FINISH -->
  <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="#">Website</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Issues</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </div>
</div>




    <?php
        if($content=='dashboard'){
            $this->load->view('view_admin/dashboard');
        }else if($content=="tabel-kategori-artikel"){
             $this->load->view('view_admin/tabel');
        }else if($content=="add-kategori-artikel"){
             $this->load->view('view_admin/form');
        }else if($content=="edit-kategori-artikel"){
             $this->load->view('view_admin/form');
        }else if($content=="tabel-artikel"){
             $this->load->view('view_admin/tabel');
        }else if($content=="add-artikel"){
             $this->load->view('view_admin/form');
        }
     ?>
  <?php $this->load->view('view_admin/footer');?>
</div>

  </div>
  
  <script type="text/javascript" src="<?= base_url()?>flat-admin/assets/js/vendor.js"></script>
  <script type="text/javascript" src="<?= base_url()?>flat-admin/assets/js/app.js"></script>

</body>
</html>

