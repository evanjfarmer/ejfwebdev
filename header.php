<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css"/>
		<meta name="msvalidate.01" content="D46A70353C8ABEE19606976A3A9842D9" />
		<meta name="yandex-verification" content="79ea48a4ec44f7eb" />
		<meta name="yandex-verification" content="9036dcbfb9788971" />
		<meta name="google-site-verification" content="_kxBxoDK_xxOL-GfdOQmpq2_ieb4Nzm3zyyoIJBZLYQ" />
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
						<br><br>
						<div class="row">
						<div class="headerimg">
							<a href="https://www.evanjfarmer.com"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="evanjfarmer webdev" /></a>
						</div>
						<div class="tagline">
							<img src="/wp-content/uploads/2016/09/tag-1.png">
						</div>
						</div>
					</div>
				</div>
			</header> <!-- end .header -->