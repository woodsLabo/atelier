	<footer class="footer">
		<div class="footer__inner">
			<?php
				wp_nav_menu(
					array (
						"theme_location" => "footer",
						"container" => "nav",
						'container_class' => "footer__nav",
						"menu_class" => "footer__list",
					)
				);
			?>
			<p class="footer__copy">&copy; 2024 Atelier-N/ArsMagnA</p>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
