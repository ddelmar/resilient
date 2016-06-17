<?php
/**
 * Custom template tags for this theme.
 *
 * @package Write
 */

if ( ! function_exists( 'write_logo' ) ) :
/**
 * Display logo image.
 */
function write_logo() {
	$logo_alt = ( get_theme_mod( 'write_replace_blogname' ) ) ? get_bloginfo( 'name' ) : '';
	$logo_src = esc_url( get_theme_mod( 'write_logo' ) );
	list( $logo_width ) = getimagesize( $logo_src );
	if ( get_theme_mod( 'write_retina_logo' ) ) {
		$logo_width = round( $logo_width / 2 );
	}
	?>
	<img alt="<?php echo $logo_alt; ?>" src="<?php echo $logo_src; ?>" width="<?php echo $logo_width; ?>" />
	<?php
}
endif;

if ( ! function_exists( 'write_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function write_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'write' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous"><div class="post-nav-title">' . __( 'Older post', 'write' ) . '</div>%link</div>', _x( '%title', 'Previous post link', 'write' ) );
				next_post_link( '<div class="nav-next"><div class="post-nav-title">' . __( 'Newer post', 'write' ) . '</div>%link</div>', _x( '%title', 'Next post link', 'write' ) );
			?>
		</div>
	</nav>
	<?php
}
endif;

if ( ! function_exists( 'write_header_meta' ) ) :
/**
 * Display post header meta.
 */
function write_header_meta() {
	// Hide for pages on Search.
	if ( 'post' != get_post_type() ) {
		return;
	}
	?>
	<div class="entry-header-meta">
		<?php if ( is_sticky() ): ?>
		<div class="featured">
			<span class="featured-icon"><?php _e( 'Featured', 'write' ); ?></span>
		</div>
		<?php endif; ?>
		<span class="posted-on">
			<?php printf( '<a href="%1$s" rel="bookmark"><time class="entry-date published" datetime="%2$s">%3$s</time></a>',
				esc_url( get_permalink() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			); ?>
		</span>
	</div><!-- .entry-header-meta -->
	<?php
}
endif;

if ( ! function_exists( 'write_footer_meta' ) ) :
/**
 * Display post footer meta when applicable.
 */
function write_footer_meta() {
	// Don't print empty markup if there's no Categories or Tags.
	$tags_list = get_the_tag_list( '', __( ', ', 'write' ) );
	if ( get_theme_mod( 'write_hide_category' ) && '' == $tags_list ) {
		return;
	}
	?>
	<footer class="entry-footer">
		<div class="entry-footer-meta">
			<?php if ( ! get_theme_mod( 'write_hide_category' ) ) : ?>
			<div class="cat-links">
				<?php the_category( __( ', ', 'write' ) ); ?>
			</div>
			<?php endif; ?>
			<?php if ( '' != $tags_list ) : ?>
			<div class="tags-links">
				<?php echo $tags_list; ?>
			</div>
			<?php endif; // End if $tags_list ?>
		</div>
	</footer><!-- .entry-footer -->
	<?php
}
endif;

if ( ! function_exists( 'write_author_profile' ) ) :
/**
 * Display author profile when applicable.
 */
function write_author_profile() {
	if ( get_post_format() || ! get_theme_mod( 'write_show_author' ) ) {
		return;
	}
	?>
	<div class="author-profile">
		<div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>
		</div>
		<div class="author-meta">
			<div class="author-name"><strong><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><?php the_author() ?></a></strong></div>
			<div class="author-description"><?php the_author_meta( 'description' ); ?></div>    
		</div>
	</div>
	<?php
}
endif;