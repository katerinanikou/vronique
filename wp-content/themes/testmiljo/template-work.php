<?php /*Template Name: Selected Work*/ get_header();?>

	<div class="headerimage_work">
		<img src="<?php the_field('headerimage_work'); ?>" alt="" />
   			<p>Selected work</p>
   			<div class="arrow">
   			<a href="#button">
   				<?php if ($image = get_field('arrow')); ?>
   					<img src="<?php echo $image['url']; ?>" 
   					alt="<?php echo $image['alt']; ?>" />
   			</a>
	</div>	

	<?php query_posts(array(
		'post_type' => 'work'
	)); ?>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		
		<!-- Flexbox starts here -->
		<div class="projectelements">
			<div class="image">
				<img src="<?php the_field('project_image'); ?>" alt="" />
				<p><?php if ('get_field'('project_name')); { the_field('project_name');} ?></p>
			
			<div class="overlay">
				<div id="projectdescription">
					<p><?php if ('get_field'('project_description')); { the_field('project_description'); } ?></p>
				</div>
				<a href="<?php the_permalink(); ?>"<p id="button">Explore</p>
					</a>
			</div><!-- End of overlay-->
			</div>
		</div> <!-- End of projectlements-->
	
	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
<?php get_footer(); ?>