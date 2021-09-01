<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mind_X_Millennial_2.0
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<?php  
			$instagram = get_field('instagram' , 'option');
			$twitter = get_field('twitter', 'option');
			$lawsandCodes = get_field('laws_&_codes', 'option');
		?>

			<div class="site-footer__sm-links">
				<a target="_blank" class="site-footer__instagram" href="<?php echo $instagram;?>">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
				<style type="text/css">
					.st0{fill:#FFFFFF;}
				</style>
				<path class="st0" d="M12,2c5.5,0,10,4.5,10,10s-4.5,10-10,10S2,17.5,2,12S6.5,2,12,2z M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12
					s12-5.4,12-12S18.6,0,12,0z M12,7.1c1.6,0,1.8,0,2.4,0c1.6,0.1,2.4,0.8,2.5,2.5c0,0.6,0,0.8,0,2.4s0,1.8,0,2.4
					c-0.1,1.6-0.8,2.4-2.5,2.5c-0.6,0-0.8,0-2.4,0c-1.6,0-1.8,0-2.4,0c-1.6-0.1-2.4-0.8-2.5-2.5c0-0.6,0-0.8,0-2.4s0-1.8,0-2.4
					C7.2,8,7.9,7.2,9.6,7.1C10.2,7.1,10.4,7.1,12,7.1z M12,6c-1.6,0-1.8,0-2.5,0C7.3,6.1,6.1,7.3,6,9.5c0,0.6,0,0.8,0,2.5
					c0,1.6,0,1.8,0,2.5c0.1,2.2,1.3,3.4,3.5,3.5c0.6,0,0.8,0,2.5,0s1.8,0,2.5,0c2.2-0.1,3.4-1.3,3.5-3.5c0-0.6,0-0.8,0-2.5
					c0-1.6,0-1.8,0-2.5c-0.1-2.2-1.3-3.4-3.5-3.5C13.8,6,13.6,6,12,6z M12,8.9c-1.7,0-3.1,1.4-3.1,3.1s1.4,3.1,3.1,3.1s3.1-1.4,3.1-3.1
					C15.1,10.3,13.7,8.9,12,8.9z M12,14c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2S13.1,14,12,14z M15.2,8.1
					c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7C15.9,8.4,15.6,8.1,15.2,8.1z"/>
				</svg>
				</a>

				<a target="_blank" class="site-footer__twitter" href="<?php echo $twitter; ?>">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs>
						<style>.cls-1{fill:#fff;}</style></defs>
						<path class="cls-1" d="M12,2A10,10,0,1,1,2,12,10,10,0,0,1,12,2Zm0-2A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm6.5,8.78a5.17,5.17,0,0,1-1.41.39A2.5,2.5,0,0,0,18.17,7.8a4.77,4.77,0,0,1-1.56.6,2.47,2.47,0,0,0-4.2,2.25A7,7,0,0,1,7.34,8.07a2.46,2.46,0,0,0,.76,3.29A2.41,2.41,0,0,1,7,11.05,2.49,2.49,0,0,0,9,13.5a2.58,2.58,0,0,1-1.11,0,2.46,2.46,0,0,0,2.3,1.71,5,5,0,0,1-3.65,1,7,7,0,0,0,10.77-6.22A5,5,0,0,0,18.5,8.78Z"/>
					</svg>
				</a>
			</div> <!-- Social Media Links -->

			<div class="site-footer__nav">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					)
				);
				?>
			</div>

		</div><!-- .site-info -->

		<p class="site-footer__copyright">&copy;Copyright 2021 | Mind X Millennial</p>
		<p class="site-footer__designedby">Designed by <span><a target="_blank" href="<?php echo $lawsandCodes; ?>">@lawsandcodes</a></span></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
