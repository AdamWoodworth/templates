<?php get_header(); ?>

<!-- Begin Content -->

<!-- Begin content loop -->
<div id="content" class="page"><?php rewind_posts(); ?> <!-- clears out the previous loop -->
			<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'project' )); ?> <!-- Sets the number of articles to put in this list -->
    <?php if (have_posts()) : while (have_posts()) : The_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> <!-- Pulls and crams the Title with parmalink attached-->
	<small>Posted on <?php the_time('F j, y'); ?> by <?php the_author(); ?>.</small>
	<?php the_content(); ?> <!-- Pulls and crams the article -->
    </article>
    <?php endwhile; endif; ?>
    <small>home.php</small>
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
</div>

<!-- -END- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>