<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zero
 */

get_header(); ?>

	<main id="main" class="row" role="main">
			<div id="mainbody" class="col-md-8">
				<section class="error-404 not-found block">
					<header class="well text-center">
						<h1>404!</h1>
						<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zero' ); ?></h3>
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Perhaps the links beside will be indispensable for you.', 'zero' ); ?></p>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->
			</div>

			<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- Container -->

<?php get_footer(); ?>
