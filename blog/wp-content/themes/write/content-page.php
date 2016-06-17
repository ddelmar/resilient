<?php
/**
 * The template used for displaying page content.
 *
 * @package Write
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(	'before' => '<div class="page-links">' . __( 'Pages:', 'write' ), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',  ) ); ?>
	</div>
</article>
