<div class="sonderausstellung shadow">
				<header>
					<h2> <?php echo single_cat_title(); ?> </h2>
				</header>


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
	
			</div>