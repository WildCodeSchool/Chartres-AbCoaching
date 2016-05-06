<?php
/*
  Template Name: Témoignages
  Description: Template pour la page témoignages.
*/
?>

<?php get_header();?>

  <div class="temoignages_section1_photo">
  </div>

  <div class="temoignages_section2">
    <h1><u>Témoignages</u></h1>
    <div class="ecart row">
      
      <div class="temoignages col-lg-offset-1 col-lg-5 col-lg-offset-1 col-md-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
        <img src="<?php bloginfo('template_directory'); ?>/images/1460407704_quote.png" class="img-quote">
        <div id="temoignages_content">
          <?php $my_query = new WP_Query('category_name=Témoignages&showposts=1&orderby=rand');
          while ($my_query->have_posts()) : $my_query->the_post();
          $do_not_duplicate = $post->ID; ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/1460407704_quote_reverse.png" class="img-quote-reverse">
      </div>

      <!--Formulaire-->
      <div class="formulaire col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-5 col-sm-12 col-xs-12" style="margin-top:50px;">
          <h3>Votre témoignage m'intéresse...</h3>
          <?php echo do_shortcode( '[contact-form-7 id="297" title="Formulaire de témoignages"]' ); ?>
      </div>
      
    </div>
  </div>


<?php get_footer();?>

