<section class="goods__wrap" id="goods">
	<h2 class="goods__title">GOODS<span class="contact__title--jp">楽曲・グッズ・ボイス etc</span></h2>
	<div class="goods__list">
		<?php
			$good = wp_query("goods");
			while ($good->have_posts()): $good->the_post();

			$terms = get_terms("goods_category");
			$term = $terms[0];
		?>
			<div class="goods__item">
				<a href="<?= post_custom('link'); ?>" target="_blank">
					<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
					<p class="goofs__itemCat"><?= $term->name; ?></p>
					<h3 class="goods__itemTitle"><?php the_title(); ?></h3>
					<p class="goods__price">&yen;<?= number_format(post_custom('price')); ?></p>
				</a>
			</div>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<div class="goods__moreLink"><a href="https://atelier-n.booth.pm/" target="_blank">もっと見る</a></div>
</section>
