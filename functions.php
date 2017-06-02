<?php

/*
Theme Name: Cephalopod Press Custom Theme
Author: Adam Woodworth
Author URI: http://www.incandescentideas.com/
Description: This theme was custom designed for Cephalopod Press and is Copyrighted 2017, Adam Woodworth, All rights reserved.
Version: Alpha 1.0
*/
	
// Register Menu Locations
register_nav_menus(array(
	'main-menu' => __('Main Menu'),
	'footer-menu' => __('Footer Menu'),
	));

// Register The Sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s sidebar01">', //Registers the sidebar for WP
	'after_widget' => '</div>', //Adds </div> after  the close of the sidebar widget
	));

// Create Post Thumbnails
add_theme_support( 'post-thumbnails' ); //adds pre-installed WP function

// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' ); //adds pre-installed WP function



// Get My Title Tag 
//code-along with Mike
function get_my_title_tag() { //creates a new function...
	global $post; // a global function reacting to $post
	if ( is_front_page() ) {  // if on the front page...
		bloginfo('description'); // pull+cram the sites WP tagline.
	} 
	elseif ( is_page() || is_single() ) { // If not on the title page, but on 'page' or 'single'...
		the_title(); // pull+cram the page or single post title.
	} 
	else { // otherwise... (this section seems redundant, nut not sure)
		bloginfo('description'); // pull+cram the WP tagline like on front_page
	} 
	if ( $post->post_parent ) { // for Parent Pages
		echo ' | '; // cram in a separator with spaces
		echo get_the_title($post->post_parent);  // insert code to pull+cram the parent page title
	}
	echo ' | '; // cram in another separator with spaces
	bloginfo('name'); // retrieve the site name
	echo ' | '; // cram in one more separator with spaces
	echo 'Federal Way, WA.'; // insert 'Federal Way, WA' 
};


//Look out for these functions:

	//have_posts()
	//the_post()
	//the_ID()
	//the_title()
	//the_time('F j,Y')
	//the_author()
	//the_post_thumbnail('large')
	//the_content('')
	// BlogInfo Function
	// BodyClass Function
	// WP Head Function
	// WP Footer Function
?>