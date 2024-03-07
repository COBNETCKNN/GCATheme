<?php get_header(); ?>

<!-- Hero Section -->
<section id="homepage_hero" class="w-full h-[90vh]">
    <?php $thumb = get_the_post_thumbnail_url();  ?>
    <div class="hero_wrapper h-full w-full" style="background-image: url('<?php echo $thumb;?>')">
        <div class="container mx-auto my-auto flex justify-start items-center h-full w-full">
            <div class="hero_content__wrapper max-w-[500px]">
                <?php if( have_rows('homepage_hero_content') ): ?>
                    <?php while( have_rows('homepage_hero_content') ): the_row(); 

                        // Get sub field values.
                        $heroHeading = get_sub_field('homepage_hero_heading');
                        $heroSubheading = get_sub_field('homepage_hero_subheading');
                        $heroButtonText = get_sub_field('homepage_hero_button_text');

                        ?>
                        <!-- Hero Content -->
                        <h1 class="heroHeading text-white font-bold font-halveticaBold mb-2"><?php echo $heroHeading; ?></h1>
                        <p class="heroSubheading text-white font-light font-halveticaLight mb-6"><?php echo $heroSubheading; ?></p>
                        <a type="button" class="bg-red py-2 px-5 font-inter font-light text-white text-lg rounded-md" href="<?php echo site_url('/contact')?>"><?php echo $heroButtonText; ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Our Services Section -->
<section id="homepage_ourServices" class="bg-white py-36">
    <div class="container mx-auto">
        <div class="grid grid-cols-7 gap-14">
            <!-- Left side -->
            <div class="col-span-2 max-w-[315px] my-auto">
                <?php if( have_rows('homepage_our_services') ): ?>
                    <?php while( have_rows('homepage_our_services') ): the_row(); 

                    $ourServicesHeading = get_sub_field('homepage_our_services_heading');
                    $ourServicesSubheading = get_sub_field('homepage_our_services_subheading');
                    $ourServicesButttonText = get_sub_field('homepage_our_services_button_text');

                    ?>
                    
                    <h2 class="sectionHeading font-inter text-black font-normal mb-2"><?php echo $ourServicesHeading ?></h2>
                    <p class="sectionSubheading font-inter text-black text-lg font-light mb-6"><?php echo $ourServicesSubheading ?></p>
                    <a type="button" class="bg-red py-2 px-5 font-inter font-light text-white text-lg rounded-md" href="<?php echo site_url('/our-services')?>"><?php echo $ourServicesButttonText; ?></a>


                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- Right side -->
            <div class="col-span-5 mx-auto">
                <?php
                    // The Query
                    $args = array(
                        'post_type' => 'service',   // Specify the custom post type
                        'posts_per_page' => -1,      // Number of posts to display
                        'orderby' => 'date',        // Order by date
                        'order' => 'DESC',           // Sort in descending order
                    );

                    $projectQuery = new WP_Query($args); ?>

                    <div class="grid grid-cols-2 gap-6 max-w-[864px]">
                        <?php 
                        // The Loop
                        if ($projectQuery->have_posts()) :
                            while ($projectQuery->have_posts()) : $projectQuery->the_post(); 
                            
                            $servicesThumbnail = get_field('services_thumbnail');
                            $servicesThumbnailSize = 'post-thumbnails';
                            ?>

                            <div class="servicesCard h-[255px] w-[420px] relative" style="background-image: url('<?php echo $servicesThumbnail; ?>')">
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
    </div>
</section>

