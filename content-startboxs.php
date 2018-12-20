
<div class="start-article">
	<figure class="article-image">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</figure>
	<div class="article-info">
		<h3>
			<?php the_title(); ?>
		</h3>
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>	
	</div>
	<a class="article-link" href="<?php the_permalink(); ?>"></a>
</div>


