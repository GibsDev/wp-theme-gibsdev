<?php /* Template Name: Posts */ ?>
<?php get_header(); ?>
<h1>Posts</h1>
<hr>
<?php
// wp-query to get all published posts without pagination
$allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
<?php if ($allPostsWPQuery->have_posts()) : ?>
	<div>
		<?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2><pre><?php the_date(); ?></pre></a>
		<?php endwhile; ?>
	</div>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php _e('There no posts to display.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>