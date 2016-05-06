<?php 
/*
Template Name: Archives
*/
get_header();?>

  <div class="archive_section1_photo"></div>

  <div class="col-md-12" style="text-align:center">
  	<h3> Archives </h3>
  </div>

  <div class="row archive">
    <div class="col-md-offset-1 col-md-10">

		<?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'Articles',
                'posts_per_page' => 5,
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

	        <div class="col-md-12">
	            [<?php the_date(); ?>]
	            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	        </div>
	        
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
	    ?>
	</div>
</div>

<?php get_footer();?>

