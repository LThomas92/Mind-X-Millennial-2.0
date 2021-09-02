<?php get_header(); ?>

<?php $featured_posts = get_field('featured_posts'); ?>

<div class="homepage">

<?php if( $featured_posts ): ?>
    <ul class="homepage__featured-posts">
	<?php $i = 0; ?>	
    <?php foreach( $featured_posts as $post ): 
        setup_postdata($post); ?>
		<?php if($i == 0) {?>
        <li class="homepage__featured-post" key="<?php echo $i; ?>">
			<a href="<?php echo the_permalink();?>">
			<picture class="homepage__featured-post__image">
				<?php the_post_thumbnail(); ?>
			</picture>
			</a>
			<div class="homepage__featured-post__content">
				<div class="homepage__featured-post__meta">
					<?php $cat = get_the_category()[0]->name; 
						   $catID = get_cat_id($cat); 
					?>
					<a href="<?php echo get_category_link($catID); ?>"><p class="homepage__featured-post__category"><?php echo $cat; ?></p></a>
					<date class="homepage__featured-post__date"><?php echo get_the_date(); ?></date>
				</div>
				<a href="<?php echo the_permalink();?>"><h2 class="homepage__featured-post__title"><?php the_title(); ?></h2></a>
				<p class="homepage__featured-post__desc"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
				<a class="btn" href="<?php the_permalink(); ?>">Read More</a>
			</div>
        </li>
	
		<?php } else { ?>
			<li key="<?php echo $i;?>" class="homepage__featured-post-small">
			<a href="<?php the_permalink(); ?>">
			<picture class="homepage__featured-post-small__image">
				<?php the_post_thumbnail(); ?>
			</picture>
			<p class="homepage__featured-post-small__category"><?php echo $cat; ?></p>
			<date class="homepage__featured-post-small__date"><?php echo get_the_date(); ?></date>
			<h2 class="homepage__featured-post-small__title"><?php the_title(); ?></h2>
			<p class="homepage__featured-post-small__desc"><?php echo get_the_excerpt(); ?></p>
			</a>
			</li>
		<?php } ?>
		<?php $i++; ?>
    <?php endforeach; ?>
    </ul>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

	</div>

<?php get_footer(); ?>