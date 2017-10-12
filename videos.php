<?php /* Template Name: Videos */ ?>
 
<?get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<?php
			$args = array('post_type' => 'videos',
						  'posts_per_page' => 5); 
			$loop = new WP_Query($args);
		?>

			<?php if ( $loop->have_posts() ) { ?>
			<?php while ( $loop->have_posts() ): $loop->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile; ?>
			
			<?php
				//* Restore original Post Data
			wp_reset_postdata();
			} ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<?php
		if ( have_posts() ) :
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'resonar' ),
				'next_text'          => __( 'Next page', 'resonar' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'resonar' ) . ' </span>',
			) );
		endif;
	?>

<?php get_footer(); ?>