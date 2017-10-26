<?php /* Template Name: front page*/ ?>
<?php get_header(); ?>

<!-- Header image -->
    <?php if ($image = get_field('header_big_img')) : ?>

    	<div class="headerimage">
   			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<div class="introduction">
					<p>
						<?php if ('get_field'('introduction')); { the_field('introduction'); } ?>
					</p>
   				<div class="logo"><p><?php if ('get_field'('logo')); { the_field('logo'); } ?></p></div>
   				<div class="arrow">
   					<a href="#blockimage">
   					<?php if ($image = get_field('arrow')); ?>
   					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
   					</a>
   				</div>
		</div>

	<!-- If image is not chosen, display video--> 			 
	<?php else :?>
			
		<div id="container" class="overlay-container">
			<iframe src="https://player.vimeo.com/video/<?php if ('get_field'('header_video')); { the_field('header_video'); } ?>?autoplay=0&title=0&byline=0&portrait=0&badge=0" frameborder="0">
			</iframe>

			<div id="overlay" class="myoverlay">
			</div><!-- End of overlay -->
				<div id="intro" class="introduction">
						<p>
						<?php if ('get_field'('introduction')); { the_field('introduction'); } ?>
					</p></div>
   				<div id ="logo" class="logo"><p><?php if ('get_field'('logo')); { the_field('logo'); } ?></p></div>


			<button id="btn" class="button" onclick="myFunction()">
				<p><?php if ('get_field'('button_text')); { the_field('button_text'); } ?></p></button>
			<script>
				function myFunction() {
				document.getElementById("overlay").style.display = "none"; 
				document.getElementById("intro").style.display = "none"; 
				document.getElementById("logo").style.display = "none"; 
				document.getElementById("btn").style.display = "none"; 
				}
			</script>

		</div> <!-- End of overlay-container-->

	<?php endif; ?> <!-- End of if statement-->
	
	<!-- End of header -->





	<!-- Big headline VR Productions -->
	<div class="bigheadline">
		<h4><?php if ('get_field'('big_headline')); { the_field('big_headline'); } ?></h4>
	</div>

	<!-- Flexbox starts here -->
	<div class="elements">
		<!-- 1st block -->
		<div class="blockparagraph">
			<p><?php if ('get_field'('block_paragraph')); { the_field('block_paragraph'); } ?></p>
		</div>

		<!-- 2nd block with image -->
		<div id="blockimage" style="background-image:url('<?php the_field('block_image'); ?>');">
		</div>
	</div> <!-- End of flexbox, don't remove --> 	
		
	<div class="elements">
		<!-- 3:d block image -->
		<div class="blockimage2" style="background-image:url('<?php the_field('block_image_2'); ?>');">
		</div>
		<!-- 4th block paragraph-->
		<div class="blockparagraph2">
			<p><?php if ('get_field'('block_paragraph_2')); { the_field('block_paragraph_2');} ?></p>
		</div>
	</div>
		
	<div class="elements">
		<!-- 5th block "Work" -->
		<div class="block_entry_1" style="background-image:url('<?php the_field('block_entry_1'); ?>');">
			<a href="http://localhost:8888/testmiljo/work/"><p class="title"> Work </p></a>
		</div>
		<!-- 6th block "About" -->
		<div class="block_entry_2" style="background-image:url('<?php the_field('block_entry_2'); ?>');">
			<a href="http://localhost:8888/testmiljo/about/"><p class="title"> About </p></a>
		</div>
		<!-- 7th block "Contact" -->
		<div class="block_entry_3" 
			style="background-image:url('<?php the_field('block_entry_3'); ?>');">
			<a href="http://localhost:8888/testmiljo/contact/"><p class="title"> Contact </p></a>
		</div>
	</div>

<?php get_footer(); ?>