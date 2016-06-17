<?php
/**
 * The footer
 *
 * @package Write
 */
if (   ! is_active_sidebar( 'footer-1' )
	&& ! is_active_sidebar( 'footer-2' )
	&& ! is_active_sidebar( 'footer-3' )
	&& ! is_active_sidebar( 'footer-4' ) ) {
	return;
}
?>

<div id="supplementary" class="footer-area" role="complementary">
	<div class="footer-widget">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<div class="footer-widget-above">
			<div class="footer-widget-1 widget-area">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
		<div class="footer-widget-below">
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<div class="footer-widget-2 widget-area">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="footer-widget-3 widget-area">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
			<div class="footer-widget-4 widget-area">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</div><!-- #supplementary -->

