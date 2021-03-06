<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Sela
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( 'jetpack-testimonial' === get_post_type() ): ?>

				<?php get_template_part( 'content', 'testimonial' ); ?>
				<?php 
				$image = get_field('random_image');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>

				<?php sela_post_nav(); ?>

			<?php else: ?>

			<?php 
				$image = get_field('random_image');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
				<?php sela_post_nav(); ?>
				
				<?php get_template_part( 'content', get_post_format() ); ?>
	

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template();
					}
				?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
