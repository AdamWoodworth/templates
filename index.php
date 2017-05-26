<?php get_header(); ?>

<!-- Begin #Content .page -->
<div id="content" class="page">
	
	<?php if (have_posts()) : while (have_posts()) : The_post(); ?><!-- Begin CONTENT loop -->
		<article id="post-exerpt-<?php the_ID(); ?>" class="post-exerpt">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2> <!-- Pulls and crams the Title with parmalink attached-->
		<h3>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></h3> <!-- Pulls and places date and time, author, and category of article -->
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a> <!-- pulls and places the featured image -->
		<?php get_exerpt(); ?> <!-- Pulls and crams the article -->
		<p class="read-more"><a href="<?php the_permalink(); ?>">Read More...</a></p> <!-- Permalink to the standalone article -->
		</article>
	<?php endwhile; endif; ?> <!-- -END- CONTENT loop -->
	
	<small>index.php</small><!-- Remove before launch -->
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
	
	</div>
<!-- -END- #Content .page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>