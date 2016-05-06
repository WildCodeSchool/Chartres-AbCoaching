<?php
/*
  Template Name: Blog
  Description: Page blog du site internet d'Annie Bearez.
*/
?>

<?php get_header();?>

    <div class="blog_section1_photo"></div>

    <div class="container">

      <div class="row">

        <div class="blog_section2_post col-lg-8 col-md-8 col-lg-offset-1 col-md-offset-1">
          <div class="row">
            <div class="blog_article1 col-lg-12 col-md-12">
              <div id="blog_content">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'Articles',
                    );

                    $my_query = new WP_Query($args);

                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
                ?>
                <div style="background-color:#FFFFFF;padding:10px;margin-top:10px">
                  <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                  </h2> 
                  <p class="postmetadata">   
                    <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                  </p>
                  <?php the_content(); ?>
                </div>
                
                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
              </div>
            </div>
          </div>
        </div>

        <div class="blog_section3_sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <?php get_sidebar();?>
        </div>

      </div>

  </div>

<?php get_footer();?>

