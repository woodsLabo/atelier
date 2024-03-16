<?php
	get_header();
	$link_group = SCF::get_option_meta("theme-link", "link_items");
	var_dump($link_group);
?>
<main class="main">
	<div class="inner">
		<section class="link__wrap">
			<ul class="link__list">
				<?php foreach($link_group as $link) : ?>
					<li class="link__item">
						<a href="<?= $link["url"] ?>" target="_blank"><img src="<?= wp_get_attachment_image_src($link["image"], "full")[0]; ?>" alt=""></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	</div>
</main>
<?php get_footer(); ?>
