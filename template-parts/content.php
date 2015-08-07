<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zero
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="image col-md-4 col-sm-4">
			<div class="image-inner">
				<?php 
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('', array('class'=>'img-responsive img-thumbnail'));
					}
				?>
			</div>
		</div>	

		<div class="post-details col-md-8">		
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php zero_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php intro_text(40); ?><br>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary"></i><?php echo esc_html__('Read more', 'zero'); ?></a>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php zero_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-## -->
