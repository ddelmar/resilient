<?php
/**
 * Write Theme Customizer
 *
 * @package Write
 */

/**
 * Set the Customizer
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function write_customize_register( $wp_customize ) {

	/* Adds textarea control
	   http://ottopress.com/2012/making-a-custom-control-for-the-theme-customizer/ */
	class Write_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	// Site Identity
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->add_setting( 'write_hide_blogdescription', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_blogdescription', array(
		'label'   => __( 'Hide Tagline', 'write' ),
		'section' => 'title_tagline',
		'type'    => 'checkbox',
	) );

	// Fonts
	$wp_customize->add_section( 'write_fonts', array(
		'title'    => __( 'Fonts', 'write' ),
		'priority' => 30,
	) );
	$wp_customize->add_setting( 'write_headings_font', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_headings_font',
	) );
	$wp_customize->add_control( 'write_headings_font', array(
		'label'   => __( 'Headings Font', 'write' ),
		'section' => 'write_fonts',
		'type'    => 'select',
		'choices' => array(
			''                     => __( 'Default', 'write' ),
			'Gentium Basic:700'    => 'Gentium Basic',
			'Source Serif Pro:600' => 'Source Serif Pro',
			'PT Serif:400'         => 'PT Serif',
			'Alegreya:700'         => 'Alegreya',
			'Source Sans Pro:600'  => 'Source Sans Pro',
			'PT Sans:400'          => 'PT Sans',
			'Roboto:500'           => 'Roboto',
			'Fira Sans:500'        => 'Fira Sans',
			'Roboto Condensed:400' => 'Roboto Condensed',
			'Playfair Display:400' => 'Playfair Display',
			'Roboto Slab:400'      => 'Roboto Slab',
		),
		'priority' => 11,
	) );
	$wp_customize->add_setting( 'write_headings_font_size', array(
		'default'           => ( 'ja' == get_bloginfo( 'language' ) ) ? '80' : '100',
		'sanitize_callback' => 'write_sanitize_headings_font_size',
	) );
	$wp_customize->add_control( 'write_headings_font_size', array(
		'label'    => __( 'Headings Font Size (%)', 'write' ),
		'section'  => 'write_fonts',
		'type'     => 'text',
		'priority' => 12,
	));
	$wp_customize->add_setting( 'write_body_font', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_body_font',
	) );
	$wp_customize->add_control( 'write_body_font', array(
		'label'   => __( 'Body Font', 'write' ),
		'section' => 'write_fonts',
		'type'    => 'select',
		'choices' => array(
			''                                      => __( 'Default', 'write' ),
			'Gentium Book Basic:400,400italic,700'  => 'Gentium Book Basic',
			'PT Serif:400,400italic,700'            => 'PT Serif',
			'Alegreya:400,400italic,700'            => 'Alegreya',
			'Lora:400,400italic,700'                => 'Lora',
			'Source Sans Pro:400,400italic,600,700' => 'Source Sans Pro',
			'PT Sans:400,400italic,700'             => 'PT Sans',
		),
		'priority' => 13,
	) );
	$wp_customize->add_setting( 'write_body_font_size', array(
		'default'           => ( 'ja' == get_bloginfo( 'language' ) ) ? '18' : '20',
		'sanitize_callback' => 'write_sanitize_body_font_size',
	) );
	$wp_customize->add_control( 'write_body_font_size', array(
		'label'    => __( 'Body Font Size (px)', 'write' ),
		'section'  => 'write_fonts',
		'type'     => 'text',
		'priority' => 14,
	) );

	// Colors
	$wp_customize->get_section( 'colors' )->priority     = 35;
	$wp_customize->add_setting( 'write_link_color' , array(
		'default'           => '#a87d28',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'write_link_color', array(
		'label'    => __( 'Link Color', 'write' ),
		'section'  => 'colors',
		'priority' => 13,
	) ) );
	$wp_customize->add_setting( 'write_link_hover_color' , array(
		'default'           => '#c49029',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'write_link_hover_color', array(
		'label'    => __( 'Link Hover Color', 'write' ),
		'section'  => 'colors',
		'priority' => 14,
	) ) );

	// Background
	$wp_customize->get_section( 'background_image' )->title         = __( 'Background', 'write' );
	$wp_customize->get_section( 'background_image' )->description   = __( 'If you have selected a wide layout in the Layout settings, the background color/image is not displayed.', 'write' );
	$wp_customize->get_section( 'background_image' )->priority      = 40;
	$wp_customize->get_control( 'background_color' )->section       = 'background_image';

	// Layout
	$wp_customize->add_section( 'write_layout', array(
		'title'    => __( 'Layout', 'write' ),
		'priority' => 45,
	) );
	$wp_customize->add_setting( 'write_layout', array(
		'default'           => 'wide',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'write_sanitize_layout',
	) );
	$wp_customize->add_control( 'write_layout', array(
		'label'    => __( 'Layout', 'write' ),
		'section'  => 'write_layout',
		'type'     => 'select',
		'choices'  => array(
			'wide'   => __( 'Wide', 'write' ),
			'boxed'  => __( 'Boxed', 'write' ),
		),
		'priority' => 11,
	) );
	$wp_customize->add_setting( 'write_header_layout', array(
		'default'           => 'side',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'write_sanitize_header_layout',
	) );
	$wp_customize->add_control( 'write_header_layout', array(
		'label'   => __( 'Header Layout', 'write' ),
		'section' => 'write_layout',
		'type'    => 'select',
		'choices' => array(
			'side'   => __( 'Side', 'write' ),
			'center' => __( 'Center', 'write' ),
		),
		'priority' => 12,
	) );
	$wp_customize->add_setting( 'write_footer_layout', array(
		'default'           => 'side',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'write_sanitize_footer_layout',
	) );
	$wp_customize->add_control( 'write_footer_layout', array(
		'label'   => __( 'Footer Layout', 'write' ),
		'section' => 'write_layout',
		'type'    => 'select',
		'choices' => array(
			'side'   => __( 'Side', 'write' ),
			'center' => __( 'Center', 'write' ),
		),
		'priority' => 13,
	) );
	$wp_customize->add_setting( 'write_disable_responsive', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_disable_responsive', array(
		'label'    => __( 'Disable Responsive', 'write' ),
		'section'  => 'write_layout',
		'type'     => 'checkbox',
		'priority' => 14,
	) );

	// Title
	$wp_customize->add_section( 'write_title', array(
		'title'    => __( 'Title', 'write' ),
		'priority' => 50,
	) );
	$wp_customize->add_setting( 'write_title_font', array(
		'default' => '',
		'sanitize_callback' => 'write_sanitize_title_font',
	) );
	$wp_customize->add_control( 'write_title_font', array(
		'label'   => __( 'Font', 'write' ),
		'section' => 'write_title',
		'type'    => 'select',
		'choices' => array(
			''                 => __( 'Default', 'write' ),
			'Gentium Basic'    => 'Gentium Basic (Normal/Bold)',
			'Source Serif Pro' => 'Source Serif Pro (Normal/Bold)',
			'PT Serif'         => 'PT Serif (Normal/Bold)',
			'Alegreya'         => 'Alegreya (Normal/Bold)',
			'Source Sans Pro'  => 'Source Sans Pro',
			'PT Sans'          => 'PT Sans (Normal/Bold)',
			'Roboto'           => 'Roboto',
			'Fira Sans'        => 'Fira Sans',
			'Lato'             => 'Lato',
			'Roboto Condensed' => 'Roboto Condensed',
			'Playfair Display' => 'Playfair Display (Normal/Bold)',
			'Roboto Slab'      => 'Roboto Slab',
			'Ubuntu'           => 'Ubuntu',
			'Kaushan Script'   => 'Kaushan Script (Normal)',
		),
		'priority' => 11,
	) );
	$wp_customize->add_setting( 'write_title_font_weight', array(
		'default'           => '700',
		'sanitize_callback' => 'write_sanitize_font_weight',
	) );
	$wp_customize->add_control( 'write_title_font_weight', array(
		'label'   => __( 'Font Weight', 'write' ),
		'section' => 'write_title',
		'type'    => 'select',
		'choices' => array(
			'700' => __( 'Bold', 'write' ),
			'400' => __( 'Normal', 'write' ),
			'300' => __( 'Light', 'write' ),
		),
		'priority' => 12,
	) );
	$wp_customize->add_setting( 'write_title_font_size', array(
		'default'           => ( 'ja' == get_bloginfo( 'language' ) ) ? '36' : '42',
		'sanitize_callback' => 'write_sanitize_title_font_size',
	) );
	$wp_customize->add_control( 'write_title_font_size', array(
		'label'    => __( 'Font Size (px)', 'write' ),
		'section'  => 'write_title',
		'type'     => 'text',
		'priority' => 13,
	));
	$wp_customize->add_setting( 'write_title_font_color' , array(
		'default'           => '#111111',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'write_title_font_color', array(
		'label'    => __( 'Font Color', 'write' ),
		'section'  => 'write_title',
		'priority' => 14,
	) ) );
	$wp_customize->add_setting( 'write_title_letter_spacing', array(
		'default'           => '0',
		'sanitize_callback' => 'write_sanitize_margin',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'write_title_letter_spacing', array(
		'label'    => __( 'Letter Spacing (px)', 'write' ),
		'section'  => 'write_title',
		'type'     => 'text',
		'priority' => 15,
	));
	$wp_customize->add_setting( 'write_title_margin_top', array(
		'default'           => '0',
		'sanitize_callback' => 'write_sanitize_margin',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'write_title_margin_top', array(
		'label'    => __( 'Margin Top (px)', 'write' ),
		'section'  => 'write_title',
		'type'     => 'text',
		'priority' => 16,
	));
	$wp_customize->add_setting( 'write_title_margin_bottom', array(
		'default'           => '0',
		'sanitize_callback' => 'write_sanitize_margin',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'write_title_margin_bottom', array(
		'label'    => __( 'Margin Bottom (px)', 'write' ),
		'section'  => 'write_title',
		'type'     => 'text',
		'priority' => 17,
	));
	$wp_customize->add_setting( 'write_title_uppercase', array(
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_title_uppercase', array(
		'label'    => __( 'All Uppercase', 'write' ),
		'section'  => 'write_title',
		'type'     => 'checkbox',
		'priority' => 18,
	) );

	// Logo
	$wp_customize->add_section( 'write_logo', array(
		'title'       => __( 'Logo', 'write' ),
		'description' => __( 'In order to use a retina logo image, you must have a version of your logo that is doubled in size.', 'write' ),
		'priority'    => 55,
	) );
	$wp_customize->add_setting( 'write_logo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'write_logo', array(
		'label'    => __( 'Upload Logo', 'write' ),
		'section'  => 'write_logo',
		'priority' => 11,
	) ) );
	$wp_customize->add_setting( 'write_replace_blogname', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_replace_blogname', array(
		'label'    => __( 'Replace Title', 'write' ),
		'section'  => 'write_logo',
		'type'     => 'checkbox',
		'priority' => 12,
	) );
	$wp_customize->add_setting( 'write_retina_logo', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_retina_logo', array(
		'label'    => __( 'Retina Ready', 'write' ),
		'section'  => 'write_logo',
		'type'     => 'checkbox',
		'priority' => 13,
	) );
	$wp_customize->add_setting( 'write_add_border_radius', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_add_border_radius', array(
		'label'    => __( 'Add Border Radius', 'write' ),
		'section'  => 'write_logo',
		'type'     => 'checkbox',
		'priority' => 14,
	) );
	$wp_customize->add_setting( 'write_logo_margin_top', array(
		'default'           => '0',
		'sanitize_callback' => 'write_sanitize_margin',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'write_logo_margin_top', array(
		'label'    => __( 'Margin Top (px)', 'write' ),
		'section'  => 'write_logo',
		'type'     => 'text',
		'priority' => 15,
	));
	$wp_customize->add_setting( 'write_logo_margin_bottom', array(
		'default'           => '0',
		'sanitize_callback' => 'write_sanitize_margin',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'write_logo_margin_bottom', array(
		'label'    => __( 'Margin Bottom (px)', 'write' ),
		'section'  => 'write_logo',
		'type'     => 'text',
		'priority' => 16,
	));

	// Navigation
	$wp_customize->add_section( 'write_nav', array(
		'title'       => __( 'Navigation', 'write' ),
		'priority'    => 60,
	) );
	$wp_customize->add_setting( 'write_hide_navigation', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_navigation', array(
		'label'    => __( 'Hide Main Navigation', 'write' ),
		'section'  => 'write_nav',
		'type'     => 'checkbox',
		'priority' => 11,
	) );
	$wp_customize->add_setting( 'write_hide_search', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_search', array(
		'label'    => __( 'Hide Search', 'write' ),
		'section'  => 'write_nav',
		'type'     => 'checkbox',
		'priority' => 12,
	) );

	// Header Image
	$wp_customize->get_section( 'header_image' )->priority = 70;

	// Home
	$wp_customize->add_section( 'write_home', array(
		'title'       => __( 'Home', 'write' ),
		'description' => __( 'HTML tags are allowed in the home text.', 'write' ),
		'priority'    => 75,
	) );
	$wp_customize->add_setting( 'write_home_text', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( new Write_Customize_Textarea_Control( $wp_customize, 'write_home_text', array(
		'label'    => __( 'Home Text', 'write' ),
		'section'  => 'write_home',
		'priority' => 11,
	) ) );
	$wp_customize->add_setting( 'write_home_text_font', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_home_text_font',
	) );
	$wp_customize->add_control( 'write_home_text_font', array(
		'label'   => __( 'Font', 'write' ),
		'section' => 'write_home',
		'type'    => 'select',
		'choices' => array(
			''                         => __( 'Default', 'write' ),
			'Slabo 27px:400'           => 'Slabo 27px',
			'PT Serif:400'             => 'PT Serif',
			'Alegreya:400'             => 'Alegreya',
			'Vollkorn:400'             => 'Vollkorn',
			'Crimson Text:400'         => 'Crimson Text',
			'Vesper Libre:400'         => 'Vesper Libre',
			'Halant:400'               => 'Halant',
			'Josefin Slab:400'         => 'Josefin Slab',
			'Source Sans Pro:400'      => 'Source Sans Pro',
			'Source Sans Pro:300'      => 'Source Sans Pro Light',
			'PT Sans:400'              => 'PT Sans',
			'Roboto:400'               => 'Roboto',
			'Roboto:300'               => 'Roboto Light',
			'Fira Sans:400'            => 'Fira Sans',
			'Fira Sans:300'            => 'Fira Sans Light',
			'Josefin Sans:400'         => 'Josefin Sans',
			'Fredericka the Great:400' => 'Fredericka the Great',
		),
		'priority' => 12,
	) );
	$wp_customize->add_setting( 'write_home_text_font_size', array(
		'default'           => ( 'ja' == get_bloginfo( 'language' ) ) ? '27' : '32',
		'sanitize_callback' => 'write_sanitize_home_text_font_size',
	) );
	$wp_customize->add_control( 'write_home_text_font_size', array(
		'label'    => __( 'Font Size (px)', 'write' ),
		'section'  => 'write_home',
		'type'     => 'text',
		'priority' => 13,
	));

	// Post
	$wp_customize->add_section( 'write_post', array(
		'title'    => __( 'Post', 'write' ),
		'priority' => 80,
	) );
	$wp_customize->add_setting( 'write_content', array(
		'default'           => 'summary',
		'sanitize_callback' => 'write_sanitize_content'
	) );
	$wp_customize->add_control( 'write_content', array(
		'label'   => __( 'Display', 'write' ),
		'section' => 'write_post',
		'type'    => 'select',
		'choices' => array(
			'content'        => __( 'Full text', 'write' ),
			'summary'        => __( 'Summary', 'write' ),
			'summary-thumb'  => __( 'Summary with thumbnail', 'write' ),
		),
		'priority' => 11,
	) );
	$wp_customize->add_setting( 'write_hide_category', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_category', array(
		'label'    => __( 'Hide Categories', 'write' ),
		'section'  => 'write_post',
		'type'     => 'checkbox',
		'priority' => 12,
	) );
	$wp_customize->add_setting( 'write_show_author', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_show_author', array(
		'label'    => __( 'Show Author Profile', 'write' ),
		'section'  => 'write_post',
		'type'     => 'checkbox',
		'priority' => 13,
	) );
	$wp_customize->add_setting( 'write_hide_post_nav', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_post_nav', array(
		'label'    => __( 'Hide Older/Newer Post Navigation', 'write' ),
		'section'  => 'write_post',
		'type'     => 'checkbox',
		'priority' => 14,
	) );

	// Footer
	$wp_customize->add_section( 'write_footer', array(
		'title'       => __( 'Footer', 'write' ),
		'description' => __( 'HTML tags are allowed in the footer text.', 'write' ),
		'priority'    => 90,
	) );
	$wp_customize->add_setting( 'write_footer_text', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( new Write_Customize_Textarea_Control( $wp_customize, 'write_footer_text', array(
		'label'    => __( 'Footer Text', 'write' ),
		'section'  => 'write_footer',
		'priority' => 11,
	) ) );
	$wp_customize->add_setting( 'write_hide_credit', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_credit', array(
		'label'    => __( 'Hide Credit', 'write' ),
		'section'  => 'write_footer',
		'type'     => 'checkbox',
		'priority' => 12,
	) );

	// Custom CSS
	$wp_customize->add_section( 'write_custom_css', array(
		'title'       => __( 'Custom CSS', 'write' ),
		'description' => __( 'Set custom Google fonts like this: Open+Sans:300,300italic|Roboto:100,900', 'write' ),
		'priority'    => 95,
	) );
	$wp_customize->add_setting( 'write_custom_css', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_custom_css',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new Write_Customize_Textarea_Control( $wp_customize, 'write_custom_css', array(
		'label'    => __( 'Custom CSS', 'write' ),
		'section'  => 'write_custom_css',
		'priority' => 11,
	) ) );
	$wp_customize->add_setting( 'write_custom_google_fonts', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'write_custom_google_fonts', array(
		'label'    => __( 'Custom Google Fonts', 'write' ),
		'section'  => 'write_custom_css',
		'type'     => 'text',
		'priority' => 12,
	));
}
add_action( 'customize_register', 'write_customize_register' );

