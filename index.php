<?php get_header(); ?>

<h1><?php echo wp_get_theme()->Name?> by <?php echo wp_get_theme()->Author?></h1>
<img src="<?php theme_uri("/screenshot.jpg") ?>" alt="Skull"/>
<p><?php echo wp_get_theme()->Description?></p>

<a href="https://codex.wordpress.org/Function_Reference" target="_blank">Wordpress function reference</a>

<?php get_footer(); ?>