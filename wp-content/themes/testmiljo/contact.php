<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<!-- Big header image -->
  <div class="headerimage-about">
      <?php $image = get_field('header_contact'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <p>Contact us</p>
  </div>
<!-- Blocks with founder-photos -->
  <div class="elements-contact">
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