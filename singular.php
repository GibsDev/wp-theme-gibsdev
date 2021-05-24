<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<span><?php echo get_the_date(); ?></span>
<hr>
<?php
the_content();
get_footer();
?>