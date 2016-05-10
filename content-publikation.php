<table class="publication wp-table-reloaded prices">
	<tr class="row-1">
		<td class="thumb">
			<?php if ('' != get_the_post_thumbnail()): ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php else: ?>
			<?php endif ?></td>
		<td>
			<h4><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
		<p><?php the_excerpt(20); ?></p></td>
		<td class="preis">
			<h4><strong><?php the_field('preis'); ?></strong></h4>
		</td>
	</tr>
</table>