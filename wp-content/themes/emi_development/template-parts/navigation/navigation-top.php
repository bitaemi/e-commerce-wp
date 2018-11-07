<?php
/**
 * Displays top navigation
 */
?>
<div class="header-menu">
	<div class="row">
		<nav id="site-navigation" class="main-navigation p-1 float-left" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'emi_development' ); ?>">
			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
				<?php
					esc_html_e( 'Menu', 'emi_development' );
				?>
			</button>
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',
			) ); ?>				
		</nav>
		<div class="search-box p-1 d-line-block float-right">
			<span><i class="fas fa-search"></i></span>
		</div>
	</div>
</div>
		
<div class="serach_outer">
	<div class="closepop"><i class="far fa-window-close"></i></div>
	<div class="serach_inner">
		<?php get_search_form(); ?>
	</div>
</div>
