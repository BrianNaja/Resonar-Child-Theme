<?php /* Template Name: Videos */ ?>
 
<?get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<?php
			// Define custom query parameters
			$temp = $wp_query; 
			$wp_query = null; 
			$wp_query = new WP_Query(); 
			$wp_query->query('showposts=3&post_type=videos'.'&paged='.$paged); 
			
			while ($wp_query->have_posts()) : $wp_query->the_post(); 
			
			get_template_part( 'content-page');
			 		
			endwhile;
			
						
			// Custom query loop pagination
			if ( have_posts() ) :
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'resonar' ),
				'next_text'          => __( 'Next page', 'resonar' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'resonar' ) . ' </span>',
			) );
		endif;
			
			// Reset main query object
			$wp_query = NULL;
			$wp_query = $temp;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>