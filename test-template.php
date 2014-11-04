<?php
/* Template Name: test-Template
*/
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php the_field('start-slideshow'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow2'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow3'); ?>"></img></div>
</div>

	<!-- section -->
	<section role="main" class="startfields">

		<?php $post_object = get_field('links');
			if( $post_object ):

	// override $post
	$post = $post_object;
	setup_postdata( $post );

	?>
    <div class="col col33" style="padding:0 10px 0 0;">
    	<figure style="float:right;margin-left:5px;"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<p> <?php the_excerpt(); ?> </p>
    	<a href="<?php the_permalink(); ?>">mehr lesen</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

		<?php $post_object = get_field('mitte');
			if( $post_object ):

	// override $post
	$post = $post_object;
	setup_postdata( $post );

	?>
    <div class="col col33" style="padding: 0 5px 0 5px 0;">
    	<figure style="float:right;margin-left:5px;"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<p> <?php the_excerpt(); ?> </p>
    	<a href="<?php the_permalink(); ?>">mehr lesen</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


		<?php $post_object = get_field('rechts');
			if( $post_object ):

	// override $post
	$post = $post_object;
	setup_postdata( $post );

	?>
    <div class="col col33" style="padding: 0 0 0 10px;">
    	<figure style="float:right;margin-left:5px;"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<p> <?php the_excerpt(); ?> </p>
    	<a href="<?php the_permalink(); ?>">mehr lesen</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


	</section>


<?php get_footer(); ?>