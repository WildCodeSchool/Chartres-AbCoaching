<?php
/*
  Template Name: mentions légales
  Description: Template pour mentions légales.
*/
?>


<?php get_header();?>

<div class="mentions_legales_texte">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer();?>