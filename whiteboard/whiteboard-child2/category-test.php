<?php get_header(); ?>

<div id="content">

	
	
	<?php // if (have_posts()) : ?>
    	<?php $args = array(
			'cat' => '10',
			'posts_per_page' => '3',
			'meta_key' => 'test_order',
			'orderby' => 'meta_value_num',
			'order' => 'ASC'
			);
			$the_query = new WP_Query( $args );
			// The Loop
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				echo '<li>' . get_the_title() . ' - ' . get_the_ID() . ' - ' . get_field("test_order") .'</li>';
			endwhile;

			// Restore original Query & Post Data
			wp_reset_query();
			wp_reset_postdata();

			
		
		?>
        
		
</div>	
<?php get_footer(); ?>