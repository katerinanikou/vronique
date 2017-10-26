<?php /*Template Name: Selected Work*/ get_header();?>


   <?php if ($image = get_field('headerimage_project')) : ?>
      <div class="headerimage_single">
         <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <p>The project</p>
      </div>	 
   
   <!-- If image is not chosen, display video-->          
   
   <?php else :?>  
      <div id="container" class="overlay-container">
         <iframe src="https://player.vimeo.com/video/<?php if ('get_field'('header_video')); { the_field('header_video'); } ?>?autoplay=1&title=0&byline=0&portrait=0&badge=0" frameborder="0">
         </iframe>

         <div id="overlay" class="myoverlay">
         </div><!-- End of overlay -->
            
            <div id="intro" class="introduction">
                  <p> <?php if ('get_field'('introduction')); { the_field('introduction'); } ?></p>
            </div>
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
   </div>

      <div class="elements-single">
         <div id="selected_image" 
            style="background-image:url('<?php the_field('selected_project_image'); ?>');">
         </div>
         
         <div class="rectangle">
         <?php
            // vars
            $selected = get_field('selected'); 
            if( $selected ): ?>
               <div id="rectanglecontent">
                  <p>Project Name: <?php echo $selected['project_name']; ?></p>
                  <p>Description: <?php echo $selected['project_description']; ?></p>
                  <p>Client: <?php echo $selected['project_client']; ?></p>
                  <p>Credits: <?php echo $selected['project_credits']; ?></p>
                  <p>Technology: <?php echo $selected['project_technology']; ?></p>
               </div><!--End of rectanglecontent-->    
            <?php endif; ?>
         </div><!-- End of rectangle -->
      
      </div><!--End of elements-->

<?php get_footer(); ?>