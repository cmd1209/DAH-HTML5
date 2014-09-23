<?php
/* Template Name: Sonderausstellung
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
<section role="main" style="padding-left:40px;padding-right:40px;">
	<div class="offset">
	</div>
	



	<!-- <div class="grid">
		<div class="grid-cell" class="shadow">
			<div class="sonderausstellung shadow">
				<header>
					<h2>Aktuell</h2>
				</header>
				<?php query_posts('cat=21&order=DESC"'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php if ('' != get_the_post_thumbnail()): ?>
						<div class="hero">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_post_thumbnail('medium'); ?></a>
							<div class="cat"> <?php the_field('zeitraum'); ?> </div>														
						</div>
					<?php else: ?>

					<?php endif ?>


					<div class="title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
					</div>
					<div class="excerpt">
						<p><?php the_excerpt(20); ?></p>	
					</div>
					<hr>
				<?php endwhile; endif; ?>
			</div>
		</div>


		<div class="grid-cell">
			<div class="sonderausstellung shadow">
				<header class="shadow">
					<h2>Ausblick</h2>
				</header>
				<?php query_posts('cat=8&order=DESC"'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php if ('' != get_the_post_thumbnail()): ?>
						<div class="hero">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_post_thumbnail('medium'); ?></a>
							<div class="cat"> <?php the_field('zeitraum'); ?> </div>														
						</div>
					<?php else: ?>

					<?php endif ?>
					<div class="title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
					</div>
					<div class="excerpt">
						<p><?php the_excerpt(20); ?></p>	
					</div>
					<hr>
				<?php endwhile; endif; ?>
			</div>
		</div>



		<div class="grid-cell">
			<div class="sonderausstellung shadow">
				<header class="shadow">
					<h2>Archiv</h2>
				</header>
				<?php query_posts('cat=19&order=DESC"'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="title">
						<div class="year"><?php the_time('Y'); ?></div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
						<p><?php echo excerpt(20); ?></p>
					</div>
					<hr>

				<?php endwhile; endif; ?>
			</div>

		</div>

	</div> -->


	<br class="clear">

	<?php edit_post_link(); ?>



	
</section>
<!-- /section -->


<?php get_footer(); ?>