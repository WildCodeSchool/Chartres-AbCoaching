<?php
/*
  Template Name: plan du site
  Description: Template pour plan du site.
*/
?>

<?php get_header();?>

    <div class="plan_site" style="text-align:center;">
    	<h2><u>Plan du site</u></h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
  	<?php endwhile; ?>
  	<?php endif; ?>
    </div>

<?php get_footer();?>
