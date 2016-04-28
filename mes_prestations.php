<?php
/*
  Template Name: Mes prestations (coaching et formations)
  Description: Template pour coaching et formations.
*/
?>

<?php get_header();?>

  <div class="row ateliers_section1_photo">
  </div>

<div class="row">
  <div class="prestations-wp col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
  
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?> 
        <?php the_content(); ?> 
      <?php endwhile; ?> 
    <?php endif; ?>  
      
  </div>
</div>
    
<?php get_footer();?>