/**
 * Sanitize user inputs.
 */
function write_sanitize_checkbox( $value ) {
	if ( $value == 1 ) {
		return 1;
	} else {
		return '';
	}
}
function write_sanitize_margin( $value ) {
	if ( preg_match("/^-?[0-9]+$/", $value) ) {
		return $value;
	} else {
		return '0';
	}
}
function write_sanitize_headings_font( $value ) {
	$valid = array(
		'Gentium Basic:700'    => 'Gentium Basic',
		'Source Serif Pro:600' => 'Source Serif Pro',
		'PT Serif:400'         => 'PT Serif',
		'Alegreya:700'         => 'Alegreya',
		'Source Sans Pro:600'  => 'Source Sans Pro',
		'PT Sans:400'          => 'PT Sans',
		'Roboto:500'           => 'Roboto',
		'Fira Sans:500'        => 'Fira Sans',
		'Roboto Condensed:400' => 'Roboto Condensed',
		'Playfair Display:400' => 'Playfair Display',
		'Roboto Slab:400'      => 'Roboto Slab',
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_headings_font_size( $value ) {
	if ( preg_match("/^[1-9][0-9]*$/", $value) ) {
		return $value;
	} else {
		return ( 'ja' == get_bloginfo( 'language' ) ) ? '80' : '100';
	}
}
function write_sanitize_body_font( $value ) {
	$valid = array(
		'Gentium Book Basic:400,400italic,700'  => 'Gentium Book Basic',
		'PT Serif:400,400italic,700'            => 'PT Serif',
		'Alegreya:400,400italic,700'            => 'Alegreya',
		'Lora:400,400italic,700'                => 'Lora',
		'Source Sans Pro:400,400italic,600,700' => 'Source Sans Pro',
		'PT Sans:400,400italic,700'             => 'PT Sans',
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_body_font_size( $value ) {
	if ( preg_match("/^[1-9][0-9]*$/", $value) ) {
		return $value;
	} else {
		return ( 'ja' == get_bloginfo( 'language' ) ) ? '18' : '20';
	}
}
function write_sanitize_layout( $value ) {
	$valid = array(
		'wide'   => __( 'Wide', 'write' ),
		'boxed'  => __( 'Boxed', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_header_layout( $value ) {
	$valid = array(
		'side'   => __( 'Side', 'write' ),
		'center' => __( 'Center', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_footer_layout( $value ) {
	$valid = array(
		'side'   => __( 'Side', 'write' ),
		'center' => __( 'Center', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_title_font( $value ) {
	$valid = array(
		'Gentium Basic'    => 'Gentium Basic (Normal/Bold)',
		'Source Serif Pro' => 'Source Serif Pro (Normal/Bold)',
		'PT Serif'         => 'PT Serif (Normal/Bold)',
		'Alegreya'         => 'Alegreya (Normal/Bold)',
		'Source Sans Pro'  => 'Source Sans Pro',
		'PT Sans'          => 'PT Sans (Normal/Bold)',
		'Roboto'           => 'Roboto',
		'Fira Sans'        => 'Fira Sans',
		'Lato'             => 'Lato',
		'Roboto Condensed' => 'Roboto Condensed',
		'Playfair Display' => 'Playfair Display (Normal/Bold)',
		'Roboto Slab'      => 'Roboto Slab',
		'Ubuntu'           => 'Ubuntu',
		'Kaushan Script'   => 'Kaushan Script (Normal)',
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_font_weight( $value ) {
	$valid = array(
		'700' => __( 'Bold', 'write' ),
		'400' => __( 'Normal', 'write' ),
		'300' => __( 'Light', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '700';
	}
}
function write_sanitize_title_font_size( $value ) {
	if ( preg_match("/^[1-9][0-9]*$/", $value) ) {
		return $value;
	} else {
		return ( 'ja' == get_bloginfo( 'language' ) ) ? '36' : '42';
	}
}
function write_sanitize_text( $value ) {
	$value = wp_kses( $value, array(
		'a'  => array(
			'href'   => array(),
			'target' => array(),
			'rel'    => array(),
		),
		'br' => array(),
	) );
	return $value;
}
function write_sanitize_home_text_font( $value ) {
	$valid = array(
		'Slabo 27px:400'           => 'Slabo 27px',
		'PT Serif:400'             => 'PT Serif',
		'Alegreya:400'             => 'Alegreya',
		'Vollkorn:400'             => 'Vollkorn',
		'Crimson Text:400'         => 'Crimson Text',
		'Vesper Libre:400'         => 'Vesper Libre',
		'Halant:400'               => 'Halant',
		'Josefin Slab:400'         => 'Josefin Slab',
		'Source Sans Pro:400'      => 'Source Sans Pro',
		'Source Sans Pro:300'      => 'Source Sans Pro Light',
		'PT Sans:400'              => 'PT Sans',
		'Roboto:400'               => 'Roboto',
		'Roboto:300'               => 'Roboto Light',
		'Fira Sans:400'            => 'Fira Sans',
		'Fira Sans:300'            => 'Fira Sans Light',
		'Josefin Sans:400'         => 'Josefin Sans',
		'Fredericka the Great:400' => 'Fredericka the Great',
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_home_text_font_size( $value ) {
	if ( preg_match("/^[1-9][0-9]*$/", $value) ) {
		return $value;
	} else {
		return ( 'ja' == get_bloginfo( 'language' ) ) ? '27' : '32';
	}
}
function write_sanitize_content( $value ) {
	$valid = array(
		'content'       => __( 'Full text', 'write' ),
		'summary'       => __( 'Summary', 'write' ),
		'summary-thumb' => __( 'Summary with thumbnail', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return 'content';
	}
}
function write_sanitize_custom_css( $value ) {
	$value = wp_kses( $value, array( '\'', '\"' ) );
	$value = str_replace( '&gt;', '>', $value );
	return $value;
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function write_customize_preview_js() {
	wp_enqueue_script( 'write_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20150120', true );
}
add_action( 'customize_preview_init', 'write_customize_preview_js' );
