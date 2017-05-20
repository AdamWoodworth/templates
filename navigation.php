
<!-- Begin Navigation -->
<h3>Navigation.php</h3>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.svg" width="25" height="25" alt="Toggle Menu">

<!-- Begin Wordpress Menu -->

<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'navigation')); ?>

<!-- -END- Wordpress Menu -->
<!-- -END- Navigation -->