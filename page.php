<?php get_header(); ?>

<!--
Theme Name: Cephalopod Press Custom Theme
Author: Adam Woodworth
Author URI: http://www.incandescentideas.com/
Description: This theme was custom designed for Cephalopod Press and is Copyrighted 2017, Adam Woodworth, All rights reserved.
Version: Alpha 1.0
-->

	<!-- This file pulls content from the database and displays it in the PAGE.PHP area -->
	<!-- Begin Content -->
	<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // Fires PHP post grabbing loop ?>
	<h2><?php the_title(); //pulls the titlw for the nect post in the loop and crams it here ?></h2>
	<?php the_content(''); //pulls the content for the next post and crams it here ?>
	<?php endwhile; endif; //closes the PHP post grabbing loop ?>
	<small>page.php</small>
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
	</div>
	<!-- -End- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>