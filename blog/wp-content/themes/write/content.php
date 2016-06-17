<?php
/**
 * @package Write
 */
?>

<?php if ( 'content' == get_theme_mod( 'write_content' ) && ! is_search() ) : ?>

<div class="post-full">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="post-meta">
				<?php write_header_meta(); ?>
			</div>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<?php endif; ?>
		</header>

		<div class="entry-content">
			<?php the_content( __( '<span class="continue-reading">Continue reading &rarr;</span>', 'write' ) ); ?>
			<?php wp_link_pages( array(	'before' => '<div class="page-links">' . __( 'Pages:', 'write' ), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',  ) ); ?>
		</div>
	</article>
</div>

<?php else : ?>

<div class="post-summary">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="post-meta">
				<?php write_header_meta(); ?>
			</div>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header>
		<?php if ( has_post_thumbnail() && 'summary-thumb' == get_theme_mod( 'write_content' ) ): ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'write-post-thumbnail' ); ?></a>
		</div>
		<?php endif; ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</article>
</div>

<?php endif; ?>