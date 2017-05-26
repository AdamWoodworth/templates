<?php get_header(); ?>

<!-- Begin Content -->

<div id="content" class="page">
    <?php if (have_posts()) : while (have_posts()) : The_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2> <!-- Pulls and crams the Title with parmalink attached-->
    <?php the_content(); ?> <!-- Pulls and crams the article -->
    </article>
    <?php endwhile; endif; ?>
    <small>home.php</small>
	<?php if(is_404()){ echo '404 Error. Page not found'; } ?>
</div>

<!-- -END- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>