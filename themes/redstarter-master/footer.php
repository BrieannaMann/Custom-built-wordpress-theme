<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div id="secondary" class="widget-area flex flex-row-wrap border-edge" role="complementary">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
<?php endif; ?>
			</footer><!-- #colophon -->


		<?php wp_footer(); ?>

	</body>
</html>
