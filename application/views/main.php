<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?= $description ?>" />
<!-- css -->
<link href="<?= base_url()?>ocd/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url()?>ocd/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="<?= base_url()?>ocd/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="<?= base_url()?>ocd/css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="<?= base_url()?>ocd/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="<?= base_url()?>ocd/bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>



<div id="wrapper">
	<?php $this->load->view('header') ?>
	
        <?php 
            if($content == "home"){
                $this->load->view('home');
            }else if($content == "blog"){
                $this->load->view('blog');
            }if($content == "blog-detail"){
                $this->load->view('blog-detail');
            }if($content == "blog-kategori"){
                $this->load->view('blog-detail');
            }
        ?>
        
	<?php $this->load->view('footer')?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url () ?>ocd/js/jquery.min.js"></script>
<script src="<?= base_url () ?>ocd/js/modernizr.custom.js"></script>
<script src="<?= base_url () ?>ocd/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url () ?>ocd/js/bootstrap.min.js"></script>
<script src="<?= base_url () ?>ocd/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="<?= base_url () ?>ocd/plugins/flexslider/flexslider.config.js"></script>
<script src="<?= base_url () ?>ocd/js/jquery.appear.js"></script>
<script src="<?= base_url () ?>ocd/js/stellar.js"></script>
<script src="<?= base_url () ?>ocd/js/classie.js"></script>
<script src="<?= base_url () ?>ocd/js/uisearch.js"></script>
<script src="<?= base_url () ?>ocd/js/jquery.cubeportfolio.min.js"></script>
<script src="<?= base_url () ?>ocd/js/google-code-prettify/prettify.js"></script>
<script src="<?= base_url () ?>ocd/js/animate.js"></script>
<script src="<?= base_url () ?>ocd/js/custom.js"></script>

	
</body>
</html>