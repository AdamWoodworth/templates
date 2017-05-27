<?php get_header(); ?>
<!-- This file pulls content from the database and displays it in the PAGE.PHP area -->
<!-- Begin Content -->

	<div id="content" class="page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // Fires PHP post grabbing loop ?>
	<h2><?php the_title(); //pulls the titlw for the nect post in the loop and crams it here ?></h2>
	<?php the_content(''); //pulls the content for the next post and crams it here ?>
	<?php endwhile; endif; //closes the PHP post grabbing loop ?>
	<small>page.php</small>
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
	</div>

<?php get_sidebar(); ?>

<!-- -End- Content -->
<?php get_footer(); ?>