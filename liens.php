<?php
/*
  Template Name: Liens
  Description: Template pour liens.
*/
?>

<?php get_header();?>
  
    <div class="liens_section1_photo">
    </div>

    <div class="liens_section2">
      
     <div class="row">
        <div class="liens_instit col-lg-12">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
    <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
        </div>
      </div>
    </div>

<?php get_footer();?>