<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zero
 */

?>
	<footer id="footer" class="text-center">
		<div class="container">
			<p>
			<?php printf( esc_html__( 'ZERO &copy; 2015, All Rights Reserved', 'zero' ), 'WordPress' ); ?>
			<span class="sep"> | </span>
			<?php echo __('Designed &amp; developed by <a href="' .  get_site_url() . '" rel="designer" target="_blank">ThemeXpert</a>'); ?>
			</p>
		</div>
	</footer><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>
