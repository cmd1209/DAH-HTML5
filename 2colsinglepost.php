<?php
/* Template Name: 2Col-Template
*/ 
?>
<?php get_header(); ?>

<?php if ( '' != get_the_post_thumbnail() ) { ?> <!-- checks if keyvisual is present -->
<div class="keyvisual">
	<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
</div>
	<?php  } else { ?>
<div class="nokeyvisual">
</div>
<?php  } ?>  

<div class="pageheadline">
<div class="pheadline-inside">
	<h1><?php the_title(); ?></h1>
	<ul>
	<?php
	$anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', ) );

	foreach( $anchorlinks as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;
	?>	
		<li>
			<a href="#<?php echo $page->post_title; ?>"><?php echo $page->post_title; ?></a>
		</li>
	<?php
	}	
?>
</ul>
</div>
</div>


<!-- section -->
	<section role="main">
		<div class="offset">
		</div>
	
<?php if ( is_page(array('presse','')) ) { ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
<?php the_content(); ?>
<div class="grid">
	<div class="grid-70">
		<?php the_field('col1'); ?>
	</div>
	<div class="grid-30">
		<?php the_field('col2'); ?>	
	</div>
</div>
<br class="clear">
<?php edit_post_link(); ?>
</article>

<?php } else { ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<div class="grid">
	<div class="grid-cell">
		<?php the_field('col1'); ?>
	</div>
	<div class="grid-cell">
		<?php the_field('col2'); ?>	
	</div>
</div>
<br class="clear">
<?php edit_post_link(); ?>
</article>
	<?php endwhile; ?>
		
	<?php endif; ?>
<?php } ?>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>