
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">

<!-- Start dynamic Title Tag -->
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- -END- dynamic Title Tag -->

<!-- Begin Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- -END- Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider/flexslider.css" type="text/css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<!-- -END- Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/flexslider/jquery.flexslider.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
<!-- -END- Scripts -->

<!-- Begin Responsive Menu Toggle --><!-- STILL NOT WORKING -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function as window loads
	$("#toggle").click(function() { // when #toggle is clicked...
		$("#navigation").toggle(); // ... open or close the menu
	});
  });
</script>
<!-- -END- Responsive Menu Toggle -->

<!-- Begin FlexSlider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
 
    //simple FlexSlider call (use as a backup if this breaks)
    //$('.flexslider').flexslider();
 
    // more complex call
    $('.flexslider').flexslider({
		animation: "slide",
		controlsContainer: ".flex-container",
		start: function(slider) {
			$('.total-slides').text(slider.count);
		},
		after: function(slider) {
			$('.current-slide').text(slider.currentSlide);
			}
		});
	});
</script>
<!-- -END- FlexSlider -->

<!-- Begin Adobe Typekit -->
<script src="https://use.typekit.net/qwp8tzf.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- -END- Adobe Typekit -->
<!-- -END- Scripts -->


<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- -EBD- WP Head Function -->

</head>


<body <?php body_class();?>>


<!-- Begin Header Masthead -->
<div id="header">
	<hr class="header">
	<h1 id="logo"><a href="http://www.cephalopod-press.com/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg"></a>
	<hr class="header"></h1>
</div>
<!-- -END- Header Masthead -->


<!-- Begin Responsive Menu Toggle Button -->
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.svg" width="25" height="25" alt="Toggle Menu">
<!-- -END- Responsive Menu Toggle Button -->


<!-- Begin Wordpress Menu -->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'navigation')); ?>
<!-- -END- Wordpress Menu -->

<!-- Begin #Main-Container -->
<div id="main-container">

<!-- Begin Content -->
