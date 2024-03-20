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


<div class="grid grid-cols-12 gap-6 w-full md:w-3/4 lg:w-2/3 mx-auto mb-6 px-4">

<?php
foreach ($blogPosts as $post) {
    setup_postdata($post);
    ?>
    <a href="<?php the_permalink(); ?>" class="col-span-12 md:col-span-6 lg:col-span-4 relative">
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-lg rounded-lg p-4 aspect-square ring-1 hover:scale-105 hover:shadow-2xl duration-200 ring-yellow-800'); ?>>
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium', ['class' => 'rounded-lg w-full h-auto bg-cover bg-center shadow-md object-cover aspect-square absolute inset-0']);
            }
            ?>
            <div class="entry-content rounded-lg absolute p-4 inset-0 bg-gradient-to-b from-black/75 to-transparent">
                <header class="entry-header">
                    <div class="entry-meta text-orange-200 drop-shadow-lg mb-4">
                        <?php echo get_the_date('Y年 n月 j日'); ?>
                    </div>
                    <h4 class="font-bold text-orange-100 drop-shadow text-2xl">
                        <?php the_title(); ?>
                    </h4>
                   
                </header>
            </div>
        </article>
    </a>
    <?php
}
?>
</div>
<?php
get_footer();