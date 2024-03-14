<?php get_header(); ?>

<section id="singleBlogPost" class="py-14">
    <div class="container mx-auto">
        <div class="singleBlogPost_heading__wrapper border-b-2 border-black py-14 mt-3 lg:mt-0">
            <div class="px-4 lg:px-0">
                <!-- Title -->
                <div class="">
                    <h1 class="text-center lg:text-start text-4xl text-black font-inter font-semibold"><?php the_title(); ?></h1>
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