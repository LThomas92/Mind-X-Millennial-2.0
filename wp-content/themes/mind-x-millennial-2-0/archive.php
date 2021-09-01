<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mind_X_Millennial_2.0
 */

get_header();
?>

	<main id="primary" class="site-main archive-category">

	<h1 class="archive-category__title"><?php get_the_title(); ?></h1>

		<?php if ( have_posts() ) : ?>
			<ul class="archive-category__posts">
			<?php while ( have_posts() ) : the_post(); ?>

			<li class="archive-category__post">
				<h2 class=archive-category__post__title><?php the_title(); ?></h2>
				<picture class="archive-category__post__image">
					<?php the_post_thumbnail(); ?>
				</picture>
			</li>

			<?php endwhile;

		else :

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
