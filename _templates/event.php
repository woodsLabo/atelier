<section class="event__wrap" id="event">
	<h2 class="event__title">EVENT<span class="contact__title--jp">ライブ・イベント情報</span></h2>
	<div class="event__list">
		<?php
			$event = wp_query("event", 1);
			while ($event->have_posts()): $event->the_post();

			$terms = get_the_terms($post->ID, "event_category");
			$term = $terms[0];
		?>
			<div class="event__item">
				<div class="event__item-main">
					<a href="<?= post_custom('link'); ?>" target="_blank">
						<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
						<p class="goofs__itemCat"><?= $term->name; ?></p>
						<h3 class="event__itemTitle"><?php the_title(); ?></h3>
						<?php if(post_custom("event_text")) : ?><p class="event__text"><?= post_custom("event_text") ?></p><?php endif; ?>
					</a>
				</div>
			</div>
		<?php
			endwhile;
			wp_reset_postdata();

			$past_event = past_query("event", 100);
			if ($past_event->have_posts()) :
		?>
				<ul class="event__past-list slick">
					<?php while ($past_event->have_posts()): $past_event->the_post(); ?>
						<li class="event__past-item">
							<a href="<?php the_permalink(); ?>">
								<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
							</a>
						</li>
					<?php
						endwhile;
						wp_reset_postdata();
					?>
				</ul>
		<?php endif; ?>
	</div>
</section>
