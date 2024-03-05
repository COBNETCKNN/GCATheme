<?php get_header(); ?>

<!-- Industries Hero -->
<section id="industriesHero" class="py-28">
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

<!-- Industries Content Section -->
<?php if( have_rows('industries_content') ): ?>
    <?php while( have_rows('industries_content') ): the_row(); ?>
<section id="industriesHero" class="py-14">
    <div class="container mx-auto">
        <div class="w-[80%] mx-auto">
            <?php if( have_rows('services_hero_content') ): ?>
                <?php while( have_rows('services_hero_content') ): the_row(); 

                    $industriesHeading = get_sub_field('services_heading');
                    $industriesDescription = get_sub_field('services_description');
                    ?>

                    <h2 class="servicesContent_heading font-inter font-semibold text-black mb-5"><?php echo $industriesHeading; ?></h2>
                    <div class="font-inter font-light text-black text-lg leading-5"><?php echo $industriesDescription; ?></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Trusted Industries Section -->
<section id="trustedIndustries" class="pb-14 pt-36">
    <div class="container mx-auto">
        <h2 class="servicesWhatWeDo_heading text-center font-inter text-black font-semibold">Trusted Across Industries</h2>
        <p class="font-inter font-light text-black text-lg leading-5 text-center">Including</p>
        <div class="grid grid-cols-3 gap-4 py-14">
        <?php if( have_rows('industries_trusted_industries') ): ?>
            <?php while( have_rows('industries_trusted_industries') ): the_row(); 

                $truestedIndustry = get_sub_field('industry_name');
                ?>
                <div class="truestedIndustriesWrapper bg-red rounded-2xl h-[260px] w-[400px] p-10">
                    <h3 class="truestedIndustries_title font-inter font-semibold text-white"><?php echo $truestedIndustry; ?></h3>
                </div>
                
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<!-- Industries Frequently Asked Questions Section -->
<section id="industriesFAQ" class="py-14">
    <div class="container mx-auto">
        <div class="faq_wrapper py-10 bg-darkGray rounded-2xl">
            <h2 class="faq_heading text-black font-halveticaBold text-center mb-14">Frequently Asked Questions</h2>
            <div class="boxaccordion">
                <div class="containerwidth">
                    <div class="wrapper">
                        <div class="grid grid-cols-2 gap-5">
                        <?php if( have_rows('industries_frequesntly_asked_questions') ): ?>
                            <?php while( have_rows('industries_frequesntly_asked_questions') ): the_row(); 

                            $industriesFAQQuestion = get_sub_field('industries_faq_question');
                            $industriesFAQAnswer = get_sub_field('industries_faq_answer');
                            ?>
                            <div class="faq-item font-inter">
                                <button class="toggle bg-white font-halveticaMedium font-medium text-2xl rounded-2xl text-start items-center py-5 px-7">
                                <span class="w-[80%]"><?php echo $industriesFAQQuestion; ?></span>
                                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.4913 18.0087L20.4558 2.06623C20.4558 1.21407 19.7812 0.539443 18.9646 0.57495C18.1124 0.57495 17.4378 1.24958 17.4733 2.06623L17.5088 18.0087L1.53079 18.0087C0.67863 18.0087 0.00400361 18.6833 0.0395104 19.5C0.0395106 20.3522 0.714137 21.0268 1.53079 20.9913L17.4733 21.0268L17.5088 36.9693C17.5088 37.8214 18.1834 38.4961 19.0001 38.4605C19.4261 38.4605 19.8167 38.283 20.0653 38.0345C20.3138 37.7859 20.4913 37.3954 20.4913 36.9693L20.4913 20.9913L36.4693 20.9913C36.8954 20.9913 37.286 20.8137 37.5345 20.5652C37.7831 20.3166 37.9606 19.9261 37.9606 19.5C37.9606 18.6478 37.286 17.9732 36.4693 18.0087L20.4913 18.0087Z" fill="#010101"/>
                                    </svg>
                                </button>
                                <div class="content">
                                    <p class="p-3 font-inter text-lg"><?php echo $industriesFAQAnswer; ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> 