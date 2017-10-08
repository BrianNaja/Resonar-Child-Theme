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

	</div><!-- .site-content  -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<!-- 			Footer Copyright -->
			<div class="site-info">
				<div>AddSpice
				<span class="sep"> | </span>
				<?php echo date("Y"); ?>
				</div>			
			</div><!-- Footer Copyright End  --><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
