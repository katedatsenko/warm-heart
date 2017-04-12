<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package warm_heart
 */

get_header(); ?>

	<div id="primary" class="content-area single-dog">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			
			echo get_the_post_thumbnail();

			get_template_part( 'template-parts/content', get_post_format() );
			?> 
			<label>Пол: </label><?php echo fw_get_db_post_option($post_id, 'option_switch'); ?> <br>
			<label>Возраст: </label><?php echo fw_get_db_post_option($post_id, 'option_slider') . " лет" ;  ?>
			<?php
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
