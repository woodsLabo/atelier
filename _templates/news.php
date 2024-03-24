<?php ob_start(); ?>
<section class="news__wrap">
	<h2 class="news__title">NEWS</h2>
	<ul class="news__list">
		<?php
			$args = array(
				'post_type' => 'post',
				'paged' => get_query_var('paged'),
				'posts_per_page' => '5'
			);
			$wp_query = new WP_Query($args);
			while ($wp_query->have_posts()): $wp_query->the_post();
		?>
				<li class="news__item">
					<time datetime="<?php the_time( get_option( 'date_format' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
		<?php
			endwhile;
			wp_reset_postdata();
		?>

	</ul>
</section>