<!-- Industry Specializations Section -->
<section id="industrySpecializations" class="bg-white pt-10 pb-24">
    <div class="container mx-auto relative rounded-2xl">
        <div class="industrySpecializationsCard h-[600px] w-full ">
            <div class="grid grid-cols-2 absolute w-full h-full">
                <?php if( have_rows('homepage_industry_specializations') ): ?>
                    <?php while( have_rows('homepage_industry_specializations') ): the_row(); ?>
                        <?php if( have_rows('homepage_industries_specializations_industries') ): ?>
                            <?php while( have_rows('homepage_industries_specializations_industries') ): the_row(); ?>
                            <!-- Industries Repeater -->
                            <div class="flex justify-center items-center">
                                <ul class="bg-red px-10 py-14 w-[412px] rounded-2xl">
                                    <?php
                                    // Repeater Loop
                                    if( have_rows('industries_specialization_repeater') ):
                                        while( have_rows('industries_specialization_repeater') ) : the_row();
                                            $industries = get_sub_field('industries_repeater'); ?>

                                            <li class="industries_listItem text-white font-inter font-light text-2xl py-3"><?php echo $industries; ?></li>

                                        <?php

                                            endwhile;
                                        endif; ?>
                                </ul>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if( have_rows('homepage_industries_specializations_content') ): ?>
                            <?php while( have_rows('homepage_industries_specializations_content') ): the_row(); 
                            
                            $industriesContentHeading = get_sub_field('industries_specialization_content_heading');
                            $industriesContentParagraph = get_sub_field('industries_specialization_content_text_content');
                            
                            ?>
                            <!-- Industries Content -->
                            <div class="flex justify-start items-center ml-10">
                                <div class="w-[480px]">
                                    <h2 class="industries_card__heading font-inter text-white font-semibold mb-6"><?php echo $industriesContentHeading; ?></h2>
                                    <p class="industries_card__paragraph font-inter text-white font-light"><?php echo $industriesContentParagraph; ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="aboutUs" class="bg-red py-64">
    <div class="container mx-auto">
    <?php if( have_rows('homepage_about_us_section') ): ?>
        <?php while( have_rows('homepage_about_us_section') ): the_row(); ?>
            <div class="grid grid-cols-2 gap-4">
                <?php if( have_rows('homepage_about_us_content') ): ?>
                    <?php while( have_rows('homepage_about_us_content') ): the_row(); 
                    
                    $aboutUsPreheading = get_sub_field('about_us_preheading_title');
                    $aboutUsHeading = get_sub_field('about_us_heading');
                    $aboutUsParagraph = get_sub_field('about_us_paragraph');
                    $aboutUsButtonText = get_sub_field('about_us_button_text');
                    
                    ?>
                    <!-- Content -->
                    <div class="flex justify-start items-center">
                        <div class="w-[570px]">
                            <h3 class="aboutUs_preheading text-white font-inter font-normal"><?php echo $aboutUsPreheading; ?></h3>
                            <h2 class="aboutUs_heading text-white font-inter font-semibold mb-5"><?php echo $aboutUsHeading; ?></h2>
                            <p class="aboutUs_paragraph text-white font-inter font-extralight mb-6"><?php echo $aboutUsParagraph; ?></p>
                            <a type="button" class="bg-darkBlue py-2 px-5 font-inter font-light text-white text-lg rounded-md" href="<?php echo site_url('/services')?>"><?php echo $aboutUsButtonText; ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Image -->
                <?php
                
                $aboutUsThumbnail = get_sub_field('homepage_about_us_thumbnail');
                $aboutUsThumbnailSize = 'aboutus-thumbnail';
                ?>
                <div class="aboutUs_thumbnail__wrapper flex justify-end items-center">
                <?php 

                    if( $aboutUsThumbnail ) {
                        echo wp_get_attachment_image( $aboutUsThumbnail, $aboutUsThumbnailSize );
                    }
                ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<!-- Contact Section -->
