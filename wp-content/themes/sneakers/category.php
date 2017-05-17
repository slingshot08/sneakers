<?php
/**
 * The template for displaying Category pages
 */
get_header();

$cat = get_query_var('cat');
$yourcat = get_category ($cat);

$subcategory = get_term_by( 'slug', ''.$yourcat->slug.'', 'category');

if(is_subcategory()){
}else{
}

?>


<?php get_footer(); ?>
