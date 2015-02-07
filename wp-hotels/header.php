<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<!-- css + javascript -->
	<?php wp_head(); ?>
	<script>
	!function(){
		// configure legacy, retina, touch requirements @ conditionizr.com
		conditionizr()
	}()
	</script>
</head>
<body <?php body_class(); ?>>
	<!-- wrapper -->
	<div class="wrapper clearfix">
		<!-- header -->
		<header class="header clearfix">
			<div class="top-header">
				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php wpeHeadNav(); ?>
				</nav>
				<!-- /nav -->
				<form action="">
					<input type="text"><button></button>
				</form>
				<ul class="lang-selector">
					<li>Ukr</li>
					<li>Rus</li>
				</ul>
			</div>
			<!-- /.top-header -->
			<div class="nav-more-block">
				<span>Еще...</span>
				<?php wpeHeaderSubNav(); ?>
			</div>
			<!-- /.nav-more-block -->
			<!-- logo -->
			<div class="logo">
				<?php if ( is_front_page() && is_home() ){ } else { ?>
				<a href="<?php echo home_url(); ?>">
				<?php  } ?>
				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">	
				<?php if ( is_front_page() && is_home() ){ 
				} else { ?>
				</a>
				<?php } ?>
			</div>
			<!-- /logo -->
			<div class="advanced">
				
			</div>
			<!-- /.advanced -->
		</header>
		<!-- /header -->

		<div class="container clearfix">