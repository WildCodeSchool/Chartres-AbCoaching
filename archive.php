<?php 
/*
Template Name: Archives
*/
get_header();?>

  <div class="archive_section1_photo"></div>

  <div class="row archive">
    <div class="col-md-offset-1 col-md-10">

<?php query_posts('category_name=Articles'); ?>

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?> 
          <div class="post" id="post-<?php the_ID(); ?>"> 
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
            <p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?></p>
            <div class="post1_content">
              <?php the_excerpt(); ?> 
            </div> 
          </div> 
        <?php endwhile; ?> 
			<?php endif; ?>

  </div>
</div>

<?php get_footer();?>

