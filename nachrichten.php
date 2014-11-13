<?php
/* Template Name: Nachrichten
*/
?>
<?php get_header(); ?>

<div class="nokeyvisual">
</div>


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

<div class="startfields">
<?php
// Show a selected number of posts per row
$posts_per_row = 2;
$posts_per_page = 30;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
   'posts_per_page' => $posts_per_page,
   'paged' => $paged,
);
query_posts($args);
if (have_posts()) {
   while (have_posts()) {
      the_post();
      if ((++$post_counter % $posts_per_row) == 1  || $posts_per_row == 1) {
         if ($post_counter > 1) {
            echo "</div><!-- End of post_row -->\n";  // End previous row
         }
         echo "<div class='post_row'>\n";  // Start a new row
      }
      echo "<div class='newslist'>\n";  // Start one post
         // Output post data here
      	echo '<figure><a href="'; the_permalink(); echo '">'; the_post_thumbnail( 'thumbnail' );  echo "</a></figure>";
         echo '<h3><a href="'; the_permalink(); echo '">'; the_title();echo '</a></h3>';
         echo "<p>"; the_excerpt(); echo "</p>";
      echo "</div><!-- End of post_class -->\n";  // End of post
   } ?>
   </div><!-- End of post_row -->
   <div class='clear'></div>
<?php } else {
   // Code for no posts found
}
?>

</div>

<br class="clear">

<?php edit_post_link(); ?>

</section>

<!-- /section -->


<?php get_footer(); ?>