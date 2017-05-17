<?php
/**
 * The Template for displaying all single posts
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="page-container col-md-8 col-md-offset-2">
	<img src="<?php the_field('imagen_principal'); ?>" alt="">
	<h2><?php the_title(); ?></h2>
	<?php $date = date_create(get_field('release_date')); ?>
	<p class="release-date">Release date: <?php echo date_format($date,"d/m/Y"); ?></p>
	<article class="page-container_content">
		<?php the_field('descripcion'); ?>
	</article>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
