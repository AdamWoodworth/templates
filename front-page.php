<?php get_header(); ?>

<!-- Begin main_container -->
<div id="content" class="front-page">

<!-- Begin Content Section -->
	
	<section class="widget-item">
       
        <h2>Welcome to Cephalopod Press</h2>
        
	<!-- Begin Content Loop -->
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!-- Starts the content loop -->
		<article id="article-<?php the_ID(); ?>" class="article"> <!-- Defines article for css -->
		<?php the_content(''); ?> <!-- pulls and crams the content (note the use of '') -->
		</article>
		<?php endwhile; endif; ?> <!-- closes the content loop -->
	<!-- -END- Content Section -->
				
		<small>front-page.php</small>
		
	</section>
		
<!-- -END- Content Section -->

<!-- Begin Flex Slider -->
	<div class="flexslider">
		<ul class="slides">
			<li><img src="<?php bloginfo('template_directory') ?>/images/img_slide_01.jpg" width="940" height="400" alt="Slider Image 1"</li>
			<li><img src="<?php bloginfo('template_directory') ?>/images/img_slide_02.jpg" width="940" height="400" alt="Slider Image 2"</li>
			<li><img src="<?php bloginfo('template_directory') ?>/images/img_slide_03.jpg" width="940" height="400" alt="Slider Image 3"</li>
		</ul>
	</div>
<!-- -END- Flex Slider -->

<!-- Begin Article Section -->
	
	<section class="widget-item">
		
		<h2>Cephalopod News!</h2>
       
		<dl>
	<!-- Begin news article Loop -->
			<?php rewind_posts(); ?> <!-- closes and clears out previous loops -->
			<?php query_posts(array('posts_per_page' => '2', 'category_name' => 'news' )); ?> <!-- Sets the number of articles to put in this list -->
			<?php while (have_posts()) : the_post(); ?> <!-- pulls and crams the next post in order into the next 'li' -->
				<dt><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a> <!-- pulls and places the featured image --></dt>
				<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><?php the_excerpt(''); ?></dd><!-- stacks the title and exerpt -->
				<p class="read-more"><a href="<?php the_permalink(); ?>">Read More...</a></p> <!-- Permalink to the standalone article -->
			<?php endwhile; ?> <!-- Closes the Article Loop -->
	<!-- -END- news Article Loop -->
		</dl>
        
        
		<h2>Behold!</h2>
		<h3>Our latest Machinations!</h3>
       
		<dl>
	<!-- Begin project article Loop -->
			<?php rewind_posts(); ?> <!-- Not entirely sure what this does, maybe clearing out the previous loop? -->
			<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'project' )); ?> <!-- Sets the number of articles to put in this list -->
			<?php while (have_posts()) : the_post(); ?> <!-- pulls and crams the next post in order into the next 'li' -->
				<dt><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a> <!-- pulls and places the featured image --></dt>
				<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><?php the_excerpt(''); ?><p class="read-more"><a href="<?php the_permalink(); ?>">Read More...</a></p> <!-- Permalink to the standalone article --></dd><!-- stacks the title and exerpt -->
			<?php endwhile; ?> <!-- Closes the Article Loop -->
	<!-- -END- project Article Loop -->
		</dl>

	</section>
	
<!-- -END- Article Section -->

</div>

<!-- -END- Content -->

<?php get_footer(); ?>