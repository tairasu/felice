<?php get_header(); ?>

<main role="main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="p-4 bg-white/25 shadow-lg rounded-lg ring-1 ring-yellow-800 w-fit mx-auto mb-8 mt-6" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title font-bold">', '</h1>'); ?>
            </header>
			
			<div class="flex items-start">
    			<div class="text-yellow-900 bg-orange-50 rounded-full ring-1 p-2 ring-yellow-800 mb-8">
        			<?php echo get_the_date('Y年 n月 j日'); ?>
    			</div>
			</div>

            <div class="entry-content text-justify">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>