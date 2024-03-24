<?php
include_once("head.php");
include_once("functions/util.php");

$logo_url = create_image_path("global", "logo");
$sns_group = SCF::get_option_meta("theme-global", "sns_group");
?>
<div class="wrapper">
	<header class="header">
		<div class="header__inner">
			<h1 class="header__title">
				<a href="<?= home_url(); ?>"><img src="<?= $logo_url; ?>" alt="logo"></a>
			</h1>
			<?php
				include_once("_templates/nav.php");
			?>
			<div class="header__snsWrap">
				<?php
					foreach($sns_group as $sns):
						$icon_url = wp_get_attachment_image_src($sns["icon"] , 'full');
				?>
						<a href="<?= $sns["url"] ?>" target="_blank"><img src="<?= $icon_url[0]; ?>" alt=""></a>
				<?php endforeach; ?>
			</div>
		</div>
	</header>
