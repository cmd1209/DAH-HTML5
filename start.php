<?php
/* Template Name: start
*/
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php the_field('start-slideshow'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow2'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow3'); ?>"></img></div>
</div>


  <section role="main" class="startfields">
<div class="row">

    <?php $post_object = get_field('links');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
    <div class="links">
      <figure><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

    <?php $post_object = get_field('mitte');
      if( $post_object ):

  // override $post
  $post = $post_object;
  setup_postdata( $post );

  ?>
    <div class="mitte">
      <figure><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


    <?php $post_object = get_field('rechts');
      if( $post_object ):

  // override $post
  $post = $post_object;
  setup_postdata( $post );

  ?>
    <div class="rechts">
      <figure><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>
<div class="row">

    <?php $post_object = get_field('links2');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
    <div class="links">
      <figure><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

    <?php $post_object = get_field('mitte2');
      if( $post_object ):

  // override $post
  $post = $post_object;
  setup_postdata( $post );

  ?>
    <div class="mitte">
      <figure><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


    <?php $post_object = get_field('rechts2');
      if( $post_object ):

  // override $post
  $post = $post_object;
  setup_postdata( $post );

  ?>
    <div class="rechts">
      <figure><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a></figure>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>



  </section>

<?php get_footer(); ?>