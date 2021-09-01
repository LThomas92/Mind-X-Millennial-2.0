<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mind_X_Millennial_2.0
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="blog-single">
		<date class="blog-single__date"><?php echo the_date(); ?></date>
		<?php $cat = get_the_category()[0]->name; ?>
		<p class="blog-single__cat"><?php echo $cat;?></p>
		<h1 class="blog-single__title"><?php echo the_title(); ?></h1>
		<picture class="blog-single__image">
		<?php the_post_thumbnail(); ?>
		</picture>
		<div class="blog-single__content">
			<?php echo the_content(); ?>
		</div>

	</div>
		
		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
