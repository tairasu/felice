<?php get_header(); ?>

	<div class="container mx-auto">

    <?php do_action('felice_content_start'); ?>

    <main>

    <?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();
