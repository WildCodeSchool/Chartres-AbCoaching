<?php
/*
  Template Name: Page d'accueil du site internet d'Annie Bearez.
  Description: Page d'accueil du site internet d'Annie Bearez sur son activité de coaching.
*/
?>

<?php get_header();?>
  
<div class="row index_section1">
  <div class="index_section1_texte">    
    <div id="Apprendre">
    <a href="<?php get_home_url() ?>wordpress/index.php/formations/">Apprendre</a>
    </div>
    <div id="Accompagner">
    <a href="<?php get_home_url() ?>wordpress/index.php/coaching/">Accompagner</a>
    </div>
    <div id="Developper">
    <a href="<?php get_home_url() ?>wordpress/index.php/ateliers/">Développer</a>
    </div>
  </div>
  <div class="index_section1_photo">
  </div>     
<img src="<?php bloginfo('template_directory'); ?>/images/photo2annie.jpg" alt="" title="">
</div>


<div class="row index_section2_presentation">
<div class="bloc_photo col-lg-6 col-md-6 hidden-sm hidden-xs">
  <div class="presentation_photo col-lg-10 col-md-10 col-sm-10 col-xs-10">
    
  </div>
</div>
<div class="presentation_biographie col-lg-5 col-md-5 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
    <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>

</div>
</div>

<div class="row index_section3_activites">
<p class="accroche">Je vous propose</p>
<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
  <div class="row">
    <div class="formation_photo col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <a href="<?php get_home_url() ?>wordpress/index.php/formations/"> 
        <img src="<?php bloginfo('template_directory'); ?>/images/formation_test1.jpg" alt="" title="" class="img-responsive"> 
      </a>
      <h2>Formations</h2>
      <p>Management d'équipe</p>
      <p>Préparation à la retraite</p>
    </div>
    <div class="coaching_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
      <a href="<?php get_home_url() ?>wordpress/index.php/coaching/"> 
        <img src="<?php bloginfo('template_directory'); ?>/images/coaching_test1.jpg" alt="" title="" class="img-responsive"> 
      </a> 
      <h2>Coaching</h2>
      <p>Franchir un obstacle</p>
      <p>Atteindre un objectif</p>
      <p>Gagner du temps</p>
    </div>
    <div class="atelier_photo col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
      <a href="<?php get_home_url() ?>wordpress/index.php/ateliers/"> 
        <img src="<?php bloginfo('template_directory'); ?>/images/ateliers_test1.jpg" alt="" title="" class="img-responsive"> 
      </a> 
      <h2>Ateliers</h2>
      <p>Développement personnel</p>
      <p>Une demi-journée en petit groupe</p>
    </div>
  </div>
</div>
</div>

<div class="row index_section4_blog">
  <div class="citation col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">
    <div id="citation_content">
      <?php $my_query = new WP_Query('category_name=Citations&showposts=1&orderby=rand');
      while ($my_query->have_posts()) : $my_query->the_post();
      $do_not_duplicate = $post->ID; ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="blog1 col-lg-offset-1 col-lg-6 col-lg-offset-1 col-md-offset-1 col-md-6 col-md-offset-1 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">
    <div class="c-frame-tl"></div>
    <div class="c-frame-tr"></div>
    <div class="c-frame-br"></div>
    <div class="c-frame-bl"></div>
    <div id="blog1_content">
      <?php query_posts('category_name=Articles&&showposts=2'); ?>
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?> 
          <div class="post" id="post-<?php the_ID(); ?>"> 
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
            <p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?></p>
            <div class="post1_content"> 
              <?php the_excerpt(); ?> 
              <!-- <a href="<?php echo get_permalink(); ?>"> Lire la suite ...</a> -->
            </div> 
          </div> 
        <?php endwhile; ?> 
      <?php endif; ?> 
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    if($(window).width() > 700){
      $("#Apprendre").animate({left: '100px'}); 
      $("#Accompagner").animate({left: '250px'});
      $("#Developper").animate({left: '450px'}); 
    } else {
      $("#Apprendre").animate({left: '25px'}); 
      $("#Accompagner").animate({left: '75px'});
      $("#Developper").animate({left: '125px'}); 
    }
  });
</script>

<?php get_footer();?>