<?php get_header(); ?>

	<!-- Begin Content -->
	<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- checks for posts -->
	<article id="post-<?php the_ID(); ?>" class="post">
	<h2><?php the_title(); ?></h2> <!-- pulls+crams the title for the nect post in the loop -->
	<h3>Posted on <?php the_time('F j,Y'); ?> by <?php the_author(); ?></h3> <!-- Pulls the posts Time and Author and crams it -->
	<?php the_post_thumbnail('large'); ?> <!-- pulls the featured image and crams it here -->
	<?php the_content(''); ?> <!-- pulls the written content for the next post and crams it here (note the '')-->
	</articl>
	<?php endwhile; endif; ?> <!-- Closes the loop
	<small>single.php</small>
	</div>
	<!-- -End- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>