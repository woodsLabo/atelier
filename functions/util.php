<?php
/**
 * カスタムフィールドに入力されている画像のパスを抽出
 * @param string $theme - scfのテーマ
 * @param string $field - scfのフィールド
 * @return string - 画像のパス
 */
function create_image_path($theme, $field) {
	$image_id = SCF::get_option_meta("theme-{$theme}", $field);
	$image_obj = wp_get_attachment_image_src($image_id , 'full');
	return $image_obj[0];
}
?>
