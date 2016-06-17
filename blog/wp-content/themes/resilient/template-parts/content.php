<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

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

	<?php /* twentysixteen_post_thumbnail(); */ ?>
