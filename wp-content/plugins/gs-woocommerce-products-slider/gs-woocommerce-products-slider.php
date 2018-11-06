<?php
// error_reporting(E_ALL);
/**
 *
 * @package   GS_WooCommerce_Products_Slider
 * @author    Golam Samdani <samdani1997@gmail.com>
 * @license   GPL-2.0+
 * @link      https://www.gsamdani.com
 * @copyright 2015 Golam Samdani
 *
 * @wordpress-plugin
 * Plugin Name:			GS WooCommerce Products Slider Lite
 * Plugin URI:			https://www.gsamdani.com/wordpress-plugins
 * Description:       	Best Responsive WooCommerce Products Slider plugin for your Wordpress store. Display anywhere at your site using shortcode like [gs_wps] Check more shortcode examples and documention at <a href="http://wooprod.gsamdani.com">GS WooCommerce Products Slider</a> 
 * Version:           	1.4
 * Author:       		Golam Samdani
 * Author URI:       	https://www.gsamdani.com
 * Text Domain:       	gswps
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( ! defined( 'GSWPS_HACK_MSG' ) ) define( 'GSWPS_HACK_MSG', __( 'Sorry cowboy! This is not your place', 'gswps' ) );

/**
 * Protect direct access
 */
if ( ! defined( 'ABSPATH' ) ) die( GSWPS_HACK_MSG );

/**
 * Defining constants
 */
if( ! defined( 'GSWPS_VERSION' ) ) define( 'GSWPS_VERSION', '1.4' );
if( ! defined( 'GSWPS_MENU_POSITION' ) ) define( 'GSWPS_MENU_POSITION', 31 );
if( ! defined( 'GSWPS_PLUGIN_DIR' ) ) define( 'GSWPS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if( ! defined( 'GSWPS_PLUGIN_URI' ) ) define( 'GSWPS_PLUGIN_URI', plugins_url( '', __FILE__ ) );
if( ! defined( 'GSWPS_FILES_DIR' ) ) define( 'GSWPS_FILES_DIR', GSWPS_PLUGIN_DIR . 'gswps-files' );
if( ! defined( 'GSWPS_FILES_URI' ) ) define( 'GSWPS_FILES_URI', GSWPS_PLUGIN_URI . '/gswps-files' );

require_once GSWPS_FILES_DIR . '/gs-plugins/gs-plugins.php';
require_once GSWPS_FILES_DIR . '/gs-plugins/gs-plugins-free.php';
require_once GSWPS_FILES_DIR . '/gs-plugins/gs-wps-help.php';
require_once GSWPS_FILES_DIR . '/gswps-admin/class.settings-api.php';
require_once GSWPS_FILES_DIR . '/gswps-admin/gs_wps_options_config.php';
require_once GSWPS_FILES_DIR . '/gs-wps-shortcode.php';
require_once GSWPS_FILES_DIR . '/gs-wps-script.php';
require_once GSWPS_FILES_DIR . '/gs-wps-style-swither.php';
require_once GSWPS_FILES_DIR . '/gs-wps-media-button.php';
require_once GSWPS_FILES_DIR . '/gs-wps-media-modal.php';

if ( ! function_exists('gs_wps_pro_link') ) {
	function gs_wps_pro_link( $gsWps_links ) {
		$gsWps_links[] = '<a class="gs-pro-link" href="https://www.gsamdani.com/product/gs-woocommerce-product-slider" target="_blank">Go Pro!</a>';
		$gsWps_links[] = '<a href="https://www.gsamdani.com/wordpress-plugins" target="_blank">GS Plugins</a>';
		return $gsWps_links;
	}
	add_filter( 'plugin_action_links_' .plugin_basename(__FILE__), 'gs_wps_pro_link' );
}