<?php
/**
 * Displays top navigation
 */
?>
<div class="header-menu container">
	<div class="row">
		<div class="col-lg-7 col-md-7 col-sm-11 col-xs-11 p-0 container">
			<div class="row">
				<nav id="site-navigation" class="main-navigation p-1" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'emi-development' ); ?>">
					<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
						<?php
							esc_html_e( 'Menu', 'emi-development' );
						?>
					</button>
					<?php wp_nav_menu( array(
						'theme_location' => 'top',
						'menu_id'        => 'top-menu',
					) ); ?>				
				</nav>
				<div class="search-box p-1">
					<span><i class="fas fa-search"></i></span>
				</div>
			</div>
		</div>
		<div class="col-lg-5 col-md-2 col-sm-6 col-xs-12 p-0 container">
			<div class="row">
				<?php if( get_theme_mod( 'foster_charity_call1','' ) != '') { ?>
						<div class="mobile-alt p-1">		        
							<span>
								<i class="fas fa-mobile-alt"></i>
								<?php echo esc_html( get_theme_mod('foster_charity_call1','') ); ?>
							</span>
						</div>
				<?php } ?>
				<div class="mail p-1">
					<?php if( get_theme_mod( 'foster_charity_email','' ) != '') { ?>
						<i class="far fa-envelope"></i><span><?php echo esc_html( get_theme_mod('foster_charity_email','') ); ?></span>
					<?php } ?>
				</div>
				<div class="readbutton p-1">
					<?php if( get_theme_mod( 'foster_charity_donate','' ) != '') { ?>
						<a href="#"><?php echo esc_html( get_theme_mod('foster_charity_donate','') ); ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
		
<div class="serach_outer">
	<div class="closepop"><i class="far fa-window-close"></i></div>
	<div class="serach_inner">
		<?php get_search_form(); ?>
	</div>
</div>
