<?php
/*
  Template Name: Contact
  Description: Template pour la page contact.
*/
?>

<?php get_header();?>

  <div class="row contact_section1_photo">
  </div>

  <div class="row">
    
    <!--Bloc contact-->
    <div class="contact_section2 col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">

    <div class= "contact">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?> 
          <?php the_content(); ?> 
        <?php endwhile; ?> 
      <?php endif; ?> 
    </div>


    <div class="sncf">
      <img src="<?php bloginfo('template_directory'); ?>/images/train-logo-icon-68833.png" alt="Horaires de train">
      <a href="http://www.voyages-sncf.com/billet-train/horaires">Pour consulter les horaires de train</a>
    </div>
    
    <!--Carte de localisation-->
    <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2641.7611968077867!2d1.581280550808675!3d48.537808031078235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e41064cb21fb51%3A0x2e86372cadd676!2s41+Rue+Robert+Poisson%2C+28130+Saint-Piat%2C+France!5e0!3m2!1sen!2sus!4v1460479440735" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  </div>
 
  <div class="section3_formulaire">
    <!--Formulaire-->
    <div class="formulaire col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-xs-10">
      <h3>Formulaire de contact</h3>
			<?php echo do_shortcode( '[contact-form-7 id="296" title="Formulaire de contact"]' ); ?>
    </div>
  </div>
</div>

<?php get_footer();?>