<?php get_header(); ?>

<!-- Begin Content -->
<div id="content" class="page single">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- checks for posts -->
	<article id="post-<?php the_ID(); ?>" class="post">
	<div class="featured-image" align="center">
	<?php the_post_thumbnail('large'); ?> <!-- pulls the featured image and crams it here -->
	</div>
	<div class="bi-line">
	<h2><?php the_title(); ?></h2> <!-- pulls+crams the title for the nect post in the loop -->
	<small>Posted on <?php the_time('F j,Y'); ?> by <?php the_author(); ?></small> <!-- Pulls the posts Time and Author and crams it --></div>
	<div class="body-copy" align="justify">
	<?php the_content(''); ?><!-- pulls the written content for the next post and crams it here (note the '')-->
	</div>
</articl>
	<?php endwhile; endif; ?> <!-- Closes the loop -->
	<small>single.php</small>
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
</div>
<!-- -End- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>