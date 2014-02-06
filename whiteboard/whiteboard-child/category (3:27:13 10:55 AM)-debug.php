<?php get_header(); ?>

<div id="body" style="background-image: none;"> <!-- min-height is minimum height of box plus padding -->
	<div id="player">
		<?php
		$current_story = htmlspecialchars($_GET["story"]);
		if ($current_story != '') {
			echo '<p>' . $current_story . '</p>'; 
		} else {
			echo '<p>There is no current story value</p>';
		}// value
		
		?>
    	<?php
		// set variables to get the current category
		$cat = get_category( get_query_var( 'cat' ) );
		$catID = $cat->cat_ID;
		// If there is a story value in the URL, create a query using that parameter to feature that image
		if ($current_story != '') { 
			$args = array( 
				'p' => $current_story,
				'cat' => $catID
			);
			query_posts($args);
			if (have_posts()) : while (have_posts()) : the_post();
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' );
				echo '<script type="text/javascript">';
				echo '$(document).ready(function() {';
				echo '$(".page-wrapper").bgStretcher({';
				echo 'images: ["' . $src[0] . '"],';
				echo 'imageWidth: 1200,';
				echo 'imageHeight: 800,';
				echo 'anchoring: "center center",';
				echo 'anchoringImg: "center center"';
				echo '});';
				echo '});';
				echo '</script>';
				endwhile;
				endif; 
				wp_reset_query();
		} else { // if there is no story value, create another query to feature the image for the story ordered number 1
			$args = array( 
			'cat' => $catID,
			'meta_key' => 'post_order',
			'orderby' => 'meta_value_num',
			'order' => 'ASC'
			);
			query_posts($args);
			if (have_posts()) : while (have_posts()) : the_post();
        		$current_post = $wp_query->current_post;
				$post_number = $current_post + 1; 
				if ($post_number == 1) {
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' );
					echo '<script type="text/javascript">';
					echo '$(document).ready(function() {';
					echo '$(".page-wrapper").bgStretcher({';
					echo 'images: ["' . $src[0] . '"],';
					echo 'imageWidth: 1200,';
					echo 'imageHeight: 800,';
					echo 'anchoring: "center center",';
					echo 'anchoringImg: "center center"';
					echo '});';
					echo '});';
					echo '</script>';
				} else {
				}
			endwhile;
			endif;
			wp_reset_query();
		}
		?>
		<div id="large-images" class="page-wrapper"> </div> <!-- end .large-images -->
    	
        <div id="text">
        	<?php
        	$args = array( 
				'cat' => $catID,
				'meta_key' => 'post_order',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'
			);
			query_posts($args);
			if (have_posts()) : while (have_posts()) : the_post();
				$current_post = $wp_query->current_post;
				$post_number = $current_post + 1;
				$post_id = get_the_ID();
				// If the user clicked a link containing a story ID to get to this page, add class,
				if ($current_story == $post_id) {
					echo '<div class="category' . $post_number . ' story-text show">';
				} else if ($current_story == '' && $post_number =='1') {
					echo '<div class="category' . $post_number . ' story-text show">';
				} else {
					echo '<div class="category' . $post_number . ' story-text">';
				}
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
				
			<?php
				endwhile;
				endif;
			?>
             
    	</div> <!-- end #text -->
    
	
    
    <div id="buttons">
    	<div class="scroll-pane">
        <?php
			while (have_posts()) : the_post();
				$current_post = $wp_query->current_post;
                $post_number = $current_post + 1;
				$post_id = get_the_ID();
                    echo '<a id="button' . $post_number . '" class="dropdown">';
                    the_post_thumbnail('full', array());
                   	if ($current_story == $post_id) {
						echo '<h4 class="current">';
					} else if ($current_story == '' && $post_number =='1') {
						echo '<h4 class="current">';
					} else {
						echo '<h4>';
				}
				?>
				<div class="headline"><?php the_title(); ?></div>
            	</h4>
	            </a>
    	        <div class="mobile-expandable">
        	    	<div class="professor-title"><?php the_field('professor_name'); ?>, <?php the_field('professor_title'); ?></div>
            		<?php the_content(); ?>
	            </div>			
    		    <?php
				endwhile;
		
		?>
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