<div class="about-three-column-block">
<?php if( have_rows('highlights') ): ?>
	<ul class="highlights">
    <?php while( have_rows('highlights') ) : the_row();
        $icon = get_sub_field('icon');
		$title = get_sub_field('title');
		$text = get_sub_field('content'); ?>

		<li class="highlight">
			<picture class="highlight__icon">
				<img src="<?php echo $icon; ?>" alt=""/>
			</picture>
			<h2 class="highlight__title"><?php echo $title; ?></h2>
			<div class="highlight__content">
				<?php echo $text; ?>
			</div>
		</li>
	
    <?php endwhile; ?>
	</ul>

<?php else :

endif; ?>
</div>