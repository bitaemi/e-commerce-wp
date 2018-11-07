<?php
/**
 * Displays footer site info
 */

?>
<div class="site-info row">
	<div class="address p-1 col-xl-2 col-lg-2 col-md-3 col-sm-3 col-6 p-r-1 text-align-left">
			<i class="fas fa-map-marker-alt"></i>
			<span>340 Hawthorne Ave.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Athenes GA 30606</span>
	</div>
	<div class="mobile-alt margin-left-30 col-xl-2 col-lg-2 col-md-3 col-sm-3 col-6 float-right">		        
				<span>
					<i class="fas fa-mobile-alt"></i>
					<?php if( get_theme_mod( 'emi_development_call1','' ) != '') { 
					echo esc_html( get_theme_mod('emi_development_call1','') ); 
					} ?>
				</span>
	</div>
	<div class="get-consultation col-xl-8 col-lg-8 col-md-6 col-sm-6 col-12 float-right">
		<span class="d-line-block"> Need advices from an expert? </span>
		<div class="readbutton p-1 float-right d-line-block">
			<?php if( get_theme_mod( 'emi_development_donate','' ) != '') { ?>
				<a href="#"><?php echo esc_html( get_theme_mod('emi_development_donate','') ); ?></a>
			<?php } ?>
		</div>
	</div>
</div>
<div class="site-info row">
<div class=" col-md-6 col-xs-12 col-sm-6 p-0">
	<p>
		<?php echo esc_html(get_theme_mod('emi_development_footer_text',__('Design & Developed By','emi_development'))); ?> <?php emi_development_credit(); ?>
	</p>
</div>
<div class=" col-md-6 col-xs-12 col-sm-6 p-0">
	<div class="social-media">
		<?php if( get_theme_mod( 'emi_development_facebook_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'emi_development_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
		<?php } ?>
		<?php if( get_theme_mod( 'emi_development_google_plus_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'emi_development_google_plus_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
		<?php } ?>
		<?php if( get_theme_mod( 'emi_development_youtube_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'emi_development_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
		<?php } ?>	          
		<?php if( get_theme_mod( 'emi_development_linkdin_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'emi_development_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
		<?php } ?>	
		<?php if( get_theme_mod( 'emi_development_instagram_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'emi_development_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
		<?php } ?>	          	           
		<?php if( get_theme_mod( 'emi_development_twitter_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'emi_development_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
		<?php } ?>	
	</div>
</div>
</div>