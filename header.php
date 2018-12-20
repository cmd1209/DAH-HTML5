<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
		
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800" rel="stylesheet" type="text/css">

		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>


	</head>
	<body <?php body_class(); ?>>
		<div class="hub wrapper">
			<?php wp_nav_menu( array('menu' => 'slidenav' )); ?>
		</div>
		<div class="wrapper">
			<a class="slidetrigger" href="#">&#9776;</a>
	
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/art/DAH-Logo.svg" alt="Logo" class="logo-img">
				</a>
			</div>


			<header class="header" role="banner">
			<?php get_template_part('searchform'); ?>
			<ul class="utility">
				<li><a class="facebook" title="facebook" href="http://www.facebook.com/pages/Deutsches-Auswandererhaus-Bremerhaven/104480576278946">
					<img src="<?php echo get_template_directory_uri(); ?>/art/F_icon2.png" alt="facebook">
				</a>
				</li>
				<li><a href="http://www.dah-bremerhaven.de//ENG/english.php" class="english">
					<img src="<?php echo get_template_directory_uri(); ?>/art/eng-logo3.jpg" alt="english">
				</a></li>
			</ul>
					<nav class="nav" role="navigation">
						<?php wp_nav_menu( array('menu' => 'main nav' )); ?>
					</nav>
			</header>
		<div class="content">  <!-- start content area -->

		<!-- /header -->
