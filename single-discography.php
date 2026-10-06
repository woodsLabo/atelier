<?php
get_header();

$page_class = "discography";
$thumb = get_the_post_thumbnail_url();
$item_img = wp_get_attachment_image_src(SCF::get("item_img"), 'large')[0];
$fixed_bg = wp_get_attachment_image_src(SCF::get("fixed_img"), 'large')[0];
$item_detail = SCF::get("item_detail");
$track_list = SCF::get("track_list");
$credit_list = SCF::get("credit_list");
$information_list = SCF::get("information_list");
?>

<div class="<?= $page_class; ?>__wrap" style="background: url(<?= $fixed_bg; ?>) no-repeat; background-size: cover; background-attachment: fixed; background-position: 50%;">
	<section class="<?= $page_class; ?>__header">
		<div class="<?= $page_class; ?>__thumb"><img src="<?= $thumb; ?>" alt="<?= get_the_title(); ?>"></div>
		<h1 class="<?= $page_class; ?>__title"><?= SCF::get("item_title"); ?></h1>
		<div class="<?= $page_class; ?>__catch">
			<?= nl2br(SCF::get("catch")); ?>
		</div>
	</section>
	<div class="<?= $page_class; ?>__content">
		<div class="<?= $page_class; ?>__content_image">
			<img src="<?= $item_img; ?>" alt="">
		</div>
		<div class="<?= $page_class; ?>__content_detail">
			<dl class="<?= $page_class; ?>__content_def_list">
				<?php foreach($item_detail as $item) : ?>
					<dt class="<?= $page_class; ?>__content_def_term"><?= $item["item_detail_title"]; ?></dt>
					<dd class="<?= $page_class; ?>__content_def_detail"><?= nl2br($item["item_detail_content"]); ?></dd>
				<?php endforeach; ?>
			</dl>
		</div>
	</div>
	<section class="<?= $page_class; ?>__track_list">
		<h2 class="<?= $page_class; ?>__track_list_title">TRACKLIST</h2>
		<ul class="<?= $page_class; ?>__track_list_unorder">
			<?php foreach($track_list as $track) : ?>
				<li class="<?= $page_class; ?>__track_list_item">
					<dl class="<?= $page_class; ?>__track_list_def">
						<dt class="<?= $page_class; ?>__track_list_term"><?= $track["track_name"]; ?></dt>
						<dd class="<?= $page_class; ?>__track_list_detail"><?= nl2br($track["track_detail"]); ?></dd>
					</dl>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
	<div class="<?= $page_class; ?>__movie">
		<?= SCF::get("youtube"); ?>
	</div>
	<section class="<?= $page_class; ?>__credit">
		<h2 class="<?= $page_class; ?>__credit_title">CREDIT</h2>
		<dl class="<?= $page_class; ?>__credit_list">
			<?php foreach($credit_list as $credit) : ?>
				<div class="<?= $page_class; ?>__credit_item">
					<dt class="<?= $page_class; ?>__credit_term"><?= $credit["credit_title"]; ?></dt>
					<dd class="<?= $page_class; ?>__credit_detail"><?= nl2br($credit["credit_detail"]); ?></dd>
				</div>
			<?php endforeach; ?>
		</dl>
	</section>
	<section class="<?= $page_class; ?>__information">
		<h2 class="<?= $page_class; ?>__information_title">INFORMATION</h2>
		<ul class="<?= $page_class; ?>__information_list">
			<?php foreach($information_list as $item) : ?>
				<li class="<?= $page_class; ?>__information_item">
					<img src="<?= wp_get_attachment_url($item["information_item"]); ?>" alt="">
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
</div>
<?php get_footer(); ?>
