<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>
<section class="page-container">
	<h2><?php the_title(); ?></h2>
	<article class="page-container_content">
		<?php the_content(); ?>
	</article>
</section>

<?php get_footer(); ?>
