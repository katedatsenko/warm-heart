<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package warm_heart
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="author">
				<div class="footer-logo"><img src="<?php echo get_template_directory_uri()?>/images/footer.png""></div>
			</div>
			<div class="social">
				<ul class="nav navbar-nav navbar-right social">
		        <li><a href="https://plus.google.com" class="socicon-googleplus"></a></li>
		        <li><a href="https://vk.com/kate.datsenko" class="socicon-vkontakte"></a></li>
		        <li><a href="#" class="socicon-telegram"></a></li>
		      </ul>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
