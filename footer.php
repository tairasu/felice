
</main>

<?php do_action( 'felice_content_end' ); ?>

</div>

<?php do_action( 'felice_content_after' ); ?>



<footer id="colophon" class="site-footer bg-gray-50 py-12 z-40 sticky" role="contentinfo">
	<?php do_action( 'felice_footer' ); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

<div class="justify-evenly"></div>

</div>

<?php wp_footer(); ?>

</body>
<script src="/wp-content/themes/felice/resources/js/app.js"></script>
</html>
