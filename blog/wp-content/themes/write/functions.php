<?php
/**
 * Write functions and definitions
 *
 * @package Write
 */

if ( ! function_exists( 'write_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function write_setup() {

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 700;
	}

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Write, use a find and replace
	 * to change 'write' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'write', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 700, 0, false );
	add_image_size( 'write-post-thumbnail', 175, 117, true );
	update_option( 'large_size_w', 700 );
	update_option( 'large_size_h', 0 );

	// This theme uses wp_nav_menu() in two location.
	register_nav_menus( array(
		'primary'       => __( 'Main Navigation', 'write' ),
		'footer'        => __( 'Footer Menu', 'write' ),
		'footer-social' => __( 'Footer Social Links', 'write' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// Setup the WordPress core custom header feature.
	add_theme_support( 'custom-header', apply_filters( 'write_custom_header_args', array(
		'default-image' => '',
		'width'         => 700,
		'height'        => 466,
		'flex-height'   => true,
		'header-text'   => false,
	) ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'write_custom_background_args', array(
		'default-color' => '#f3f2f0',
	) ) );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/normalize.css', 'style.css', 'css/editor-style.css', str_replace( ',', '%2C', write_fonts_url() ) ) );
}
endif; // write_setup
add_action( 'after_setup_theme', 'write_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function write_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Above', 'write' ),
		'id'            => 'footer-1',
		'description'   => __( 'Footer Above widget area is displayed at the top of the footer. If you do not use the area, nothing will be displayed.', 'write' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Below 1', 'write' ),
		'id'            => 'footer-2',
		'description'   => __( '3 Footer Below widget areas are displayed at the bottom of the footer, and the width is auto-adjusted based on how many you use. If you do not use the area, nothing will be displayed.', 'write' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Below 2', 'write' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Below 3', 'write' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'After Post', 'write' ),
		'id'            => 'after-post',
		'description'   => __( 'Displayed after post.', 'write' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'write_widgets_init' );

/**
 * Register Google Fonts.
 *
 * This function is based on code from Twenty Thirteen.
 * http://wordpress.org/themes/twentythirteen
 */
function write_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Gentium Basic, translate this to 'off'. Do not translate into your own language.
	 */
	$gentium_basic = _x( 'on', 'Gentium Basic font: on or off', 'write' );
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Gentium Book Basic, translate this to 'off'. Do not translate into your own language.
	 */
	$gentium_book_basic = _x( 'on', 'Gentium Book Basic font: on or off', 'write' );
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Slabo 27px, translate this to 'off'. Do not translate into your own language.
	 */
	$slabo_27px = _x( 'on', 'Slabo 27px font: on or off', 'write' );
	$title_font = get_theme_mod( 'write_title_font' );
	$headings_font = get_theme_mod( 'write_headings_font' );
	$body_font = get_theme_mod( 'write_body_font' );
	$home_text_font = get_theme_mod( 'write_home_text_font' );
	$custom_fonts = get_theme_mod( 'write_custom_google_fonts' );

	if ( 'off' !== $gentium_basic || 'off' !== $gentium_book_basic || 'off' !== $slabo_27px || $title_font || $headings_font || $body_font || $home_text_font || $custom_fonts ) {
		$font_families = array();

		if ( 'off' !== $gentium_basic && ! ( $title_font && $headings_font ) ) {
			$font_families[] = 'Gentium Basic:700';
		}

		if ( 'off' !== $gentium_book_basic && ! $body_font ) {
			$font_families[] = 'Gentium Book Basic:400,400italic,700';
		}

		if ( 'off' !== $slabo_27px && ! $home_text_font && is_front_page() && get_theme_mod( 'write_home_text' ) ) {
			$font_families[] = 'Slabo 27px:400';
		}

		if ( $title_font ) {
			$title_font_weight = ( get_theme_mod( 'write_title_font_weight' ) ) ? get_theme_mod( 'write_title_font_weight' ) : '700';
			$font_families[] = write_exist_font( $title_font , $title_font_weight );
		}

		if ( $headings_font ) {
			$font_families[] = $headings_font;
		}

		if ( $body_font ) {
			$font_families[] = $body_font;
		}

		if ( $home_text_font && is_front_page() && get_theme_mod( 'write_home_text' ) ) {
			$font_families[] = $home_text_font;
		}

		if ( $custom_fonts ) {
			$font_families[] = str_replace( '+', ' ', $custom_fonts );
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

/**
 * Return exist Google Font weight.
 */
function write_exist_font( $font, $font_weight ) {
	$font_family[] = $font . ":" . $font_weight;
	$font_family[] = $font;
	$google_font_url = 'http://fonts.googleapis.com/css?family=';

	foreach ( $font_family as $value ) {
		$font_family_encoded = urlencode( $value );
		$response = wp_remote_head( $google_font_url . $font_family_encoded );
		if ( '200' == wp_remote_retrieve_response_code( $response ) ) {
			return $value;
			exit;
		}
	}

	return '';
}

/**
 * Enqueue scripts and styles.
 */
function write_scripts() {
	wp_enqueue_style( 'write-font', write_fonts_url(), array(), null );
	wp_enqueue_style( 'write-genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3' );
	wp_enqueue_style( 'write-normalize', get_template_directory_uri() . '/css/normalize.css',  array(), '3.0.2' );
	wp_enqueue_style( 'write-style', get_stylesheet_uri(), array(), '1.1.0' );
	wp_enqueue_style( 'write-non-responsive', get_template_directory_uri() . '/css/non-responsive.css', array(), null );
	if ( ! get_theme_mod( 'write_disable_responsive' ) ) {
		wp_style_add_data( 'write-non-responsive', 'conditional', 'IE 8' );
	}
	if ( 'ja' == get_bloginfo( 'language' ) ) {
		wp_enqueue_style( 'write-style-ja', get_template_directory_uri() . '/css/ja.css', array(), null );
	}

	wp_enqueue_script( 'write-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20150120', true );
	wp_enqueue_script( 'write-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150120', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'write_scripts' );

/**
 * Add customizer style to the header.
 */
function write_customizer_css() {
	?>
	<style type="text/css">
		/* Fonts */
		<?php if ( $write_headings_font_size = get_theme_mod( 'write_headings_font_size' ) ) : ?>
		html {
			font-size: <?php echo $write_headings_font_size; ?>%;
		}
		<?php endif; ?>
		body {
			<?php if ( $write_body_font = get_theme_mod( 'write_body_font' ) ) : 
				list( $body_font_family ) = explode( ":", $write_body_font );
			?>
			font-family: '<?php echo $body_font_family; ?>', serif;
			<?php endif; ?>
			<?php if ( $write_body_font_size = get_theme_mod( 'write_body_font_size' ) ) : ?>
			font-size: <?php echo $write_body_font_size; ?>px;
			<?php endif; ?>
		}
		<?php if ( ! get_theme_mod( 'write_disable_responsive' ) ) : ?>
		@media screen and (max-width: 782px) {
			<?php if ( $write_headings_font_size ) : ?>
			html {
				font-size: <?php echo $write_headings_font_size * 0.85; ?>%;
			}
			<?php endif; ?>
			<?php if ( $write_body_font_size ) : ?>
			body {
				font-size: <?php echo round ( $write_body_font_size * 0.9, 1 ); ?>px;
			}
			<?php endif; ?>
		}
		<?php endif; ?>
		<?php if ( $write_headings_font = get_theme_mod( 'write_headings_font' ) ) : 
			list( $headings_font_family, $font_weight ) = explode( ":", $write_headings_font );
		?>
			h1, h2, h3, h4, h5, h6 {
				font-family: '<?php echo $headings_font_family; ?>', serif;
				font-weight: <?php echo $font_weight; ?>;
			}
		<?php endif; ?>

		/* Colors */
		<?php if ( $write_link_color = get_theme_mod( 'write_link_color' ) ) : ?>
		.entry-content a, .page-content a, .author-description a, .comment-content a, .post-navigation a {
			color: <?php echo $write_link_color; ?>;
		}
		<?php endif; ?>
		<?php if ( $write_link_hover_color = get_theme_mod( 'write_link_hover_color' ) ) : ?>
		a:hover {
			color: <?php echo $write_link_hover_color; ?>;
		}
		<?php endif; ?>

		<?php if ( ! ( get_theme_mod( 'write_logo' ) && get_theme_mod( 'write_replace_blogname' ) ) ) :?>
		/* Title */
			.site-title {
				<?php if ( $write_title_font = get_theme_mod( 'write_title_font' ) ) : ?>
				font-family: '<?php echo $write_title_font; ?>', serif;
				<?php endif; ?>
				<?php if ( $write_title_font_weight = get_theme_mod( 'write_title_font_weight' ) ) : ?>
				font-weight: <?php echo $write_title_font_weight; ?>;
				<?php endif; ?>
				<?php if ( $write_title_font_size = get_theme_mod( 'write_title_font_size' ) ) : ?>
				font-size: <?php echo $write_title_font_size; ?>px;
				<?php endif; ?>
				<?php if ( $write_title_letter_spacing = get_theme_mod( 'write_title_letter_spacing' ) ) : ?>
				letter-spacing: <?php echo $write_title_letter_spacing; ?>px;
				<?php endif; ?>
				<?php if ( $write_title_margin_top = get_theme_mod( 'write_title_margin_top' ) ) : ?>
				margin-top: <?php echo $write_title_margin_top; ?>px;
				<?php endif; ?>
				<?php if ( $write_title_margin_bottom = get_theme_mod( 'write_title_margin_bottom' ) ) : ?>
				margin-bottom: <?php echo $write_title_margin_bottom; ?>px;
				<?php endif; ?>
				<?php if ( get_theme_mod( 'write_title_uppercase' ) ) : ?>
				text-transform: uppercase;
				<?php endif; ?>
			}
			<?php if ( $write_title_font_color = get_theme_mod( 'write_title_font_color' ) ) : ?>
			.site-title a, .site-title a:hover {
				color: <?php echo $write_title_font_color; ?>;
			}
			<?php endif; ?>
			<?php if ( ! get_theme_mod( 'write_disable_responsive' ) && $write_title_font_size ) : ?>
			@media screen and (max-width: 782px) {
				.site-title {
					font-size: <?php echo $write_title_font_size * 0.85; ?>px;
				}
			}
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'write_logo' ) ) : ?>
		/* Logo */
			.site-logo {
				<?php if ( $write_logo_margin_top = get_theme_mod( 'write_logo_margin_top' ) ) : ?>
				margin-top: <?php echo $write_logo_margin_top; ?>px;
				<?php endif; ?>
				<?php if ( $write_logo_margin_bottom = get_theme_mod( 'write_logo_margin_bottom' ) ) : ?>
				margin-bottom: <?php echo $write_logo_margin_bottom; ?>px;
				<?php endif; ?>
			}
			<?php if ( get_theme_mod( 'write_add_border_radius' ) ) : ?>
				.site-logo img {
					border-radius: 50%;
				}
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( is_front_page() && get_theme_mod( 'write_home_text' ) ) : ?>
		/* Home Text */
			.home-text {
				<?php if ( $write_home_text_font = get_theme_mod( 'write_home_text_font' ) ) :
				list( $home_text_font_family, $font_weight ) = explode( ":", $write_home_text_font ); ?>
				font-family: '<?php echo $home_text_font_family; ?>', serif;
				font-weight: <?php echo $font_weight; ?>;
				<?php endif; ?>
				<?php if ( $write_home_text_font_size = get_theme_mod( 'write_home_text_font_size' ) ) : ?>
				font-size: <?php echo $write_home_text_font_size; ?>px;
				<?php endif; ?>
			}
			<?php if ( ! get_theme_mod( 'write_disable_responsive' ) && $write_home_text_font_size ) : ?>
			@media screen and (max-width: 782px) {
				.home-text {
					font-size: <?php echo $write_home_text_font_size * 0.85; ?>px;
				}
			}
			<?php endif; ?>
		<?php endif; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'write_customizer_css' );

/**
 * Add custom style to the header.
 */
function write_custom_css() {
	?>
	<style type="text/css" id="write-custom-css">
		<?php echo get_theme_mod( 'write_custom_css' ); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'write_custom_css' );

/**
 * Add custom classes to the body.
 */
function write_body_classes( $classes ) {
	if ( 'boxed' == get_theme_mod( 'write_layout' ) ) {
		$classes[] = 'layout-boxed';
	}
	if ( 'center' == get_theme_mod( 'write_header_layout' ) ) {
		$classes[] = 'header-center';
	}
	if ( 'center' == get_theme_mod( 'write_footer_layout' ) ) {
		$classes[] = 'footer-center';
	}

	if ( get_theme_mod( 'write_hide_search' ) ) {
		$classes[] = 'no-search';
	}

	if ( get_option( 'show_avatars' ) ) {
		$classes[] = 'has-avatars';
	}

	$footer_widgets = 0;
	$footer_widgets_max = 4;
	for( $i = 2; $i <= $footer_widgets_max; $i++ ) {
		if ( is_active_sidebar( 'footer-' . $i ) ) {
				$footer_widgets++;
		}
	}
	$classes[] = 'footer-' . $footer_widgets;

	return $classes;
}
add_filter( 'body_class', 'write_body_classes' );

/**
 * Set auto update.
 */
require get_template_directory() . '/inc/theme_update_check.php';
$MyUpdateChecker = new ThemeUpdateChecker(
	'write',
	'https://kernl.us/api/v1/theme-updates/5702679de6df0294164716b1/'
);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom widgets for this theme.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
