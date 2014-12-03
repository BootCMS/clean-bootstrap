<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_the_title(); echo ' &#124; '; bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
</head>
	
<body><!-- closes in footer -->
	<div class="container" ><!-- container 1 - closes in footer -->
<header role="banner">
	<div id="header" class="row"><!-- row 1A -->
		<div class="col-sm-12"  style="color: #<?php echo get_theme_mod( 'header_textcolor' ); ?>;"><!-- col 1A1 -->
			<?php if ( get_header_image() ) : ?>
				<img class="pull-left" src="<?php header_image(); ?>" alt="Page header image" />
				<?php if ( get_theme_mod( 'header_textcolor' ) != 'blank' ) : ?>
				<div class="pull-right text-right"><!-- page header -->
					<h1><?php echo bloginfo('name'); ?><br>
					<small><?php bloginfo('description'); ?></small></h1>
				</div><!-- / page header -->
				<?php endif; ?><!-- / get_theme_mod -->
			<?php else : ?>
				<?php if ( get_theme_mod( 'header_textcolor' ) != 'blank' ) : ?>
				<div><!-- page header -->
					<h1><?php echo bloginfo('name'); ?><br>
					<small><?php bloginfo('description'); ?></small></h1>
				</div><!-- / page header -->
				<?php endif; ?><!-- / get_theme_mod -->
			<?php endif; ?><!-- / get_header_image -->
		</div><!-- / col 1A1 -->
	</div><!-- / row 1A -->
</header><!-- / banner -->
<!-- Skip navigation for AT (accessibility) -->
<a href="#content" class="sr-only sr-only-focusable" role="button"><?php _e('Skip to content', 'i-publishers'); ?></a>
<?php get_template_part( 'inc/menu'); ?>