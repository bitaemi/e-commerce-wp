<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'emi-development' ) ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header  container" role="banner">
		<div class="main-header row">
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 p-0">
					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 p-0">
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						<div class="navigation-top">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div>
					<?php endif; ?>
				</div>
		</div>
	</header>

	<div class="site-content-contain">
		<div id="content">
