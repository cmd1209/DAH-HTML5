<div class="sonderausstellung shadow">
				<header class="shadow">
					<h2>Archiv</h2>
				</header>

					<div class="title border">
						<div class="year"><?php the_time('Y'); ?></div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
						<p><?php echo excerpt(20); ?></p>
					</div>
					<hr>
			</div>