<?php
/*
  Template Name: Ateliers
  Description: Template pour la page ateliers incluant un planning des prochains ateliers ...
*/
?>

<?php get_header();?>


  <div class="row ateliers_section1_photo">
  </div>

  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?> 
      <?php the_content(); ?> 
    <?php endwhile; ?> 
  <?php endif; ?>  

<div class="row ateliers_section3_planning">
  <h2><u>Planning des prochains ateliers :</u></h2>
  <div id="atelier_content">
    <?php query_posts('category_name=Planning-ateliers&showposts=2'); ?>
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?> 
        <?php the_content(); ?> 
      <?php endwhile; ?> 
    <?php endif; ?> 
  </div>
</div>
    
<?php get_footer();?>