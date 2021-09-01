<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mind_X_Millennial_2.0
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">404</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like the page you are looking for was not found. Maybe try one of the links below or a search?', 'mind-x-millennial-2-0' ); ?></p>
			<div class="error-404__links">
			<a href="<?php echo site_url(); ?>">Home</a>
			<a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a>
			</div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
