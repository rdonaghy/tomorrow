<?php get_header(); ?>

<div id="body" style="background-image: none;"> <!-- min-height is minimum height of box plus padding -->
	<div id="player">
		
    	<?php
		
			if (have_posts()) : while (have_posts()) : the_post();
$postid = $post->ID;
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' );
				echo '<script type="text/javascript">';
				echo '$(document).ready(function() {';
				echo '$(".page-wrapper").bgStretcher({';
				echo 'images: ["' . $src[0] . '"],';
				echo 'imageWidth: 1200,';
				echo 'imageHeight: 800,';
				echo 'anchoring: "center top",';
				echo 'anchoringImg: "center top"';
				echo '});';
				echo '});';
				echo '</script>';
				endwhile;
				endif; 
				wp_reset_query();
		
		?>
        <div id="buttons">
    	<div class="scroll-pane">
        <?php
		$post_categories = wp_get_post_categories($postid);
foreach($post_categories as $c){
	$cat = get_category( $c );
        $catID = $cat->cat_ID;
}
		
$args = array( 
				'cat' => $catID,
				'meta_key' => 'post_order',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'
			);
$the_query = new WP_Query( $args );

			while ($the_query->have_posts()) : $the_query->the_post();
				$current_post = $wp_query->current_post;
                $post_number = $current_post;
				$post_id = get_the_ID();
				//$url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
	         echo '<a class="removelink" id="button' . $post_number . '" href="'.get_permalink($post_id).'"><div class="divoverlay">';
			 if ($postid == $post_id) {
			 	echo '<div class="overlayimage"></div>';
			 }
					the_post_thumbnail('full', array());
					echo '</div>';
                   	if ($current_story == $post_id) {
						echo '<div class="overlay current">';
					} else if ($current_story == '' && $post_number =='1') {
						echo '<div class="overlay current">';
					} else {
						echo '<div class="overlay">';
					}
				?>
	            <h4> 
					<div class="headline"><?php the_title(); ?></div>
        	    </h4>
            </div> <!-- end overlay -->
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
		<div id="large-images"><div  class="page-wrapper"></div> 
        <div id="text">
        	<?php 
        	wp_reset_query();
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
			    	   	<p><a href="<?php the_field('faculty_expert_url'); ?>"><?php the_field('professor_name'); ?></a>, <?php the_field('professor_title'); ?></p>
						<?php the_content(); ?>
			        </div> <!-- end .scroll-pane -->
	        	</div> <!-- end .category -->
				
			<?php
				endwhile;
				endif;
			?>
             
    	</div> <!-- end #text -->
        </div> <!-- end .large-images -->
    
	

	
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