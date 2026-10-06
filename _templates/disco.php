<section class="disco__wrap" id="disco">
	<h2 class="disco__title">DISCOGRAPHY<span class="contact__title--jp">作品情報</span></h2>
	<ul class="disco__list">
		<?php
			$disco = wp_query("discography", 3, "DESC");
			while ($disco->have_posts()): $disco->the_post();
				$item_img = wp_get_attachment_image_src(SCF::get("item_img"), 'large')[0];
		?>
				<li class="disco__item">
					<div class="disco__item-main">
						<a href="<?php the_permalink(); ?>" target="_blank">
							<img src="<?= $item_img; ?>" alt="">
							<p class="goofs__itemCat"><?= $term->name; ?></p>
							<h3 class="disco__itemTitle"><?php the_title(); ?></h3>
							<?php if(post_custom("disco_text")) : ?><p class="disco__text"><?= post_custom("disco_text") ?></p><?php endif; ?>
						</a>
					</div>
				</li>
		<?php
			endwhile;
			wp_reset_postdata();

		?>
	</ul>
</section>
