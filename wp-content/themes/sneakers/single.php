<?php
/**
 * The Template for displaying all single posts
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="page-container col-md-8 col-md-offset-2">
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail(); ?>
	<br><br>
	<article class="page-container_content">
		<?php the_content(); ?>
	</article>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
