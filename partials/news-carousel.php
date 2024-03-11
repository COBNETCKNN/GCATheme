<div id="specificDiv" class="ourProjects_carousel py-5 lg:my-14">
    <?php
        // The Query
        $args = array(
            'post_type' => 'post',   // Specify the custom post type
            'posts_per_page' => -1,      // Number of posts to display
            'orderby' => 'date',        // Order by date
            'order' => 'DESC',           // Sort in descending order
        );

        $postQuery = new WP_Query($args); ?>

        <div class="owl-carousel owl-theme">

        <?php 
        // The Loop
        if ($postQuery->have_posts()) :
            while ($postQuery->have_posts()) : $postQuery->the_post(); ?>
                
        <a class="hover" href="<?php the_permalink(); ?>">
            <div class="projectsCard_wrapper relative">
                <?php the_post_thumbnail('services-thumbnail') ?>
                <div class="min-h-[85px] flex justify-center">
                    <h3 class="text-center lg:text-left font-inter text-black text-xl font-medium mt-2"><?php the_title(); ?></h3>
                </div>
                <div class="hidden lg:block font-inter text-black font-light text-md mt-2">
                    <?php echo wp_trim_words(get_the_content(), 10);  ?>
                </div>
            </div>
        </a>

        <?php 
            endwhile;
        else :
            // No posts found
            echo 'No projects found';
        endif; ?>

        </div>
        <!-- Cursor blob element -->
        <div class="cursor-blob"></div>
        <?php 
        // Restore original post data
        wp_reset_postdata();
    ?>
</div>