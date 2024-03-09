<?php get_header(); ?>
<?php include_once("_templates/breadcrumb.php"); ?>

<?php
	while ( have_posts() ) : the_post();
	$talent_type = post_custom('name_en') == "Flan Eclair" ? " is--flan" : "";

?>

<section class="detail__wrap">
	<div class="detail__inner">
		<div class="detail__imageWrap">
			<ul class="detail__imageThumbList">
				<?php
					$images = SCF::get("images");
					foreach($images as $index => $image) :
						if ($index == 0) $main_image = $image["image"];
						$change_img = wp_get_attachment_image_src($image["image"], array(500, 1200));
				?>
					<li class="detail__imageThumbItem js-imageThumb">
						<?= wp_get_attachment_image($image["thumb"], "thumb"); ?>
						<p class="detail__imageThumbMain js-imageMain"><?= $change_img[0]; ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="detail__imageItem js-imageItem"><img src="<?= wp_get_attachment_url($main_image); ?>" alt=""></div>
		 </div>
		<div class="detail__profileWrap<?= $talent_type; ?>">
			<div class="detail__profileHeader">
				<span class="detail__profileIcon"><?= wp_get_attachment_image(post_custom("item_icon"), "thumb"); ?></span>
				<div class="detail__profileNameWrap">
					<p class="detail__profileName--en"><?= post_custom('name_en'); ?></p>
					<h1 class="detail__profileName"><?php the_title() ?></h1>
				</div>
				<ul class="detail__profileSnsList">
					<?php
						$sns_list = SCF::get("sns_group");
						foreach($sns_list as $item) :
					?>
						<li class="detail__profileSnsItem">
							<a href="<?= $item["link"] ?>" target="_blank"><?= wp_get_attachment_image($item["icon"], 'thumb'); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="detail__profileMainWrap">
				<div class="detail__profileComment"><?= nl2br(post_custom('comment')); ?></div>
				<div class="detail__profileListWrap">
					<?php
						$profiles = SCF::get("profile_group");
						foreach($profiles as $profile) :
					?>
						<dl class="detail__profileList">
							<dt class="detail__profileTeam"><?= $profile["label"]; ?></dt>
							<dd class="detail__profileDesc"><?= $profile["detail"]; ?></dd>
						</dl>
					<?php endforeach; ?>
				</div>
			</div>
			<section class="detail__profilePickup">
				<h2 class="detail__profilePickupTitle">PICK UP MOVIE</h2>
				<?= post_custom('pickup'); ?>
			</section>
		</div>
	</div>
	<div class="detail__backBtn"><a href="<?= home_url("/#talent"); ?>">TALENTS一覧に戻る</a></div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
