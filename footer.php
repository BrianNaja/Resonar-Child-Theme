<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Resonar
 * @since Resonar 1.0
 */
?>
		<?php get_sidebar(); ?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<!-- 			Footer Copyright -->
			<div class="site-info">
				
<!-- 			Start date with error protection -->
				<?php function auto_copyright($year = 'auto'){ ?>
				<?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
				<?php if(intval($year) == date('Y')){ echo intval($year); } ?>
				<?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
				<?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
				<?php } ?>
				
				<div>AddSpice
				<span class="sep"> | </span>
				<?php auto_copyright(); ?>
				</div>			
			</div><!-- Footer Copyright End  --><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
