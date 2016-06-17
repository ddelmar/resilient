<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Write
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'That page can&rsquo;t be found.', 'write' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'write' ); ?></p>

					<?php get_search_form(); ?>

				</div>
			</section>

		</main>
	</div><!-- #primary -->

<?php get_footer(); ?>
