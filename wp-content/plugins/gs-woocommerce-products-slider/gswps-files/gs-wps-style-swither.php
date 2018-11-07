<?php

function gswps_style_swither( $theme, $gs_wps_title, $gs_wps_loop ) {
	$output ='';
	$output .= '<figure>';
		if (has_post_thumbnail( $gs_wps_loop->post->ID )){
			$output .= get_the_post_thumbnail($gs_wps_loop->post->ID, 'gswps_product_thumb', 
							array('class' => "gswps_img") );
							$output .='<h6 class="small p-0"><a href="'.get_permalink().'" class="gswps_img_url">' . $gs_wps_title . '</a></h6>';
			$output .='<div class="small p-0">'.do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
			$output .='<div class="popup p-0 small" onclick="popupProduct"> View more details';
		} else {
		    $output .= '<img id="gs-wps-pls-img" src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />';
		}
		$output .= '<div class="popuptext" id="figcaptionOnClick"><div class="modal-dialog"><div class="modal-content"><div class="modal-header">';
			$output .='<a href="'.get_permalink().'" class="gswps_img_url">' . $gs_wps_title . '</a></div>';
			$output .='<button type="button" class="close" data-dismiss="modal">&times;</button>';
			$output .='<div class="gs_wps_price">'.do_shortcode('[add_to_cart id="'.get_the_ID().'"]').'</div>';
		$output .= '</div>';
	$output .= '</div></div></div></figure>';
	return $output;
}