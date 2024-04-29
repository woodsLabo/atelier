<section class="talent__wrap" id="heroine">
	<h2 class="talent__title">HEROINE<span class="talent__title--jp">所属ヒロイン</span></h2>
	<div class="talent__list">
		<?php
			$talent = wp_query("heroine");
			while ($talent->have_posts()): $talent->the_post();
		?>
			<div class="talent__item">
				<a href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
					<h3 class="talent__itemTitle"><?php the_title(); ?></h3>
					<p class="talent__itemName--en"><?= post_custom('name_en'); ?></p>
				</a>
			</div>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
	</div>
</section>
