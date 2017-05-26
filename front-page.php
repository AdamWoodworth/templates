<?php get_header(); ?>

<!-- Begin main_container -->
<div id="content" class="page">

	<section class="widget-item welcome"> <!-- After launch, see which of these is working -->

        <h2>Welcome to Cephalopod Press</h2>

	<!-- Begin Content Loop -->
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> <!-- Starts the content loop -->
		<?php the_content(''); ?> <!-- pulls and crams the content (note the use of '') -->
		<?php endwhile; endif; ?> <!-- closes the content loop -->
	<!-- -END- Content Loop -->

	</section>

	<section class="widget-item welcome-articles"> <!-- After launch, see which of these is working -->

		<h3>Behold! Our latest machinations!</h3>
       
        <ul>
	<!-- Begin  Article Loop -->
			<?php rewind_posts(); ?> <!-- Not entirely sure what this does, maybe clearing out the previous loop? -->
			<?php query_posts('showposts=3'); ?> <!-- Sets the number of articles to put in this list -->
			<?php while (have_posts()) : the_post(); ?> <!-- pulls and crams the next post in order into the next 'li' -->
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?> <!-- Closes the Article Loop -->
	<!-- -END- Article Loop -->
        </ul>

	</section>

</div>

<!-- -END- Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>