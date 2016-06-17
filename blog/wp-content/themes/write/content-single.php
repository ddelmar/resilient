<?php
/**
 * The template used for displaying single post.
 *
 * @package Write
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="post-meta">
			<?php write_header_meta(); ?>
		</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ): ?>
		<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(	'before' => '<div class="page-links">' . __( 'Pages:', 'write' ), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',  ) ); ?>
	</div>

	<?php write_footer_meta(); ?>
	<?php write_author_profile(); ?>
</article>

<?php if ( ! get_theme_mod( 'write_hide_post_nav' ) ) : ?>
	<?php write_post_nav(); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'after-post' ) ) : ?>
	<div class="after-post-widget" role="complementary">
	<?php dynamic_sidebar( 'after-post' ); ?>
	</div>
<?php endif; ?>