<section id="homepage_contact" class="bg-white pb-24">
    <div class="h-[100vh] w-full relative">
        <div class="homepage_contact__upperWrapper w-full h-full">
            <div class="container mx-auto relative">
                <div class="absolute text-center mt-20">
                    <?php if( have_rows('homepage_contact_section') ): ?>
                        <?php while( have_rows('homepage_contact_section') ): the_row(); 
                        
                        $contactUsHeading = get_sub_field('contact_section_title');
                        $contactUsParagraph = get_sub_field('contact_section_paragraph');
                        $contactUsButtonText = get_sub_field('contact_section_button_text');
                        $contactUsShortcode = get_sub_field('contact_section_contact_form_shortcode');
                        
                        ?>

                        <div class="max-w-[1240px]">
                            <h2 class="aboutUs_heading font-halveticaBold text-white mb-4"><?php echo $contactUsHeading; ?></h2>
                            <div class="flex justify-center">
                                <p class="aboutUs_paragraph font-halveticaLight text-white max-w-[860px] mb-8"><?php echo $contactUsParagraph; ?></p>
                            </div>
                            <a type="button" class="bg-red py-2 px-5 font-inter font-light text-white text-lg rounded-md" href="<?php echo site_url('/services')?>"><?php echo $contactUsButtonText; ?></a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="flex justify-center h-[60vh] relative">
        <div class="contactPage_contactForm text-white px-16 py-10">
            <h3 class="contactForm_heading text-center text-white font-halveticaBold mb-9">Request For Quote</h3>
            <?php echo do_shortcode($contactUsShortcode); ?>
        </div>
    </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<!-- News Section -->
<section id="news" class="bg-white py-10">
    <div class="container mx-auto">
        <h2 class="news_heading font-inter font-semibold">News</h2>
            <?php get_template_part( 'partials/news', 'carousel' ) ?>
    </div>
</section>

<!-- Frequently Asked Question Section -->
<section id="faq" class="pb-20">
    <div class="container mx-auto">
        <div class="faq_wrapper py-10 bg-darkGray rounded-2xl">
            <h2 class="faq_heading text-black font-halveticaBold text-center mb-14">Frequently Asked Questions</h2>
            <div class="boxaccordion">
                <div class="containerwidth">
                    <div class="wrapper">
                        <div class="grid grid-cols-2 gap-5">
                            <?php if( have_rows('homepage_frequently_asked_questions') ): ?>
                                <?php while( have_rows('homepage_frequently_asked_questions') ): the_row(); ?>
                                    <?php if( have_rows('frequently_asked_questions_repeater') ): ?>
                                        <?php while( have_rows('frequently_asked_questions_repeater') ): the_row(); ?>
                                            <?php
                                                $faqQuestion = get_sub_field('faq_repeater_question');
                                                $faqAnswer = get_sub_field('faq_repeater_answer');
                                            ?>
                                            <div class="faq-item font-inter">
                                                <button class="toggle bg-white font-halveticaMedium font-medium text-2xl rounded-2xl text-start items-center py-5 px-7">
                                                <span class="w-[80%]"><?php echo $faqQuestion; ?></span>
                                                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.4913 18.0087L20.4558 2.06623C20.4558 1.21407 19.7812 0.539443 18.9646 0.57495C18.1124 0.57495 17.4378 1.24958 17.4733 2.06623L17.5088 18.0087L1.53079 18.0087C0.67863 18.0087 0.00400361 18.6833 0.0395104 19.5C0.0395106 20.3522 0.714137 21.0268 1.53079 20.9913L17.4733 21.0268L17.5088 36.9693C17.5088 37.8214 18.1834 38.4961 19.0001 38.4605C19.4261 38.4605 19.8167 38.283 20.0653 38.0345C20.3138 37.7859 20.4913 37.3954 20.4913 36.9693L20.4913 20.9913L36.4693 20.9913C36.8954 20.9913 37.286 20.8137 37.5345 20.5652C37.7831 20.3166 37.9606 19.9261 37.9606 19.5C37.9606 18.6478 37.286 17.9732 36.4693 18.0087L20.4913 18.0087Z" fill="#010101"/>
                                                    </svg>
                                                </button>
                                                <div class="content">
                                                    <p class="p-3 font-inter text-lg"><?php echo $faqAnswer; ?></p>
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