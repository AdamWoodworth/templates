<?php get_header(); ?>

<!--
Theme Name: Cephalopod Press Custom Theme
Author: Adam Woodworth
Author URI: http://www.incandescentideas.com/
Description: This theme was custom designed for Cephalopod Press and is Copyrighted 2017, Adam Woodworth, All rights reserved.
Version: Alpha 1.0
-->

	<!-- This file pulls content from the database and displays it in the SINGLE.PHP area -->
	<!-- Begin Content -->
	<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // Fires PHP post grabbing loop ?>
	<article id="post-<?php the_ID(); ?>" class="post">
	<h2><?php the_title(); //pulls the title for the nect post in the loop and crams it here ?></h2>
	<small>Posted on <?php the_time('F j,Y'); //gets the time from the post and crams it here ?> by <?php the_author(); //pulls the author name from the database and crams it here ?></small>
	<?php the_post_thumbnail('large'); //pulls the featured image and crams it here ?>
	<?php the_content(''); //pulls the content for the next post and crams it here ?>
	</articl>
	<?php endwhile; endif; //closes the PHP post grabbing loop ?>
	<small>pager.php</small>
	</div>
	<!-- -End- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>