<?php get_header(); ?>

<!-- This file pulls content from the database and displays it in the PAGE.PHP area... but how does it know which content? -->

<!-- Begin Content -->
<div id="content" class="page">
        
	<!-- Begin Content Loop -->
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!-- Starts the content loop -->
		<?php the_content(''); ?> <!-- pulls and crams the content (note the use of '') -->
		<?php endwhile; endif; ?> <!-- closes the content loop -->
	
	<small>page.php</small>
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
	</div>

<?php get_sidebar(); ?>

<!-- -End- Content -->
<?php get_footer(); ?>