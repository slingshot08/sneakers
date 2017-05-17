<?php
/**
 * The template for displaying Category pages
 */
get_header(); ?>

<section class="latest-releases container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<a href="<?php the_permalink(); ?>">
	<div class="latest-releases_item col-md-4" style="background-image: url(<?php the_field('imagen_principal'); ?>);">
		<h2><?php the_title(); ?></h2>
	</div>
	</a>

<?php endwhile;
endif;
wp_reset_query();
?>
</section>

<?php get_footer(); ?>
