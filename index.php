<?php
	include_once("controllers/wp_query.php");
	include_once("functions/util.php");
	$main_image_url = create_image_path("global", "img");

	get_header();
?>
<main class="main">
	<div class="inner">
		<div class="main__image">
			<img src="<?= $main_image_url; ?>" alt="main">
		</div>
		<?php
			include_once("_templates/news.php");
			include_once("_templates/about.php");
			include_once("_templates/talent.php");
			include_once("_templates/goods.php");
			include_once("_templates/contact.php");
		?>
	</div>
</main>
<?php get_footer(); ?>
