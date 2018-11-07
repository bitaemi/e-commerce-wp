<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'emi_development' ) ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container-fluid">
	<header id="masthead" class="site-header row" role="banner">
		<div class="main-header  col-xl-12 col-lg-12 col-md-12col-sm-12 col-12 container-fluid  pt-1">
			<div class="row">
			<div class="d-line-block col-xl-6 col-lg-7 col-md-9 col-sm-7 col-12 container-fluid">
				<?php 
					get_template_part( 'template-parts/header/header', 'image' );
				    if ( has_nav_menu( 'top' ) ) : ?>
						<div class="navigation-top">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div>
			</div>
			<div class="col-xl-6 col-lg-5 col-md-3 col-sm-5 col-12 container-fluid float-right">
				<?php
					get_template_part( 'template-parts/header/header', 'contact' );
					endif;
				?>
			</div>
				</div>
		</div>
	</header>

<div class="site-content-contain container-fluid">
	<div id="content">
