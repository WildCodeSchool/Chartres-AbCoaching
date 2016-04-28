<?php
/*
  Template Name: Blog single
  Description: Page single blog du site internet d'Annie Bearez.
*/
?>



<?php get_header();?>

  <div class="single_section1_photo"></div>

  <div class="row single">
    <div class="page_blog col-md-offset-1 col-md-10">

      <?php if(have_posts()) : while (have_posts()) : the_post();?>
        <div id="article-seul">

          <h2 id="single-h2"><?php the_title(); ?></h2>
          <p id="single-p">
          <?php the_content(); ?>

          <em class="pull-right">Publié le : <?php the_time('j F Y'); ?></em>
          </p>
          <p id="single-author">Les articles de : <?php the_author_posts_link(); ?></p>
        </div>

        <div class="comments-template"> <?php comments_template(); ?> </div>

      <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>

<?php get_footer();?>

