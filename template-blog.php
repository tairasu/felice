<?php
/*
Template Name: Blog Page
*/

get_header();

$blogPosts = get_posts(array(
    'category_name' => 'blog',
    'numberposts' => 9
));

// print_r($blogPosts);

?>


<div class="grid grid-cols-12 gap-6 mx-6 md:mx-12 lg:mx-48 mb-6">

<?php
foreach ($blogPosts as $post) {
    setup_postdata($post);
    ?>
    <a href="<?php the_permalink(); ?>" class="col-span-12 md:col-span-6 lg:col-span-4">
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-lg rounded-lg p-6 aspect-[3/4] ring-1 hover:scale-105 hover:shadow-2xl duration-200 ring-yellow-800'); ?>>
            <header class="entry-header">
                <h4 class="font-bold text-2xl">
                    <?php the_title(); ?>
                </h4>
                <div class="entry-meta text-gray-600 mb-4">
                    <?php echo get_the_date('Y年n月j日'); ?>
                </div>
            </header>
            <div class="entry-content">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium', ['class' => 'rounded w-full h-auto bg-cover bg-center shadow-md object-cover aspect-square']);
                }
                ?>
            </div>
        </article>
    </a>
    <?php
}
?>
</div>
<?php
get_footer();