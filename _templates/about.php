<?php
	$about = SCF::get_option_meta("theme-global", "about");
?>
<section class="about__wrap" id="about">
	<h2 class="about__title">ABOUT<span class="about__title--jp">「Atelier-N」について</span></h2>
	<div class="about__text">
		<?= $about; ?>
	</div>
</section>
