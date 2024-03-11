<?php get_header(); ?>

<section id="singleBlogPost" class="py-14">
    <div class="container mx-auto">
        <?php 
        $post_id = get_the_ID(); // Get the current post ID
        $post_date = get_the_date('dS F Y', $post_id);
        ?>
        <div class="singleBlogPost_heading__wrapper border-b-2 border-black py-14">
            <div class="grid lg:grid-cols-3 gap-4 px-4 lg:px-0">
                <!-- Title -->
                <div class="col-span-2">
                    <h1 class="text-4xl text-black font-inter font-semibold"><?php the_title(); ?></h1>
                </div>
                <!-- Publishing date -->
                <div class="col-span-1 my-auto flex justify-end">
                    <span class="font-inter font-medium text-black text-lg"><?php echo $post_date; ?></span>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="singleBlogPost_content__wrapper flex justify-center py-10 lg:py-20 font-inter text-black">
            <div class="px-4 lg:px-0 lg:w-[80%]">
                <?php the_content(); ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>