<?php
	include_once("functions/init.php");
	include_once("functions/add_option_page.php");

	function test($args) {
		extract(shortcode_atts(array("file" => null), $args));
		ob_start();
		include_once dirname(__FILE__) . "/_templates/" . $file;
		return ob_get_clean();
	}
	add_shortcode("tests", "test");
?>
