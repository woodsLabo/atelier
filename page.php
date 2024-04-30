<?php get_header(); ?>
<main class="main">
	<div class="inner">
		<h2 class="page__title"><?php the_title(); ?><span class="page__title--sub"><?= the_field("title_sub") ?></span></h2>
		<?php the_content(); ?>
	</div>
</main>
<?php get_footer(); ?>
