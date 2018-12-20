<?php
/* Template Name: weihnachtsstory
*/ 
?>
<?php get_header(); ?>


  <div class="nokeyvisual">
  </div>	

<div class="pageheadline">
	<div class="pheadline-inside">
		<h1><?php the_title(); ?></h1>
</div>
</div>

<div class="stickymenu coolshadow">
	<nav>
		<ul>
			<li><a href="#oben">Oben</a></li>
       <li><a href="#rundgang">Rundgang</a></li>				
     <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date')); foreach ($anchorlinks as $page): ?>
     <?php $content = $page->post_content; ?>
     <li><a class="nav-link" href="#<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></a></li>
   <?php endforeach ?>
 </ul>
</nav>
</div>




<section role="main" class="story-area" style="background: url(http://dah-bremerhaven.de/wp-content/uploads/2018/12/weihnachten-bg.jpg)no-repeat bottom center;">


	<div class="offset">
	</div>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>

            <?php $children = get_pages(
    array(
        'sort_column' => 'menu_order',
        'sort_order' => 'ASC',
        'hierarchical' => 0,
        'parent' => $post->ID,
    ));

foreach( $children as $post ) {
        setup_postdata( $post ); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="subarticle" id="<?php the_ID(); ?>">
    <h1 class="divisions"><span><?php the_title(); ?></span></h1>
    <?php the_content(); ?>
    </div>
    </article>
<?php } ?>

            <br class="clear">

            <?php edit_post_link(); ?>

        </article>
        <!-- /article -->

    <?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->

<?php get_footer(); ?>