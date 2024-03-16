<?php
// titleタグ設置
add_theme_support("title-tag");

// サムネイル使用許可
add_theme_support("post-thumbnails");

// 自動整形を無効化
add_action("init", function() {
	remove_filter("the_content", "wpautop");
});

// wp自動更新無効化
add_filter("automatic_updater_disabled", "__return_true");

// build globalMenu
function buildGlobalMenu() {
	register_nav_menus(
		array(
			'header' => __("headerMenu", "header menu"),
			'footer' => __("footerMenu", "footer menu"),
		)
	);
}
add_action("after_setup_theme", "buildGlobalMenu");

function addHeadAssets() {
	if (is_front_page()) {
		wp_enqueue_style("index", get_template_directory_uri() . "/assets/dist/css/index.css");
	} elseif (is_archive()) {
		wp_enqueue_style("archive", get_template_directory_uri() . "/assets/dist/css/archive.css");
	} elseif (is_single()) {
		wp_enqueue_style("single", get_template_directory_uri() . "/assets/dist/css/single.css");
	} elseif (is_page()) {
		wp_enqueue_style("page", get_template_directory_uri() . "/assets/dist/css/page.css");
	}
}
add_action("wp_enqueue_scripts", "addHeadAssets");
?>
