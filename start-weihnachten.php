<?php
/* Template Name: weichnachten
*/
?>
<?php get_header(); ?>


<div class="owl-carousel">
  <div class="startkey" style="background: url(<?php the_field('start-slideshow'); ?>)no-repeat bottom center;background-size:cover;"></div>
  <div class="startkey" style="background: url(<?php the_field('start-slideshow2'); ?>)no-repeat bottom center;background-size:cover;"></div>
  <div class="startkey" style="background: url(<?php the_field('start-slideshow3'); ?>)no-repeat bottom center;background-size:cover;"></div>
</div>

<section role="main" class="startfields padding0">
  <div class="flexcontainer">
    <div class="start-content">
      <?php the_content(); ?>
    </div>
    <div class="story-sidebar" style="background: url(http://dah-bremerhaven.de/wp-content/uploads/2018/12/weihnachten-bg.jpg)no-repeat bottom center;">
      <h2><strong>Weihnachten</strong> fernab von zuhause? <strong>Erzählen</strong> Sie Ihre <strong>Geschichte!</strong></h2>
      <h4>Machen Sie mit und teilen Sie Ihre Weihnachtsgeschichte.</h4>
      <a href="https://dah-bremerhaven.de/weihnachten/" class="weichnachten-btn">jetzt mitmachen</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
