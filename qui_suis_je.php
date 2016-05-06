<?php
/*
  Template Name: Qui-suis-je ?
  Description: Page qui-suis-je du site internet d'Annie Bearez.
*/
?>

<?php get_header();?>

  <div class="qui_suis_je_section1_photo"></div>
 
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
    <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer();?>