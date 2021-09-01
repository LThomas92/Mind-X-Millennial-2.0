<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mind_X_Millennial_2.0
 */

get_header();
?>

	<main id="primary" class="site-main search-results-page">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Search results for:</h1>
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input class="search-field" style="border: none; outline: none; margin: 0; line-height: 4rem" type="search" placeholder="Search for something..." value="<?php echo get_search_query(); ?>" name="s" />	
				</form>
			</header><!-- .page-header -->
			<ul class="search-results-container">
			<?php $i = 0; while ( have_posts() ) : the_post(); ?>
			<?php $cat = get_the_category()[0]->name; 
				  $catID = get_cat_id($cat); ?>

			<?php if($i == 0) { ?>
			<li class="search-results-single-featured">
				<a href="<?php the_permalink();?>">
				<picture class="search-results-single-featured__image">
					<?php the_post_thumbnail(); ?>
				</picture>
				</a>
				<h2 class="search-results-single-featured__title"><?php the_title(); ?></h2>
				<date class="search-results-single-featured__date"><?php echo the_date(); ?></date>
				<a href="<?php echo get_category_link($catID); ?>"><p class="search-results-single-featured__cat"><?php echo $cat; ?></p></a>
			</li>
			<?php } else { ?>
				<li class="search-results-single">
					<a href="<?php the_permalink(); ?>">
					<picture class="search-results-single__image">
						<?php the_post_thumbnail(); ?>
					</picture>
					</a>
					<h2 class="search-results-single__title"><?php the_title(); ?></h2>
					<div class="search-results-single__content">
					<a href="<?php echo get_category_link($catID); ?>"><p class="search-results-single__cat"><?php echo $cat;?></p></a>
						<date class="search-results-single__date"><?php echo the_date();?></date>
					</div>
				</li>
			<?php } ?>

		<?php $i++; endwhile; ?>
		</ul>

		<?php else : ?>

		<div class="no-search-results">
			<h3>Your search terms have returned no results. Try your search again below.</h3>
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input class="search-field" style="border: none; outline: none; margin: 0; line-height: 4rem" type="search" placeholder="Search for something..." value="<?php echo get_search_query(); ?>" name="s" />	
				</form>
		</div>
			
		<?php endif;
		?>

	</main><!-- #main -->

<?php get_footer();
