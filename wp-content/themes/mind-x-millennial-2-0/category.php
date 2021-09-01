<?php get_header(); ?>

	<section id="primary" class="content-area category-archive-page">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title">
				<?php single_cat_title();?>
				</h1>
			</header><!-- .archive-header -->

			<ul class="category-posts">
			<?php $i = 0; while ( have_posts() ) : the_post(); ?>
			<?php if($i == 0) { ?>
				<li class="category-single-post-featured">
					<picture class="category-single-post-featured__image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					</picture>
					
					<div class="category-single-post-featured__content">
						<h2 class="category-single-post-featured__title"><?php the_title(); ?></h2>
						<p class="category-single-post-featured__desc"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
						<a class="category-single-post-featured__btn" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</li>
			<?php } else { ?>
				<li class="category-single-post">
					<a href="<?php the_permalink(); ?>">
					<h2 class="category-single-post__title"><?php the_title(); ?></h2>
					<picture class="category-single-post__image">
						<?php the_post_thumbnail(); ?>
					</picture>
					<p class="category-single-post__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
					</a>
				</li>
			<?php } ?>
			<?php $i++; endwhile; ?>
			</ul>
			<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();