<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<div class="spacer"  style="padding: 0;">
	<div class="container">
		<div id="tier2">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the single post content template.
				get_template_part( 'template-parts/content', 'single' );



				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation( array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
					) );
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation( array(
						'next_text' => '<li>%title</li>',
						'prev_text' => '<li>%title</li>',
						'screen_reader_text' => __( '' ),
					) );
				}

				// End of the loop.
			endwhile;
			?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->



<?php /* get_sidebar(); */ ?>
<?php get_footer();  ?>
