<?php get_header(); ?>

<!-- Services Hero -->
<section id="servicesHero" class="py-28">
    <div class="container mx-auto">
        <div class="grid grid-cols-7 gap-4">
            <!-- Heading -->
            <div class="col-span-2">
                <h1 class="servicesPage_heading text-black font-inter font-semibold mt-20"><?php the_title(); ?></h1>
            </div>
            <!-- Featured image -->
            <div class="col-span-5 flex justify-center items-center">
                <div class="servicesFeatured_wrapper">
                    <?php the_post_thumbnail('services-featured'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Content Section -->
<section id="servicesContent" class="py-14">
    <div class="container mx-auto">
        <div class="w-[80%] mx-auto">
        <?php if( have_rows('services_content') ): ?>
            <?php while( have_rows('services_content') ): the_row(); 

                $servicesHeading = get_sub_field('services_content_heading');
                $servicesDescription = get_sub_field('services_content_description');
                ?>

                <h2 class="servicesContent_heading font-inter font-semibold text-black mb-5"><?php echo $servicesHeading; ?></h2>
                <div class="font-inter font-light text-black text-lg leading-5"><?php echo $servicesDescription; ?></div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<!-- What we do Section -->
<section id="servicesWhatWeDo" class="pb-24 pt-36">
    <div class="container mx-auto">
        <h2 class="servicesWhatWeDo_heading text-center font-inter text-black font-semibold">What we do</h2>
        <p class="font-inter font-light text-black text-lg leading-5 text-center">But not limited to.</p>

        <?php
        // The Query
        $args = array(
            'post_type' => 'service',   // Specify the custom post type
            'posts_per_page' => -1,      // Number of posts to display
            'orderby' => 'date',        // Order by date
            'order' => 'DESC',           // Sort in descending order
        );

        $projectQuery = new WP_Query($args); ?>

        <div class="grid grid-cols-2 gap-6 my-14">
            <?php 
            // The Loop
            if ($projectQuery->have_posts()) :
                while ($projectQuery->have_posts()) : $projectQuery->the_post(); 
                
                $servicesThumbnail = get_field('services_thumbnail');
                $servicesThumbnailSize = 'services-type';
                ?>

                <div class="services_servicesCard h-[300px] w-[610px] relative" style="background-image: url('<?php echo $servicesThumbnail; ?>')">
                    <h3 class="serviceCard_title font-inter text-white font-medium absolute top-10 left-7"><?php echo the_title(); ?></h3>
                    <a type="button" href="<?php the_permalink(); ?>" target="_blank" class="absolute bottom-8 right-10 flex items-center">
                    <span class="text-white font-inter text-2xl font-light mr-3">Explore</span>
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 6.43648e-06C7.84848 2.88666e-06 -6.52356e-07 7.84848 -1.45458e-06 17.5C-2.2568e-06 27.1515 7.84848 35 17.5 35C27.1515 35 35 27.1515 35 17.5C35 7.8485 27.1515 9.98629e-06 17.5 6.43648e-06ZM17.5 33.4091C8.75 33.4091 1.59091 26.25 1.59091 17.5C1.59091 8.75 8.75 1.59091 17.5 1.59092C26.25 1.59092 33.4091 8.75001 33.4091 17.5C33.4091 26.25 26.25 33.4091 17.5 33.4091Z" fill="white"/>
                        <path d="M7.88536 18.4971L23.9535 18.4971L16.052 26.1334C15.7338 26.4516 15.7338 26.9289 16.052 27.2471C16.3702 27.5653 16.8475 27.5653 17.1657 27.2471L25.8626 18.8683C26.499 18.2319 26.499 17.2244 25.8626 16.588L17.1657 8.15617C17.0066 7.99708 16.7944 7.94405 16.6354 7.94405C16.4232 7.94405 16.2111 8.05011 15.999 8.2092C15.7338 8.52738 15.7869 9.05768 16.1051 9.32284L23.9535 16.9062L7.88536 16.9062C7.46112 16.9062 7.08991 17.2774 7.08991 17.7016C7.08991 18.1259 7.46112 18.4971 7.88536 18.4971Z" fill="white"/>
                    </svg>
                    </a>
                </div>

            <?php 
                endwhile;
            else :
                // No posts found
                echo 'No projects found';
            endif; 
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>