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

		<?php /* if ( have_posts() ) : */ ?>


			<?php
			$latest_post = new WP_Query( array( 'posts_per_page' => 1) );
			if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
			?>


					<article>
					<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
					</header><!-- .entry-header -->

					<div class="meta" style="text-align:left;">
					<?php echo get_the_author(); ?>. <?php echo twentysixteen_entry_date(); ?><br />

					</div>
				<?php twentysixteen_excerpt(); ?>

				<a class="donate-button" href="<?php the_permalink(); ?>">Read More.</a>
			</article>
			<?php endwhile; ?>


			<?php
			/*
			::::::::::::::::::::::::::::::::::::::
			And now, for the earlier blog posts
			:::::::::::::::::::::::::::::::::::::
			*/
			 ?>
<ul class="news">
			 <?php
 			$latest_post = new WP_Query( array( 'offset' => 1) );
 			if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
 			?>
			<section>


					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title( sprintf( '', esc_url( get_permalink() ) ), '' ); ?>
						</a>
					</li>


			<?php endwhile; ?>
		</ul>


			<?php
			/*

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		*/
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php /* get_sidebar(); */ ?>
<?php get_footer();  ?>
