<?php /* Template Name: Коты*/ ?>
<?php get_header(); ?>
<div id="container" class="right_container">
 <div id="content" class="content" role="main">
 <h1 class="page-title">Коты <i class="fa fa-paw"></i> </h1>

 <!-- Начинается петля -->
<div class="container-fluid">
	<ul class="pets">
	<?php
	$args = array( 'post_type' => 'cat', 'posts_per_page' => 6, 'orderby' => 'rand' );
	$rand_posts = get_posts( $args );
	foreach( $rand_posts as $post ) : ?>
		<li class="pets-item col-md-4">
				<?php echo get_the_post_thumbnail(); ?> <br>
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a> <br>
				<label>Пол: </label><?php echo fw_get_db_post_option(get_the_ID(), 'option_switch'); ?> <br>
				<label>Возраст: </label><?php echo fw_get_db_post_option(get_the_ID(), 'option_slider') . " лет" ;  ?>
		</li>
	<?php endforeach; ?>
	</ul>
</div>

<?php get_footer(); ?>