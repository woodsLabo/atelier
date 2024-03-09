<?php
	include_once("controllers/wp_query.php");
	get_header();

	$wp_query = wp_query("goods");
?>
<section class="archive__wrap">
	<div class="inner">
		<h2 class="archive__title">goods</h2>
		<ul class="goods__list">
			<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
				<li class="goofs__item"><?php the_title(); ?></li>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
		</ul>
	</div>
</section>

<?php get_footer(); ?>
