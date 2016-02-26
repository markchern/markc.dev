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
				<?php echo types_render_field("project-image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				<br>
				<?php echo types_render_field("project-video", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				<br>
				<?php echo types_render_field("project-date", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>

				<?php sela_post_nav(); ?>

			<?php else: ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php echo types_render_field("project-image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				<br>
				<?php echo types_render_field("project-video", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				<br>
				<?php echo types_render_field("project-date", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>

				<?php sela_post_nav(); ?>

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
