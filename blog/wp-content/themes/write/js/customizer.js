/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site Title & Tagline
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Layout
	wp.customize( 'write_layout', function( value ) {
		value.bind( function( newval ) {
			if ( "boxed" == newval ) {
				$( 'body' ).addClass( 'layout-boxed' );
			} else {
				$( 'body' ).removeClass( 'layout-boxed' );
			}
		} );
	} );
	wp.customize( 'write_header_layout', function( value ) {
		value.bind( function( newval ) {
			if ( 'center' == newval ) {
				$( 'body' ).addClass( 'header-center' );
			} else {
				$( 'body' ).removeClass( 'header-center' );
			}
		} );
	} );
	wp.customize( 'write_footer_layout', function( value ) {
		value.bind( function( newval ) {
			if ( 'center' == newval ) {
				$( 'body' ).addClass( 'footer-center' );
			} else {
				$( 'body' ).removeClass( 'footer-center' );
			}
		} );
	} );

	// Title
	wp.customize( 'write_title_letter_spacing', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title' ).css( 'letter-spacing', newval + 'px' );
		} );
	} );
	wp.customize( 'write_title_margin_top', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title' ).css( 'margin-top', newval + 'px' );
		} );
	} );
	wp.customize( 'write_title_margin_bottom', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title' ).css( 'margin-bottom', newval + 'px' );
		} );
	} );
	wp.customize( 'write_title_uppercase', function( value ) {
		value.bind( function( newval ) {
			if ( newval ) {
				$( '.site-title' ).css( 'text-transform', 'uppercase' );
			} else {
				$( '.site-title' ).css( 'text-transform', 'none' );
			}
		} );
	} );
	wp.customize( 'write_title_font_color', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title a' ).css( 'color', newval );
		} );
	} );

	// Logo
	wp.customize( 'write_logo_margin_top', function( value ) {
		value.bind( function( newval ) {
			$( '.site-logo' ).css( 'margin-top', newval + 'px' );
		} );
	} );
	wp.customize( 'write_logo_margin_bottom', function( value ) {
		value.bind( function( newval ) {
			$( '.site-logo' ).css( 'margin-bottom', newval + 'px' );
		} );
	} );

	// Custom CSS
	wp.customize( 'write_custom_css', function( value ) {
		value.bind( function( to ) {
			$( '#write-custom-css' ).text( to );
		} );
	} );
} )( jQuery );
