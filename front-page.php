<?php get_header(); ?>

<!-- Begin Content Section -->
<div id="content" class="front-page">
	<h2>Welcome to Cephalopod Press</h2>
	<section class="widget-item seo-paragraph">
	<!-- Begin Content Loop -->
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!-- Starts the content loop -->
		<article id="article-<?php the_ID(); ?>" class="article"> <!-- Defines article for css -->
		<?php the_content(''); ?> <!-- pulls and crams the content (note the use of '') -->
		</article>
		<?php endwhile; endif; ?> <!-- closes the content loop -->
	<!-- -END- Content Section -->
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
	
		
	<h2>Cephalopod News!</h2>
	<section class="widget-item" id="news">
		<dl>
	<!-- Begin news article Loop -->
			<?php rewind_posts(); ?> <!-- closes and clears out previous loops -->
			<?php query_posts(array('posts_per_page' => '1', 'category_name' => 'news' )); ?> <!-- Sets the number of articles to put in this list -->
			<?php while (have_posts()) : the_post(); ?> <!-- pulls and crams the next post in order into the next 'li' --><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<dt><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a> <!-- featured image -->
			</dt>
			<dd>
			<p><?php echo get_the_excerpt(); ?><!-- exerpt -->
			<a class="read-more" href="<?php the_permalink(); ?>"><b>Read More&nbsp;&raquo;</b></p> <!-- Permalink to the standalone article --></dd>
			<?php endwhile; ?> <!-- Closes the Article Loop -->
	<!-- -END- news Article Loop -->
		</dl>
	</section>
       
        
        
	<h2>Behold!</h2>
	<h3>Our latest Machinations!</h3>
	<section class="widget-item" id="quadrants">
		<dl>
	<!-- Begin project article Loop -->
			<?php rewind_posts(); ?> <!-- clears out the previous loop -->
			<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'project' )); ?> <!-- Sets the number of articles to put in this list -->
			<?php while (have_posts()) : the_post(); ?> <!-- pulls and crams the next post in order into the next 'li' -->
			<div class="quadrant">
				<dt>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!-- title -->
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a> <!-- featured image -->
				</dt>
				<dd>
				<p><?php echo get_the_excerpt(); ?><!-- Excerpt --><a class="read-more" href="<?php the_permalink(); ?>"><b>Read More&nbsp;&raquo;</b></p>
				</dd><!-- exerpt -->
			</div>
			<?php endwhile; ?> <!-- Closes the Article Loop -->
	<!-- -END- project Article Loop -->
		</dl>
	</section>
	
<!-- -END- Article Section -->

</div>
<div class="bottom">
	<small>front-page.php</small>
</div>
<!-- -END- Content -->

<?php get_footer(); ?>