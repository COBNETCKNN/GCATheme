<?php get_header(); ?>

<!-- Hero Section -->
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'page-hero-image'); ?>
<section id="aboutUs_hero" >
    <!-- Featured Image -->
    <div class="aboutUs_hero__upperSection h-[45vh] w-full" style="background-image: url('<?php echo $featured_img_url; ?>');">
    </div>
    <!-- Content -->
    <div class="aboutUs_hero__content h-[50vh] sm:h-[30vh] md:h-[40vh] lg:h-[25vh] w-full px-4 lg:px-0">
        <div class="container mx-auto flex justify-center">
            <?php if( have_rows('about_page_content') ): ?>
                <?php while( have_rows('about_page_content') ): the_row(); 
                
                $aboutUsHeading = get_sub_field('about_page_heading');
                $aboutUsDescription = get_sub_field('about_page_description');
                
                ?>

                <div class="aboutUs_content__wrapper bg-darkBlue w-[1000px] min-h-[350px] flex justify-center items-center px-5 lg:px-16 py-10 rounded-3xl -mt-[50%] sm:-mt-[50%] md:-mt-[20%] lg:-mt-[15%]">
                    <div class="">
                        <h1 class="aboutUs_page_heading text-center font-halveticaMedium text-white font-medium mb-5"><?php echo $aboutUsHeading; ?></h1>
                        <div class="aboutUs_page_description text-center text-lg font-halveticaExtraLight tracking-wider leading-6 text-white font-light"><?php echo $aboutUsDescription; ?></div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Our Services Section -->
<section id="ourServices" class="py-14 md:py-0 lg:py-14">
    <div class="container mx-auto">
        <div class="">
            <h2 class="text-black font-inter text-2xl font-medium text-center py-5">Our Core Services</h2>
            <?php
                // The Query
                $args = array(
                    'post_type' => 'service',   // Specify the custom post type
                    'posts_per_page' => -1,      // Number of posts to display
                    'orderby' => 'date',        // Order by date
                    'order' => 'DESC',           // Sort in descending order
                );

                $projectQuery = new WP_Query($args); ?>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 px-4 lg:px-0">
                    <?php 
                    // The Loop
                    if ($projectQuery->have_posts()) :
                        while ($projectQuery->have_posts()) : $projectQuery->the_post(); 
                        
                        $servicesThumbnail = get_field('services_thumbnail');
                        $servicesThumbnailSize = 'post-thumbnails';
                        ?>

                        <div class="aboutUs_serviceCard rounded-2xl h-[200px] lg:w-[250px] xl:w-[290px] relative" style="background-image: url('<?php echo $servicesThumbnail; ?>')">
                            <h3 class="serviceCard_title font-inter text-white font-light absolute bottom-3 left-5"><?php echo the_title(); ?></h3>
                            <a type="button" href="<?php the_permalink(); ?>" target="_blank" class="absolute bottom-4 right-5">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 5.88478e-06C7.17576 2.63923e-06 -5.9644e-07 7.17576 -1.3299e-06 16C-2.06336e-06 24.8242 7.17575 32 16 32C24.8242 32 32 24.8243 32 16C32 7.17577 24.8242 9.13033e-06 16 5.88478e-06ZM16 30.5455C8 30.5455 1.45454 24 1.45454 16C1.45454 8 8 1.45455 16 1.45455C24 1.45455 30.5455 8.00001 30.5455 16C30.5455 24 24 30.5455 16 30.5455Z" fill="white"/>
                                    <path d="M10.967 22.2018L21.3551 11.8138L21.1837 21.859C21.1837 22.2704 21.4922 22.579 21.9036 22.579C22.315 22.579 22.6236 22.2704 22.6236 21.859L22.8293 10.8196C22.8293 9.99675 22.1779 9.34535 21.3551 9.34535L10.2814 9.51677C10.0756 9.51677 9.90423 9.61962 9.80138 9.72248C9.66424 9.85961 9.59567 10.0653 9.56139 10.3053C9.59567 10.6824 9.9728 10.991 10.3499 10.9567L20.3266 10.7853L9.93851 21.1733C9.66424 21.4476 9.66424 21.9276 9.93851 22.2018C10.2128 22.4761 10.6928 22.4761 10.967 22.2018Z" fill="white"/>
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
    </div>
</section>

<!-- Content Section -->
<section id="aboutUS_content" class="py-2 md:py-14 lg:py-24">
    <div class="container mx-auto">
    <?php
        if( have_rows('about_page_content_blocks') ):
            while ( have_rows('about_page_content_blocks') ) : the_row();

                include 'blocks/aboutUsBlocks/' . get_row_layout() . '.php';

            endwhile;
        endif; ?>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section id="aboutUs_faq" class="lg:pt-14 lg:pb-32">
    <div class="container mx-auto">
        <div class="faq_wrapper py-10 bg-darkGray lg:rounded-2xl">
            <h2 class="faq_heading text-black font-halveticaBold text-center mb-14">Frequently Asked Questions</h2>
            <div class="boxaccordion">
                <div class="containerwidth">
                    <div class="wrapper">
                        <div class="grid lg:grid-cols-2 gap-5">
                            <?php if( have_rows('about_page_frequently_asked_questions') ): ?>
                                <?php while( have_rows('about_page_frequently_asked_questions') ): the_row(); ?>
                                    <?php if( have_rows('about_page_faq_repeater') ): ?>
                                        <?php while( have_rows('about_page_faq_repeater') ): the_row(); ?>
                                            <?php
                                                $aboutUsFaqQuestion = get_sub_field('about_page_faq_questions');
                                                $aboutUsFaqAnswer = get_sub_field('about_page_faq_answer');
                                            ?>
                                            <div class="faq-item font-inter">
                                                <button class="toggle bg-white font-halveticaMedium font-medium text-xl lg:text-2xl  rounded-2xl text-start items-center py-5 px-7">
                                                <span class="w-[80%]"><?php echo $aboutUsFaqQuestion; ?></span>
                                                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.4913 18.0087L20.4558 2.06623C20.4558 1.21407 19.7812 0.539443 18.9646 0.57495C18.1124 0.57495 17.4378 1.24958 17.4733 2.06623L17.5088 18.0087L1.53079 18.0087C0.67863 18.0087 0.00400361 18.6833 0.0395104 19.5C0.0395106 20.3522 0.714137 21.0268 1.53079 20.9913L17.4733 21.0268L17.5088 36.9693C17.5088 37.8214 18.1834 38.4961 19.0001 38.4605C19.4261 38.4605 19.8167 38.283 20.0653 38.0345C20.3138 37.7859 20.4913 37.3954 20.4913 36.9693L20.4913 20.9913L36.4693 20.9913C36.8954 20.9913 37.286 20.8137 37.5345 20.5652C37.7831 20.3166 37.9606 19.9261 37.9606 19.5C37.9606 18.6478 37.286 17.9732 36.4693 18.0087L20.4913 18.0087Z" fill="#010101"/>
                                                    </svg>
                                                </button>
                                                <div class="content bg-white p-3 rounded-2xl -mt-6">
                                                    <p class="p-3 font-inter text-lg"><?php echo $aboutUsFaqAnswer; ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>