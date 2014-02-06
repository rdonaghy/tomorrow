<?php get_header(); ?>

<div id="body" style="background-image: none;"> <!-- min-height is minimum height of box plus padding -->
	<div id="player">
	<div id="large-images" style="float: left;">
    	<?php // if (have_posts()) : ?>
    		<?php 
				$cat = get_category( get_query_var( 'cat' ) );
				$catID = $cat->cat_ID;
				$args = array( 
				'cat' => $catID,
				'posts_per_page' => 3,
				'meta_key' => 'test_order',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'
				);
				query_posts($args);
				if (have_posts()) : while (have_posts()) : the_post();
            		$current_post = $wp_query->current_post;
					$post_number = $current_post + 1; 
					// echo the_title() . ' - ' .the_field('test_order');
			?>
        	<?php 
			if ($post_number != 1) {
				the_post_thumbnail('full', array('id' => 'category' . $post_number . '-image', 'class' => 'bg'));
			} else {
				the_post_thumbnail('full', array('id' => 'category'. $post_number . '-image', 'class' => 'bg show'));
			}
			?>
        	<?php endwhile; else: ?>
		<?php endif; // wp_reset_query(); ?>
        <div id="text">
	    	<?php while (have_posts()) : the_post(); ?>
    			<?php $current_post = $wp_query->current_post;
					$post_number = $current_post + 1; 
				?>
    	    	<?php echo '<div class="category' . $post_number . '">'; ?>
				<?php 
					$video_in_story = get_field('video_in_story');
					if ( $video_in_story === "Yes" ) {
						echo '<h3 class="video">' . get_the_title() . '</h3>';
					} else {
						echo '<h3>' . get_the_title() . '</h3>';
					}
				?>
            	<div class="scroll-pane">
	    	       	<p><?php the_field('professor_name'); ?>, <?php the_field('professor_title'); ?></p>
					<?php the_content(); ?>
	            </div> <!-- end .scroll-pane -->
            	</div> <!-- end .category -->
			<?php endwhile; // else: ?>
    	</div> <!-- end #text -->
    </div> <!-- end .large-images -->
	
    
    <div id="buttons">
    	<p style="background-color: #FFF; position:absolute; top: 0; left: 0;">
        Window height <span class="number"></span><br />
        available space height <span class="available"></span><br />
        Player height <span class="playerheight"></span><br />
        large images height <span class="largeimagesheight"></span><br />
        buttons overflow <span class="buttonsoverflow"></span>
        </p>
    	<div class="scroll-pane">
    	<?php while (have_posts()) : the_post(); ?>
    		<?php $current_post = $wp_query->current_post;
				$post_number = $current_post + 1; 
			?>
    	    <?php echo '<a id="button' . $post_number . '" class="dropdown">'; ?>
            <?php the_post_thumbnail('full', array()); ?>
			<h4>
				<div class="headline"><?php the_title(); ?></div>
                <div class="professor-title"><?php the_field('professor_title'); ?></div>
            </h4>
            </a>
            <div class="mobile-expandable">
            	<?php the_content(); ?>
            </div>			
        <?php endwhile; ?>
        </div> <!-- end .scroll-pane -->
        
    </div> <!-- end #buttons -->
	
    <!--<div class="no-results">
		<p><strong><?php _e('There has been an error.'); ?></strong></p>
		<p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
		<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
	</div>noResults-->
	<?php // endif; ?>
    <div style="clear: both"> </div>

</div> <!--#player-->
</div> <!-- #body -->
	
<?php get_footer(); ?>