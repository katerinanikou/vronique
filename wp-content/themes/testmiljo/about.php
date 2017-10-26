<?php /* Template Name: about */ ?>
<?php get_header(); ?>

	<!-- Big header image -->
	<div class="headerimage-about">
    	<?php $image = get_field('header_about'); ?>
   			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
   				<p>About us</p>
	</div>	
		<!-- Big headline VR Productions -->
		<div class="bigheadline-about">
			<h4><?php if ('get_field'('big_headline_about')); { 
			the_field('big_headline_about');} ?></h4>
		</div>

		<!-- 1+2 Blocks with image and textfield-->
		<div class="elements-about">
			<div class="blockimageabout" 
			style="background-image:url('<?php the_field('block_image_about'); ?>');">
			</div>
			<?php
            // vars
            $blockparagraphabout = get_field('blockparagraphabout'); 
            if( $blockparagraphabout ): ?>
            	<div class="blockparagraphabout">
                    <h2><?php echo $blockparagraphabout['large_text']; ?></h2>
                    <p><?php echo $blockparagraphabout['small_text']; ?></p>
                </div><!--End of selected-->    
            <?php endif; ?>
		</div> <!-- End of elements -->

		<!-- People heading -->
		<div class="blockbodytext">
			<?php if ('get_field'('block_body_text')); { 
				the_field('block_body_text'); } ?>
			<p>People</p>
		</div>

		<!-- Blocks with founder-photos -->
		<div class="elements-about">
			<div class="founderphoto1">
    			<?php $image = get_field('founder_photo'); ?>
   				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class="founderphoto2">
    			<?php $image = get_field('founder_photo_2'); ?>
   				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</div> <!-- End of elements -->

		<!-- Blocks with founder-text -->
		<div class="elements-about">
			<?php
            // vars
            $employees = get_field('employees'); 
            	if( $employees ): ?>
                	<div class="blockfoundertext">
                    	<h2><?php echo $employees['employee_name']; ?></h2>
                    	<h4><?php echo $employees['employee_job_title']; ?></h4>
                    	<p><?php echo $employees['employee_content']; ?></p>
                  	</div><!--End of blockfoundertext-->    
            <?php endif; ?>

			<?php
           	// vars
            $employees2 = get_field('employees2'); 
               if( $employees2 ): ?>
                	<div class="blockfoundertext2">
                    	<h2><?php echo $employees2['employee_name']; ?></h2>
                    	<h4><?php echo $employees2['employee_job_title']; ?></h4>
                     	<p><?php echo $employees2['employee_content']; ?></p>
                	</div><!--End of selected-->    
            <?php endif; ?>
		</div> <!-- End of elements -->

	<?php get_footer(); ?>