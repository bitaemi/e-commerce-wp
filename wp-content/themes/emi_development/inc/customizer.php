<?php
/**
 * Foster Charity: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function emi_development_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'emi_development_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'emi_development' ),
	    'description' => __( 'Description of what this panel does.', 'emi_development' ),
	) );

	$wp_customize->add_section( 'emi_development_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'emi_development' ),
		'priority'   => 30,
		'panel' => 'emi_development_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('emi_development_layout_settings',array(
        'default' => __('Right Sidebar','emi_development'),
        'sanitize_callback' => 'emi_development_sanitize_choices'	        
	));

	$wp_customize->add_control('emi_development_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Theme Sidebar Layouts', 'emi_development'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'emi_development'),
        'section' => 'emi_development_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','emi_development'),
            'Right Sidebar' => __('Right Sidebar','emi_development'),
            'One Column' => __('Full Width','emi_development'),
            'Grid Layout' => __('Grid Layout','emi_development')
        ),
	));

	//Topbar section
	$wp_customize->add_section('emi_development_topbar',array(
		'title'	=> __('Topbar','emi_development'),
		'description'	=> __('Add Topbar Content here','emi_development'),
		'priority'	=> null,
		'panel' => 'emi_development_panel_id',
	));

	$wp_customize->add_setting('emi_development_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('emi_development_email',array(
		'label'	=> __('Add Email','emi_development'),
		'section'	=> 'emi_development_topbar',
		'setting'	=> 'emi_development_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('emi_development_call1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('emi_development_call1',array(
		'label'	=> __('Add Phone Number','emi_development'),
		'section'	=> 'emi_development_topbar',
		'setting'	=> 'emi_development_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('emi_development_donate',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('emi_development_donate',array(
		'label'	=> __('Donate button text','emi_development'),
		'section'	=> 'emi_development_topbar',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('emi_development_donate_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('emi_development_donate_link',array(
		'label'	=> __('Add Donate Link','emi_development'),
		'section'	=> 'emi_development_topbar',
		'setting'	=> 'emi_development_donate_link',
		'type'		=> 'text'
	));

	//Social Icons
	$wp_customize->add_section('emi_development_social_link',array(
		'title'	=> __('Social Media','emi_development'),
		'description'	=> __('Add Social Media Url here','emi_development'),
		'priority'	=> null,
		'panel' => 'emi_development_panel_id',
	));

	$wp_customize->add_setting('emi_development_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('emi_development_facebook_url',array(
		'label'	=> __('Add Facebook link','emi_development'),
		'section'	=> 'emi_development_social_link',
		'setting'	=> 'emi_development_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('emi_development_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('emi_development_twitter_url',array(
		'label'	=> __('Add Twitter link','emi_development'),
		'section'	=> 'emi_development_social_link',
		'setting'	=> 'emi_development_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('emi_development_google_plus_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('emi_development_google_plus_url',array(
		'label'	=> __('Add Google Plus link','emi_development'),
		'section'	=> 'emi_development_social_link',
		'setting'	=> 'emi_development_google_plus_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('emi_development_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('emi_development_instagram_url',array(
		'label'	=> __('Add instagram link','emi_development'),
		'section'	=> 'emi_development_social_link',
		'setting'	=> 'emi_development_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('emi_development_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('emi_development_youtube_url',array(
		'label'	=> __('Add Youtube link','emi_development'),
		'section'	=> 'emi_development_social_link',
		'setting'	=> 'emi_development_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('emi_development_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('emi_development_linkdin_url',array(
		'label'	=> __('Add Linkdin link','emi_development'),
		'section'	=> 'emi_development_social_link',
		'setting'	=> 'emi_development_linkdin_url',
		'type'	=> 'url'
	) );

	//home page slider
	$wp_customize->add_section( 'emi_development_slider' , array(
    	'title'      => __( 'Slider Settings', 'emi_development' ),
		'priority'   => null,
		'panel' => 'emi_development_panel_id'
	) );

	$wp_customize->add_setting('emi_development_slider_arrows',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('emi_development_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','emi_development'),
      	'section' => 'emi_development_slider',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'emi_development_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'emi_development_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'emi_development_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'emi_development' ),
			'section'  => 'emi_development_slider',
			'type'     => 'dropdown-pages'
		) );

	}

	//How can you help
	$wp_customize->add_section('emi_development_how_can_you_help',array(
		'title'	=> __('How Can You Help','emi_development'),
		'description'	=> __('Add Service Section below.','emi_development'),
		'panel' => 'emi_development_panel_id',
	));

	$wp_customize->add_setting('emi_development_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('emi_development_section_title',array(
		'label'	=> __('Section title','emi_development'),
		'section'	=> 'emi_development_how_can_you_help',
		'setting'	=> 'emi_development_section_title',
		'type'		=> 'text'
	));

	$post_list = get_posts();
	$i = 0;
	$pst[]='Select';	
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('emi_development_single_post',array(
		'default'	=> 'select',
		'sanitize_callback' => 'emi_development_sanitize_choices',
	));
	$wp_customize->add_control('emi_development_single_post',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','emi_development'),
		'section' => 'emi_development_how_can_you_help',
	));

	$wp_customize->add_setting('emi_development_single_post1',array(
		'default'	=> 'select',
		'sanitize_callback' => 'emi_development_sanitize_choices',
	));
	$wp_customize->add_control('emi_development_single_post1',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select Post','emi_development'),
		'section' => 'emi_development_how_can_you_help',
	));

	$wp_customize->add_setting('emi_development_single_post2',array(
		'default'	=> 'select',
		'sanitize_callback' => 'emi_development_sanitize_choices',
	));
	$wp_customize->add_control('emi_development_single_post2',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select Post','emi_development'),
		'section' => 'emi_development_how_can_you_help',
	));

	//Footer
	$wp_customize->add_section( 'emi_development_footer' , array(
    	'title'      => __( 'Footer Text', 'emi_development' ),
		'priority'   => null,
		'panel' => 'emi_development_panel_id'
	) );

	$wp_customize->add_setting('emi_development_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('emi_development_footer_text',array(
		'label'	=> __('Add Copyright Text','emi_development'),
		'section'	=> 'emi_development_footer',
		'setting'	=> 'emi_development_footer_text',
		'type'		=> 'text'
	));


	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'emi_development_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'emi_development_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'emi_development_customize_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @since Foster Charity 1.0
 * @see emi_development_customize_register()
 *
 * @return void
 */
function emi_development_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Foster Charity 1.0
 * @see emi_development_customize_register()
 *
 * @return void
 */
function emi_development_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function emi_development_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class emi_development_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'emi_development-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'emi_development-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
emi_development_Customize::get_instance();