<?php get_header(); ?>

<div id="content">

	<div id="about-overlay">
    	<h3>Making Tomorrow Happen</h3>
        <p>Northeastern is making tomorrow happen through a research mission centered on discovering solutions to the global challenges of our time, with a focus on health, security, and sustainability.</p>
        <p>This use-inspired approach gives purpose to knowledge-creation, growing out of the university's culture of engagement with the world. It's a culture built on collaboration, a key to path-breaking research.</p>
        <p>Our research enterprise is broad and deep, ranging across disciplines to create new knowledge in science and technology, social sciences, and the arts and humanities.</p>
        <p id="close-about-overlay">< CLOSE</p>
	</div>
    <div id="about-tab"><p>A<br/>b<br/>o<br/>u<br />t</p></div>
	
	<?php // if (have_posts()) : ?>
    	<?php $args = array( 
			'cat' => '10',
			'posts_per_page' => 3,
			'meta_key' => 'test_order',
			'orderby' => 'meta_value_num',
			'order' => 'ASC'
			);
			query_posts($args);
			if (have_posts()) : while (have_posts()) : the_post();
            	$current_post = $wp_query->current_post;
				$post_number = $current_post + 1; 
				echo the_title() . ' - ' .the_field('test_order');
		
		?>
        
		<?php 
		
		if ($post_number != 1) {
				the_post_thumbnail('full', array('id' => 'category' . $post_number . '-image', 'class' => 'bg'));
			} else {
				the_post_thumbnail('full', array('id' => 'category'. $post_number . '-image', 'class' => 'bg show'));
			}
			
		?>
        
        
        <?php // the_post_thumbnail('full', array('id' => 'category' .  the_field('post_order'), 'class' => 'bg')); ?>
        <?php endwhile; else: ?>
	<?php endif; // wp_reset_query(); ?>
    
	<?php
		$cat = get_category( get_query_var( 'cat' ) );
		$cat_slug = $cat->slug;
	?>
   	
    <div id="buttons" class="<?php echo $cat_slug; ?>">
    	<?php while (have_posts()) : the_post(); ?>
    		<?php $current_post = $wp_query->current_post;
				$post_number = $current_post + 1; 
			?>
    	    <?php echo '<a id="button' . $post_number . '" class="circle"><span>' ?><?php echo the_field('circle_headline'); ?><?php echo '</span></a>' ?>
        <?php endwhile; ?>
    </div>
            
    <div id="text">
    	<!-- <div class="research-area show">
            <h3><?php echo strip_tags(category_description()); ?></h3>
        </div> -->
    	<?php while (have_posts()) : the_post(); ?>
    		<?php $current_post = $wp_query->current_post;
				$post_number = $current_post + 1; 
			?>
    	    <?php echo '<div class="category' . $post_number . '">'; ?>
				<?php 
					$video_in_story = get_field('video_in_story');
					if ( $video_in_story === "Yes" ) {
						echo '<h3 class="video">' . get_the_title();
					} else {
						echo '<h3>' . get_the_title();
					}
				?>
                <br />
	           	<?php the_field('professor_name'); ?>, <?php the_field('professor_title'); ?></h3>
				<?php the_content(); ?>
            </div>
		<?php endwhile; // else: ?>
    </div>
	
    <!--<div class="no-results">
		<p><strong><?php _e('There has been an error.'); ?></strong></p>
		<p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
		<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
	</div>noResults-->
	<?php // endif; ?>

</div><!--#content-->
</div>
<div id="mobile-wrapper">
	<!-- <h3 class="research-area"><?php echo strip_tags(category_description()); ?></h3> -->
    <div id="image">
	    <?php if (have_posts()) : ?>
    		<?php $args = array( 
				'cat' => '10',
				'posts_per_page' => 3,
				'meta_key' => 'test_order',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'
				);
				query_posts($args);
				if (have_posts()) : while (have_posts()) : the_post();
        	    	$current_post = $wp_query->current_post;
					$post_number = $current_post + 1; 
			?>
            
            <?php if ($post_number != 1) { ?>
				<img src="<?php the_field('mobile_image'); ?>" <?php echo 'id="category' . $post_number . '-image" class="bg" />'; ?>
			<?php } else { ?>
            	<img src="<?php the_field('mobile_image'); ?>" <?php echo 'id="category' . $post_number . '-image" class="bg show" />'; ?>
			<?php } ?>
    		
	        <?php endwhile; else: ?>
		<?php endif; wp_reset_query(); ?>
    </div>
    <div id="mobile-container">
    	<div id="accordion" class="<?php echo $cat_slug; ?>-mobile">
        	<?php while (have_posts()) : the_post(); ?>
    		<?php $current_post = $wp_query->current_post;
				$post_number = $current_post + 1; 
			?>
    	    <?php echo '<h2 class="mobile-category' . $post_number . '"><a>' ?><?php echo the_field('circle_headline'); ?><?php echo '</a></h2>' ?>
            <?php echo '<div class="mobile-category' . $post_number . '">' ?>
            	<h3><?php the_title(); ?><br />
	           	<?php the_field('professor_name'); ?>, <?php the_field('professor_title'); ?></h3>
				<?php the_content(); ?>
            <?php echo '</div>'; ?>
        <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
</div>	
<?php get_footer(); ?>