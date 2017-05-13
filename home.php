<?php get_header(); ?>
<!-- Begin Header -->
<div id="header">
	<hr class="header">
	<h1 id="logo"><a href="http://www.cephalopod-press.com/wordpress/">
	<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg"></a>
	<hr class="header"></h1>
</div>
<!-- -END- Header -->

<!-- Begin Navigation -->

<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.svg" width="25" height="25" alt="Toggle Menu">

<!-- Begin Wordpress Menu -->

<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'navigation')); ?>

<!-- -END- Wordpress Menu -->
<!-- -END- Navigation -->

<!-- Begin Content -->
<div id="content" class="page">

	<?php if (have_posts()) : while (have_posts()) : The_post(); ?>
	<article id="article-<?php the_ID(); ?>" class="article">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2> <!-- Pulls and crams the Title with parmalink attached-->
	<?php the_content(); ?> <!-- Pulls and crams the article -->
	</article>
	<?php endwhile; endif; ?>

</div>
<!-- -END- Content -->
<?php get_footer(); ?>
