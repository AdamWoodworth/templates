<!--
Theme Name: Cephalopod Press Custom Theme
Author: Adam Woodworth
Author URI: http://www.incandescentideas.com/
Description: This theme was custom designed for Cephalopod Press and is Copyrighted 2017, Adam Woodworth, All rights reserved.
Version: Alpha 1.0
-->

<?php get_header(); ?>
<body <?php body_class(); ?>>

<!-- Begin Header -->
<div id="header">
	<h1 id="logo-sm"><a href="http://www.cephalopod-press.com/wordpress/">
	<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg"></a>
</div>
<!-- -END- Header -->

<!-- Begin Navigation -->

<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.svg" width="25" height="25" alt="Toggle Menu">

<!-- Begin Wordpress Menu -->

<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'navigation')); ?>

<!-- -END- Wordpress Menu -->
<!-- -END- Navigation -->
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