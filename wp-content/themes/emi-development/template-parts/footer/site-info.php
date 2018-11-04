<?php
/**
 * Displays footer site info
 */

?>
<div class="site-info row">
	<div class="address p-1 col-lg-2 col-md-2 p-r-1 text-align-left">
		<?php if( get_theme_mod( 'foster_charity_email','' ) != '') { ?>
			<i class="fas fa-map-marker-alt"></i>
			<span>340 Hawthorne Ave.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Athenes GA 30606</span>
		<?php } ?>
	</div>
	<div class="mobile-alt margin-left-30 col-lg-2">		        
				<span>
					<i class="fas fa-mobile-alt"></i>
					<?php if( get_theme_mod( 'foster_charity_call1','' ) != '') { 
					echo esc_html( get_theme_mod('foster_charity_call1','') ); 
					} ?>
				</span>
			</div>
			<div class="col-lg-8">
				<div class="readbutton p-1 float-right">
					<?php if( get_theme_mod( 'foster_charity_donate','' ) != '') { ?>
						<a href="#"><?php echo esc_html( get_theme_mod('foster_charity_donate','') ); ?></a>
					<?php } ?>
				</div>
			</div>
</div>
<div class="site-info row">
<div class=" col-md-6 col-xs-12 col-sm-6 p-0">
	<p>
		<?php echo esc_html(get_theme_mod('foster_charity_footer_text',__('Design & Developed By','emi-development'))); ?> <?php foster_charity_credit(); ?>
	</p>
</div>
<div class=" col-md-6 col-xs-12 col-sm-6 p-0">
	<div class="social-media">
		<?php if( get_theme_mod( 'foster_charity_facebook_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
		<?php } ?>
		<?php if( get_theme_mod( 'foster_charity_google_plus_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_google_plus_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
		<?php } ?>
		<?php if( get_theme_mod( 'foster_charity_youtube_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
		<?php } ?>	          
		<?php if( get_theme_mod( 'foster_charity_linkdin_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
		<?php } ?>	
		<?php if( get_theme_mod( 'foster_charity_instagram_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
		<?php } ?>	          	           
		<?php if( get_theme_mod( 'foster_charity_twitter_url') != '') { ?>
			<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
		<?php } ?>	
	</div>
</div>
</div>