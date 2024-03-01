<?php get_header(); ?>

<!-- Single Service Hero Section -->
<section id="singleServiceHero" class="h-fit w-full">
    <div class="h-[60vh] w-full">
        <div class="singleService_hero__wrapper h-full w-full relative">
            <h1 class="singleService_heading text-center font-inter text-white z-10"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="singleService_thumb__wrapper h-[60vh] w-full">
        <div class="flex justify-center">
            <?php the_post_thumbnail('services-single-thumb');  ?>
        </div>
    </div>
</section>

<!-- Single Service Content Section -->
<section id="singleServiceContent" class="pb-24">
    <div class="container mx-auto">
        <div class="singleServiceContent_wrapper w-[80%] mx-auto">
        <?php if( have_rows('single_service_details') ): ?>
            <?php while( have_rows('single_service_details') ): the_row(); 

                $singleServiceHeading = get_sub_field('single_service_heading');
                $singleServiceDescription = get_sub_field('single_service_description');

                ?>

                <h2 class="servicesContent_heading font-inter font-semibold text-black mb-5"><?php echo $singleServiceHeading; ?></h2>
                <div class="font-inter font-light text-black text-lg leading-5"><?php echo $singleServiceDescription; ?></div>


            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<!-- Connect with A Specialist Banner -->
<section id="specialistBanner" class="bg-red py-14">
    <div class="container mx-auto">
        <div class="specialist_wrapper">
            <h2 class="specialist_heading font-inter text-white text-center mb-5">Connect With A Specialist</h2>
            <?php if( have_rows('single_connect_with_a_specialist') ): ?>
                <?php while( have_rows('single_connect_with_a_specialist') ): the_row(); 

                    $specialistButtonText = get_sub_field('specialist_button_text');

                    ?>

                    <div class="flex justify-center">
                        <a type="button" class="bg-darkBlue py-2 px-5 font-inter font-light text-white text-lg rounded-md" href="<?php echo site_url('/contact')?>"><?php echo $specialistButtonText; ?></a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Benefits of this Service Section -->
<section id="singleBenefits" class="py-14">
    <div class="container mx-auto">
    <h2 class="singleBenefits_heading font-inter text-black font-semibold py-14">Why <?php echo the_title(); ?>?</h2>
    <?php if( have_rows('single_benefits_of_this_service') ): ?>
        <?php while( have_rows('single_benefits_of_this_service') ): the_row(); ?>

        <div class="grid grid-cols-3 gap-4">
            <?php
                if( have_rows('single_benefits_repeater') ):
                    while( have_rows('single_benefits_repeater') ) : the_row();


                    $benefitsHeading = get_sub_field('benefit_repeater_benefit');
                    $benefitsDescription = get_sub_field('benefit_repeater_description');
                    ?>

                    <div class="benefitsCard bg-darkGray px-5 py-8 rounded-2xl min-h-[315px]">
                        <h3 class="font-inter text-black font-semibold text-3xl mb-5"><?php echo $benefitsHeading; ?></h3>
                        <p class="benefitsRepeater_description font-inter font-light text-black text-lg"><?php echo $benefitsDescription; ?></p>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<!-- Contact Section -->
<section id="singleServiceContact" class="py-24 bg-red">
    <div class="container mx-auto">
        <div class="grid grid-cols-7 gap-14">
        <?php if( have_rows('single_service_contact') ): ?>
            <?php while( have_rows('single_service_contact') ): the_row(); ?>
                <?php if( have_rows('single_service_contact_informations') ): ?>
                    <?php while( have_rows('single_service_contact_informations') ): the_row(); 
            
                    $singleServiceContactEmail = get_sub_field('single_service_contact_email');
                    $singleServiceContactPhoneNumber = get_sub_field('single_service_contact_phone_number');
            
                    ?>
                    <!-- Contact Informations -->
                    <div class="col-span-2 my-auto">
                        <h2 class="sectionHeading font-inter text-white font-normal mb-8">Request For Quote</h2>
                        <div class="contactCard bg-white rounded-3xl px-5 py-8">
                            <h3 class="font-inter font-bold text-xl text-black mb-3">Contact us:</h3>
                            <div class="contactCard_email mb-3">
                                <h4 class="font-inter text-red font-medium text-xl mb-1">By Email:</h4>
                                <a class="contactCard_links font-inter text-black font-light text-xl mb-3" href="mailto:<?php echo $singleServiceContactEmail; ?>"><?php echo $singleServiceContactEmail; ?></a>
                            </div>
                            <div class="contactCard_phoneNumber">                        
                                <h4 class="font-inter text-red font-medium text-xl mb-1">By Phone:</h4>
                                <a class="contactCard_links font-inter text-black font-light text-xl" href="tel:<?php echo $singleServiceContactPhoneNumber; ?>"><?php echo $singleServiceContactPhoneNumber; ?></a>  
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                    <!-- Contact Form -->
                    <div class="col-span-5 flex justify-end">
                        <div class="singelService_contact__form font-inter">
                            <?php $singleServiceContactFormShortcode = get_sub_field('single_service_shortcode_for_contact_form');?>
                            <?php echo do_shortcode($singleServiceContactFormShortcode); ?>
                        </div>
                    </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>