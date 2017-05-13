
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">

<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!-- Begin Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- -END- Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<!-- -END- Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- -END- Scripts -->

<!-- Begin FlexSlider -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() { //prepare function during window load
		$('.flexslider').flexslider(); //pull Flexslider Function
	});
</script>
<!-- -END- FlexSlider -->

<!-- Begin Mobile Navigation Function -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() { //prepare function during window load
		$("#toggle").click(function() { // when ID of 'toggle' is clicked
			$("#navigation").toggle(); // change CSS setting
		});
	});
</script>
<!-- -END- Mobile Navigation Function -->

<!-- Begin Adobe Typekit -->
<script src="https://use.typekit.net/qwp8tzf.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- -End- Adobe Typekit -->

<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- -EBD- WP Head Function -->

</head>
