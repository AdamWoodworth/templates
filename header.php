
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
<script src="<?php bloginfo('template_directory'); ?>/scripts/anim.js"
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


<body <?php body_class();?>onload="document.body.style.opacity='1'" > 

<!-- Begin Header -->
<div id="header">

<!-- Begin Header Masthead -->
	<hr class="header">
	<h1 id="cephalopod-press-logo">
<!-- Begin Cephalopod Press Logo -->
<svg version="1.1" id="cp-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 554.2 175.2" style="enable-background:new 0 0 554.2 175.2;" xml:space="preserve">
<style>
.shape.logo.blank {
	fill: rgba(255, 255, 255, 0.1);
	stroke-width: .25px;
	stroke: rgba(255, 255, 255, 1.0);
}
g:hover {
	fill: rgba(255, 255, 255, 0.6);
	transition-duration: .4s;
}/* ^Doesn't work */
.shape.logo.blank:hover {
	fill: rgba(255, 255, 255, 1.0);
	stroke-width: 0px;
	transition-duration: 1.5s;
}
.shape.logo.draw { /* need a way to change the classes in the svg to this class shortly after page load */
	fill: rgba(255, 255, 255, 1);
	transition: stroke-width: 1px linear;
	transition: stroke: rgba(255, 255, 255, 0.0) 4s linear;
	transition: width 3s linear;
	transition: fill 3s linear;
	transition-duration: 3s;
} 
</style>
<g>
	<g>
		<a href="http://www.cephalopod-press.com/wordpress/">
		<path class="shape logo blank" d="M174.4,114.5c2.9,0,5.3,0.3,7.2,2c2.1,1.8,2.6,4.4,2.6,6.2c0,4.1-2.5,8.1-9.1,8.1h-2.8v12.5h-3.2v-28.8H174.4z M172.4,127.7h2.6c3.8,0,6.1-1.9,6.1-5.2c0-4.6-4.3-5-6.3-5h-2.4V127.7z"></path>
		</a>
		
		<a href="http://www.cephalopod-press.com/wordpress/">
		<path class="shape logo blank" d="M216.1,114.5c1.9,0,4.8,0.1,7,1.6c1.7,1.1,3.1,3.3,3.1,6.4c0,4.4-2.9,7.6-7.2,7.9l9.1,12.9h-3.9l-8.8-12.6
		h-0.8v12.6h-3.2v-28.8H216.1z M214.7,127.8h2c4,0,6.3-1.9,6.3-5.3c0-1.6-0.5-3.2-2.3-4.2c-1.3-0.7-2.8-0.8-4.1-0.8h-1.9V127.8z"></path>
		</a>
		
		<a href="http://www.cephalopod-press.com/wordpress/">
		<path class="shape logo blank" d="M270.8,117.5H259v8.5h11.4v3H259v11.2h11.7v3h-14.9v-28.8h14.9V117.5z"></path>
		</a>
		
		<a href="http://www.cephalopod-press.com/wordpress/">
		<path class="shape logo blank" 
		d="M312.2,120.2c-0.4-0.8-1-1.6-1.7-2.2c-0.6-0.4-1.6-1-3.2-1c-2.8,0-4.8,1.8-4.8,4.4c0,1.1,0.3,1.8,1.1,2.5	c0.9,0.9,1.9,1.3,3,1.8l2.8,1.2c1.7,0.7,3.2,1.5,4.4,2.7c1.5,1.5,2.1,3.1,2.1,5.2c0,5.3-3.9,8.8-9.1,8.8c-1.9,0-4.3-0.4-6.3-2.3c-1.4-1.4-2.3-3.4-2.7-5.1l3.1-0.9c0.2,1.5,0.9,2.8,1.7,3.7c1.3,1.3,2.7,1.6,4.1,1.6c3.9,0,5.8-2.8,5.8-5.7c0-1.3-0.4-2.4-1.4-3.4c-0.8-0.8-1.9-1.3-3.4-2l-2.6-1.2c-1.1-0.5-2.5-1.1-3.8-2.4c-1.3-1.2-2-2.5-2-4.7c0-4.4,3.4-7.4,8.1-7.4c1.8,0,3.2,0.3,4.6,1.3c1.2,0.8,2.2,1.9,2.8,3.2L312.2,120.2z"></path>
		</a>
		
		<a href="http://www.cephalopod-press.com/wordpress/">	
		<path class="shape logo blank"
		d="M356.3,120.2c-0.4-0.8-1-1.6-1.7-2.2c-0.6-0.4-1.6-1-3.2-1c-2.8,0-4.8,1.8-4.8,4.4c0,1.1,0.3,1.8,1.1,2.5	c0.9,0.9,1.9,1.3,3,1.8l2.8,1.2c1.7,0.7,3.2,1.5,4.4,2.7c1.5,1.5,2.1,3.1,2.1,5.2c0,5.3-3.9,8.8-9.1,8.8c-1.9,0-4.3-0.4-6.3-2.3c-1.4-1.4-2.3-3.4-2.7-5.1l3.1-0.9c0.2,1.5,0.9,2.8,1.7,3.7c1.3,1.3,2.7,1.6,4.1,1.6c3.9,0,5.8-2.8,5.8-5.7c0-1.3-0.4-2.4-1.4-3.4c-0.8-0.8-1.9-1.3-3.4-2l-2.6-1.2c-1.1-0.5-2.5-1.1-3.8-2.4c-1.3-1.2-2-2.5-2-4.7c0-4.4,3.4-7.4,8.1-7.4c1.8,0,3.2,0.3,4.6,1.3c1.2,0.8,2.2,1.9,2.8,3.2L356.3,120.2z"></path>
		</a>
	</g>
	<g>
		<g>
			<a href="http://www.cephalopod-press.com/wordpress/">
			<path class="shape logo blank" d="M15.5,117.5C5,106.4,0,93.6,0,72.1c0-15.2,5.5-31.4,16-43.8c7.5-8.8,18.8-18.9,37.1-18.9	c18.4,0,29.3,11,36.6,15.6s16.1,9.5,24.7,11.4c7.9,1.7,17.9,2,28-3.5c1.1-0.6,2.1-0.3,1.5,1c-1.2,2.8-13.4,8.6-28.3,7c-13-1.4-22.4-5.1-31-10.5c-5.2-3.3-19.9-8.8-30-8.8C34.4,21.6,16,48.2,16,72.1c0,18,2.5,27.5,12.5,38.3c10.7,11.7,23.8,12.5,33.3,10.2c8.3-2.1,16.5-7.4,27.7-6.9c11.7,0.5,20.2,7.1,24.7,13.2c0.6,1.3-0.1,2.9-1.6,1.6c-6.3-4.8-13-9-22-9c-14.4,0-19.1,13-41,12.9C32.3,132.3,24.3,126.5,15.5,117.5z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">
			<path class="shape logo blank" 
			d="M85.7,67.1c-0.2,1.1-0.4,2.9-0.4,5.6c0,11.4,7.2,20.1,16.6,20.1c7.1,0,12.1-4.1,14.1-7.9c0.2-0.5,0.7-0.7,1.1-0.6l1.5,0.8c0.4,0.1,0.6,0.5,0,1.8c-2.1,4.7-8.2,12.7-18.6,12.7c-6.7,0-14-2-18.3-8.3c-4.1-6-5.1-10.3-5.1-18.5c0-4.6,1.2-12.4,7.4-18.6c5-5.1,10.9-6.2,16.7-6.2c13.4,0,17.2,12.6,17.2,17.2c0,1.6-1.4,1.9-3.3,1.9
			H85.7z M104.3,63.6c2.2,0,3.2-0.6,3.2-1.6c0-2.7-1.4-10.4-9-10.4c-5.1,0-10,3.4-12.3,12H104.3z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank"
			d="M134,65.1c0-2.8-0.8-4.4-4.2-6.3l-2.7-1.5c-0.8-0.4-0.8-0.7-0.8-1.1v-0.9c0-0.4,0.2-0.6,0.8-0.8l11.2-5.6c0.9-0.5,1.9-0.9,2.7-0.9c0.6,0,0.8,0.6,0.8,2.3l0.5,5.6h0.4c3.2-4.1,9.2-7.8,17-7.8c6,0,9.9,2.6,13.3,5.7c4.4,4.4,6.3,9.2,6.3,18.2c0,15.3-10.6,27.6-25.2,27.6c-3.2,0-8.1-0.5-11.7-2c0,0,0-10.4,0,23.4c0,20-5.1,27.8-16.9,32.7c-16.6,6.9-43.7-11.6-62.6-11.2c-20.7,0.5-27.8,10.3-27.8,10.3c-1.3,1.8-3.2,0.8-1.8-1.2c0.2-0.2,8.4-12.2,29.2-13.5c18.2-1.1,48.3,12.3,60.7,6.3c8.2-3.9,9.3-9.5,10-18.5c0.3-3.5,0.8-15.3,0.8-23.2L134,65.1L134,65.1z M142.4,86.5	c0,2.6,0.2,4.7,2.5,6.2c3.3,2.3,6.9,3.2,11.7,3.2c6.7,0,13.5-5,13.5-19.5c0-16.3-7.4-22.9-15.2-22.9c-4.9,0-9.7,2.8-12.5,7.5
			V86.5z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank"
			d="M387.4,65.1c0-2.8-0.8-4.4-4.2-6.3l-2.7-1.5c-0.8-0.4-0.8-0.7-0.8-1.1v-0.9c0-0.4,0.2-0.6,0.8-0.8l11.2-5.6c0.9-0.5,1.9-0.9,2.7-0.9c0.6,0,0.8,0.6,0.8,2.3l0.5,5.6h0.4c3.2-4.1,9.2-7.8,17-7.8c6,0,9.9,2.6,13.3,5.7c4.4,4.4,6.3,9.2,6.3,18.2c0,15.3-10.6,27.6-25.2,27.6c-3.2,0-8.1-0.5-11.7-2c0,0,0,9.4,0,43.2c0,20-5.1,27.8-16.9,32.7c-16.6,6.9-43.7-11.6-62.6-11.2c-20.7,0.5-25.3,9.3-26.7,11.2c-2.4,3.3-5.2,1.4-2.9-2c1.4-2,8.4-12.2,29.2-13.5c18.2-1.1,48.3,12.3,60.7,6.3c8.2-3.9,9.3-9.5,10-18.5c0.3-3.5,0.8-35.1,0.8-43L387.4,65.1L387.4,65.1z M395.8,86.5	c0,2.6,0.2,4.7,2.5,6.2c3.3,2.3,6.9,3.2,11.7,3.2c6.7,0,13.5-5,13.5-19.5c0-16.3-7.4-22.9-15.2-22.9c-4.9,0-9.7,2.8-12.5,7.5
			V86.5z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank"
			d="M191.4,34.5c0-7.1-1.2-22.4-13.8-23.6s-29.2,19.9-54.3,18.4C104.2,28.2,89,14.5,88.1,13.7c-1.7-1.5-0.8-2.9,1.3-1.2c1.1,0.9,15.7,10.7,34.6,12.3c18.7,1.5,36.2-20.3,50.7-20.3c11.5,0,25.2,1.9,25.2,29.3c0,6-0.1,12-0.1,14.5v7.5h0.6c4.1-4.9,10.9-7.6,16-7.6c4.9,0,8.3,1.5,11.6,4.7c5.3,4.9,5,10.9,5,17.2v6.7c0,6.5,0.2,13.8,0.2,16	c0,1.4,1.9,1.8,4.3,1.8h2c0.9,0,1.3,0.2,1.3,1.1v1.8c0,0.9-0.2,1.4-0.9,1.4c-0.8,0-4.6-0.4-11.2-0.4c-5.7,0-9.9,0.4-11,0.4c-0.8,0-1.1-0.4-1.1-1.3v-2c0-0.6,0.1-0.9,0.8-0.9h2.7c2,0,4.3-0.2,4.4-2.2c0.1-1.6,0-7.8,0-11.6v-9.5c0-6.5-0.5-11.2-3.9-14.4c-2.3-2.2-4.8-3.3-7.7-3.3c-3.4,0-7.6,1.2-10.9,4.9c-1.1,1.3-2.3,3.6-2.3,5.7v25.5c0,3.7,0.4,4.8,2.6,4.8h3.5c0.8,0,1.3,0.2,1.3,0.9v2c0,0.8-0.2,1.3-0.9,1.3c-0.9,0-5.7-0.4-11.1-0.4c-5.8,0-10.3,0.4-11.3,0.4c-0.5,0-0.8-0.4-0.8-1.2v-2.1c0-0.8,0.5-0.9,1.8-0.9h2.5c1.9,0,3.6-0.5,3.9-1.9c0.4-2.2,0.4-15.1,0.4-22.7V34.5H191.4z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank"
			d="M333.2,91.5c-5.4-6.4-6.4-10.7-6.4-19c0-6,3.2-13.4,10-18.8c6.1-4.7,11.8-5.6,15.6-5.6c6.4,0,12.8,3.3,16.3,6.8c5.3,5.4,7.9,11.4,7.9,19c0,12.7-11.4,25.7-25.8,25.7C345.3,99.6,338.1,97.3,333.2,91.5z
			M365.4,72.7c0-13-9.5-21.1-15.4-21.1c-3.2,0-6.2,0.7-9,3.7c-4.6,4.7-6.2,9.5-6.2,18.3c0,6.5,0.7,11,4.4,16.3c2.7,3.9,6.1,6.1,11.6,6.1
			C359.7,96.1,365.4,85.2,365.4,72.7z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank"
			d="M448.3,91.5c-5.4-6.4-6.4-10.7-6.4-19c0-6,3.2-13.4,10-18.8c6.1-4.7,11.8-5.6,15.6-5.6	c6.4,0,12.8,3.3,16.3,6.8c5.3,5.4,7.9,11.4,7.9,19c0,12.7-11.4,25.7-25.8,25.7C460.5,99.6,453.2,97.3,448.3,91.5z
			M480.5,72.7c0-13-9.5-21.1-15.4-21.1c-3.2,0-6.2,0.7-9,3.7c-4.6,4.7-6.2,9.5-6.2,18.3c0,6.5,0.7,11,4.4,16.3c2.7,3.9,6.1,6.1,11.6,6.1
			C474.8,96.1,480.5,85.2,480.5,72.7z"></path>
			</a>
		
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank" id="pupil-a"
			d="M460.5,61.3c6.7,0-0.1,5.6-0.1,12.5s8.1,12.5,0.1,12.5c-6.4,0-2.9-5.6-2.9-12.5
			S454,61.3,460.5,61.3z"></path>
			</a>
			
			<a href="http://www.cephalopod-press.com/wordpress/">		
			<path class="shape logo blank" id="pupil-b"
			d="M344.7,61.3c6.7,0-0.1,5.6-0.1,12.5s8.1,12.5,0.1,12.5c-6.4,0-2.9-5.6-2.9-12.5
			S338.3,61.3,344.7,61.3z"></path>
			</a>
		</g>
		<a href="http://www.cephalopod-press.com/wordpress/">
		<path class="shape logo blank"
		d="M420,17.6c-6.7,7.3-18.1,8.2-29,5.3C370,17.2,359.3,5,349.4,2.3c-8.7-2.3-21-5-31.8,4c-4.1,3.4-3.4,2.8-12.5,8.5c-4.2,2.6-3.7,1.7-7.6,3.4c-0.7,0.2-1.1,0.5-1.1,0.8v1c0,0.2,0.1,0.4,0.7,0.6l2.3,0.8c3.7,1.2,5.6,3,5.8,7c0.2,3,0.4,13.7,0.4,22v7.4c0,6.8,0,26.9-0.1,30.5c-0.1,2.1-1.3,2.9-2.6,2.9h-5.6c-1.3,0-1.5,0.2-1.5,1.1v2c0,0.7,0.2,1.2,0.8,1.2c1.1,0,5.7-0.4,13.2-0.4c7.2,0,12.4,0.4,13.2,0.4c0.5,0,0.7-0.5,0.7-1.2v-2c0-0.7-0.2-1.1-1.3-1.1h-5.3c-2.5,0-2.9-1.6-3-3.6C314,84,314,66.3,314,60.3v-9.2c0.1-0.4,0.1-0.9,0.1-1.7c-0.1-8.2,0.3-15.1,2.4-21.5	C323,7.8,342.2,7,352.8,13.6c12.2,7.6,25.5,13.2,37,14.8c13.7,1.9,23.7-0.5,31.8-9C423.9,16.9,422.3,15.1,420,17.6z"></path>
		</a>

		<a href="http://www.cephalopod-press.com/wordpress/">		
		<path class="shape logo blank"
		d="M554.1,94.3l-0.2-0.9c-0.2-0.6-0.7-0.7-2.3-0.8s-4.1-0.8-5.1-2c-0.9-1.2-1.2-6.3-1.2-10.6c0,0,0-39.4,0-51.5c0-18.7-15.8-29-32.7-22.9C501,9.8,494.4,15.4,483.8,21c-10.6,5.5-19.3,7-27.1,4.5c-5.5-1.8-9.8-4-11.6-11c-0.5-1.9-2.5-1.7-2.3,0.3c0.6,7.6,6.1,12.5,11.5,14.9c7.7,3.4,20.6,3.1,31.7-1.8c9.8-4.4,16.9-9.2,26.6-13.6c14.6-6.6,24.2,3,24.2,15.1v21.2c-3.5-1.1-7.7-1.8-12.5-1.8c-6.5,0-12.8,2.5-17.4,7.4c-5.5,5.5-8.2,12.6-8.2,19.9	c0,7.8,1.4,13.1,7.4,18.9c5.5,5.6,9.9,5.4,13.8,5.4c6,0,13.4-2.6,17.2-6.3l1.5,5.1c0.2,0.8,0.8,1.2,1.5,0.9l13.2-4.4
		C554,95.4,554.2,95,554.1,94.3z M536.8,84.9c0,1.3-0.1,2.2-0.7,4c-1.2,3-6.2,6.4-12.7,6.4c-6.8,0-15.9-9.6-15.9-22.8c0-4.4,0.8-10.6,5.4-15.5c3-3.2,7-4.2,10.6-4.2c6.9,0,10.6,3.2,12.3,6.3c1.1,1.9,1.1,4.1,1.1,5.7
		L536.8,84.9L536.8,84.9z"></path>
		</a>

		<a href="http://www.cephalopod-press.com/wordpress/">		
		<path class="shape logo blank"
		d="M291.5,91.7l-1.2-0.9c-0.5-0.4-0.7-0.1-1.2,0.5c-0.6,0.8-2.2,1.8-4.1,1.8c-2.1,0-3.5-2.1-3.5-8.8v-37c-0.1-10,0.8-16.1-0.1-22.8c-1.9-13.6-12.7-21-26.6-20c-12.2,0.9-21,9.9-20.8,21.8c0.1,5.5,2.4,9.5,4.2,12.1c2,2.8,6,6.3,8.7,8.4c1.5,1.1,4.5,3.2,5.7,4.7c0.6,1,1.2,1.9,1.8,2.9c2.8,4.4-2.6,10.8-6.6,6.6c-1.3-1.4-3-1.4-2.8,0.1c0.9,7.3,11.9,6.6,14.7,0.5c5.4-12-12-20-16.7-27.6c-5.1-8.3-0.1-19.5,7.8-21.4c11-2.7,20,3,22.1,13.7c1.3,6.5,0.3,11.4,0.1,18c0,0.1,0,1.9,0,2V69c-1.9,1.6-7.9,4.4-13.2,6.8c-9.2,4.1-11.7,8.8-11.7,14.1c0,7.4,4.2,9.7,7,9.7c2.6,0,4.7,0,6.9-0.7c5.3-1.8,9.1-4.2,11.6-7.1h0.2c1.1,4.8,4.1,7.8,8.3,7.8c6,0,8.2-4,9.1-5.7C292.1,92.7,291.9,92.1,291.5,91.7z M273.1,86.8c0,3.2-6.2,7.2-9.6,7.2c-3.5,0-6.1-2.1-6.1-6.4c0-9.7,11.4-12,15.6-15.2v14.4H273.1z"></path>
		</a>
	</g>
</g>
</svg>
<!-- -END- Cephalopod Press Logo -->

	</h1>
	<hr class="header">
<!-- -END- Header Masthead -->


<!-- Begin Responsive Menu Toggle Button -->
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.svg" width="25" height="25" alt="Toggle Menu">
<!-- -END- Responsive Menu Toggle Button -->


<!-- Begin Wordpress Menu -->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'navigation')); ?>
<!-- -END- Wordpress Menu -->

</div> <!-- -END- Header -->

<!-- Begin #Main-Container -->
<div id="main-container">


<!-- Begin Content -->
