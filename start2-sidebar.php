<?php
/* Template Name: start2-sidebar
*/
?>
<?php get_header(); ?>


<div class="maingrid">  <!-- start main content -->

<!-- <div class="banner coolshadow" style="right:-5px;top:300px;">
<h4>Verschenken Sie eine Zeitreise!<br>
<strong>Geschenkgutscheine</strong> für das Deutsche Auswandererhaus<br>
Infos & Bestellung: <strong>0471 – 90 22 00</strong></h4>
</div> -->


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
    <a class="biglink" href="<?php the_permalink(); ?>"></a>
      <div class="lockup">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    </div>
   <?php $post_object = get_field('featured_seite02');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
     <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="feature" style="background:url('<?php echo $thumb['0'];?>')center center;">
    <a class="biglink" href="<?php the_permalink(); ?>"></a>
      <div class="lockup">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    </div>

   <?php $post_object = get_field('featured_seite03');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
     <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="feature" style="background:url('<?php echo $thumb['0'];?>')center center;">
    <a class="biglink" href="<?php the_permalink(); ?>"></a>
      <div class="lockup">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    </div>
   <?php $post_object = get_field('featured_seite04');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
     <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="feature" style="background:url('<?php echo $thumb['0'];?>')center center;">
    <a class="biglink" href="<?php the_permalink(); ?>"></a>
      <div class="lockup">
        <h3><?php the_title(); ?></h3>
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
      <div class="col fieldimg">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>
      </figure>
      </div>
      <div class="col fieldcontent">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
      </div>
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
      <div class="col fieldimg">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>
      </figure>
      </div>
      <div class="col fieldcontent">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
      </div>
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
      <div class="col fieldimg">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>
      </figure>
      </div>
      <div class="col fieldcontent">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
      </div>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>




<div class="row">

    <?php $post_object = get_field('links2');
     if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
    <div class="links">
      <div class="col fieldimg">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>
      </figure>
      </div>
      <div class="col fieldcontent">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
      </div>
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
      <div class="col fieldimg">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>
      </figure>
      </div>
      <div class="col fieldcontent">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
      </div>
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
      <div class="col fieldimg">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>
      </figure>
      </div>
      <div class="col fieldcontent">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php the_excerpt(); ?> </p>
      </div>
<!--       <a href="<?php the_permalink(); ?>">mehr lesen</a> -->
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>

  </section>
</div>

<div class="goldsidebar">
 <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>