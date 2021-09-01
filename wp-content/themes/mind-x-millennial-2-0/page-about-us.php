<?php get_header(); ?>

<div class="about-us">
<figure class="about-us__header">
	<?php the_post_thumbnail(); ?>
</figure>

<div class="about-us__content">
	<?php the_content(); ?>
</div>

</div>

<?php get_footer(); ?>