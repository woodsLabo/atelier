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
?>
