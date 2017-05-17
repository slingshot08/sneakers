<?php
/*
Template Name: Home
*/
the_post();

get_header(); ?>

<section class="main-image" style="background-image: url(<?php the_field('imagen_principal'); ?>);"></section>

<?php $show_releases = get_field('latest_releases'); ?>
<?php if($show_releases){ ?>
<section class="latest-releases container">
	<?php $args = array(
    'post_type'=> 'release',
    'order'    => 'ASC',
    'posts_per_page' => 3,
);
query_posts( $args );
if (have_posts()) : while (have_posts()) : the_post(); ?>
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
<?php } ?>

<section class="news">
	<div class="container">	
		<?php $new = get_field('noticia_destacada'); ?>
		<?php $img = get_the_post_thumbnail_url($new); ?>
		<a href="<?php echo get_permalink($new->ID); ?>">
		<div class="news_item col-md-6 col-md-offset-3" style="background-image: url(<?php echo $img; ?>);">
			<h2><?php echo $new->post_title; ?></h2>
		</div>
		</a>
	</div>
</section>

<?php get_footer(); ?> 