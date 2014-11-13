<?php
/* Template Name: start2-sidebar
*/
?>
<?php get_header(); ?>
<div class="maingrid">  <!-- start main content -->

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php the_field('start-slideshow'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow2'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow3'); ?>"></img></div>
</div>

<div class="features">
   <?php $post_object = get_field('featured_seite01');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
     <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="feature" style="background:url('<?php echo $thumb['0'];?>')center center;">
      <div class="lockup">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    </div>
   <?php $post_object = get_field('featured_seite02');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
     <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="feature" style="background:url('<?php echo $thumb['0'];?>')center center;">
      <div class="lockup">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    </div>

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
</div>

<div class="goldsidebar">
<?php $post_object = get_field('sidelink01');
      if( $post_object ):
  // override $post
  $post = $post_object;
  setup_postdata( $post ); ?>
    <div>
<!--       <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
      <figure><a href="<?php the_permalink(); ?>">
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
      <img src="<?php the_field('sidelink01-bild'); ?>"></img></a></figure>
    </div>
<?php $post_object = get_field('sidebar_link_2');
      if( $post_object ):
  // override $post
  $post = $post_object;
  setup_postdata( $post ); ?>
    <div>
<!--       <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
      <figure><a href="<?php the_permalink(); ?>">
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
      <img src="<?php the_field('sidebar_bild_2'); ?>"></img></a></figure>
    </div>
</div>


<?php get_footer(); ?>