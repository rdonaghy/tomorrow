<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
   	<div id="body"> <!-- min-height is minimum height of box plus padding -->
		<div id="box" <?php post_class('page'); ?>>
			<div id="about">
				<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
				<?php the_content(); ?>
			</div><!-- end #about -->
        </div>
       </div><!-- end #body-->
<?php endwhile; ?>

<?php get_footer(); ?>
