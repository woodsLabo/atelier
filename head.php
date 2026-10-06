<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.typekit.net/lof3idw.css">
	<style>
		.discography__track_list_item::before,
		.discography__credit_term {
			color: <?= SCF::get("mount_color"); ?> ;
		}
	</style>
</head>
<body <?php body_class();?>>
