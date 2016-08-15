<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Blog Aneka Jual Beli Online - anekabeli.com</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
                
                
                <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/user/assets/images/favicon.png">

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php echo base_url(); ?>assets/user/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="<?php echo base_url(); ?>assets/user/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/user/assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php echo base_url(); ?>assets/user/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/user/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>
        
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

                    
                        <!-- HEADER -->
                        <?php $this->load->view('blog/includes/header') ?>
                        <!-- /HEADER -->

                        <!-- CONTENT -->
                        <?php $this->load->view($main_content) ?>
			<!-- /CONTENT -->

			<!-- FOOTER -->
			<?php $this->load->view('blog/includes/footer') ?>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
                <?php $this->load->view('blog/includes/scroll_top') ?>
                <!-- /SCROLL TO TOP -->

		<!-- PRELOADER -->
                <?php $this->load->view('blog/includes/preloader') ?>
		<!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo base_url(); ?>assets/user/assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/user/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/user/assets/js/scripts.js"></script>
		<!-- /JAVASCRIPT FILES -->

	</body>
</html>
