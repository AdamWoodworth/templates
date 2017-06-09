<!-- Begin Sidebar -->

<div id="sidebar">
	
<!-- Begin Subnav -->
	<div id="sub-navigation" class="widget">
		<?php if (is_page()) : ?> <!-- if the current page is using page.php... -->
		<h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); ?></h2> <!-- ...pull+cram the gateway page title -->
	
<!-- Begin Quote Loop -->
		<?php if (get_post_meta($post->ID, 'Quote', true)): ?><!-- Looks for quotes -->

		<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); //injects the quote if found ?></blockquote>

		<?php endif; ?>
<!-- -End- Quote Loop -->
	
		<ul class="sub-navigation-items"><?php 
			if ($post->post_parent) { 
				wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); //if the page has a parent, list the sub-pages with no title
			} else {
				wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); 
			};?> <!-- Otherwise list the sub-pages with no title -->
		</ul>
		<h3>sidebar.php</h3>
		<?php endif; ?> <!-- end if we are in "pages" -->
		<?php if (!(is_page())) : ?> <!-- if we are not using page.php... -->
		<h2 class="sub-navigation-title">Blog</h2>
		<ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); ?> <!-- ...list the categories with no title -->
		</ul>
		<?php endif; ?>
<!-- -END- Subnav -->
	
<!-- Begin Dynamic Sidebar -->
		<?php dynamic_sidebar(1); ?> <!-- pull+cram  dynamic sidebar WP function -->
<!-- -END- Dynamic Sidebar -->
	</div>
</div>

<!-- -END- Sidebar -->