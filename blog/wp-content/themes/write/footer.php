<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Write
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>

		<?php if ( has_nav_menu( 'footer-social' ) || has_nav_menu( 'footer' ) || get_theme_mod( 'write_footer_text' ) || ! get_theme_mod( 'write_hide_credit' ) ) : ?>
		<div class="site-bottom">

			<?php if ( has_nav_menu( 'footer-social' ) || has_nav_menu( 'footer' ) ) : ?>
			<div class="footer-link">
				<?php if ( has_nav_menu( 'footer-social' ) ) : ?>
				<nav id="footer-social-link" class="footer-social-link social-link" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-social', 'depth' => 1, 'link_before'  => '<span class="screen-reader-text">', 'link_after'  => '</span>' ) ); ?>
				</nav>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav id="footer-navigation" class="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' , 'depth' => 1 ) ); ?>
				</nav>
				<?php endif; ?>
			</div>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'write_footer_text' ) || ! get_theme_mod( 'write_hide_credit' ) ) : ?>
			<div class="site-info">
				<?php if ( get_theme_mod( 'write_footer_text' ) ) : ?>
				<div class="site-copyright">
					<?php echo get_theme_mod( 'write_footer_text' ); ?>
				</div>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'write_hide_credit' ) ) : ?>
				<div class="site-credit">
					<a href="<?php echo esc_url( __( 'http://themehaus.net/', 'write' ) ); ?>"><?php printf( __( 'Professional WordPress Theme by %s', 'write' ), 'Themehaus' ); ?></a>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>

		</div>
		<?php endif; ?>

	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- .site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
