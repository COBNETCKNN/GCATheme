<?php get_header(); ?>

<!-- Hero Contact page Section -->
<section id="contactHero" class="h-[40vh] w-full bg-red">
    <div class="container mx-auto h-full w-full">
        <?php 
            $contactPageHeading = get_field('contact_page_heading');
        ?>
        <div class="flex justify-center items-center h-full w-full">
            <h1 class="contactPage_heading text-white font-inter font-semibold"><?php echo $contactPageHeading; ?></h1>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contactForm" class="py-14">
    <div class="container mx-auto">
        <?php if( have_rows('contact_page_contact_informations') ): ?>
            <?php while( have_rows('contact_page_contact_informations') ): the_row(); ?>
                <div class="grid grid-cols-7 gap-4">
                    <!-- Contact info -->
                    <div class="col-span-2 flex justfiy-start items-center">
                        <div class="">
                            <?php if( have_rows('contact_page_contact_content') ): ?>
                                <?php while( have_rows('contact_page_contact_content') ): the_row(); 
                            
                                $contactFormInsutrcions = get_sub_field('contact_page_form_instructions');
                                $contactFormEmail = get_sub_field('contact_page_email');
                                $contactFormPhoneNumber = get_sub_field('contact_page_phone_number');
                                
                                ?>

                                <div class="contactForm_info__card">
                                    <p class="text-black font-inter font-light text-xl mb-14 leading-6"><?php echo $contactFormInsutrcions; ?></p>
                                    <div class="border border-red rounded-xl p-5">
                                        <h3 class="font-inter font-bold text-xl text-black mb-3">Contact us:</h3>
                                        <div class="contactCard_email mb-3">
                                            <h4 class="font-inter text-red font-medium text-xl mb-1">By Email:</h4>
                                            <a class="contactCard_links font-inter text-black font-light text-xl mb-3" href="mailto:<?php echo $contactFormEmail; ?>"><?php echo $contactFormEmail; ?></a>
                                        </div>
                                        <div class="contactCard_phoneNumber">                        
                                            <h4 class="font-inter text-red font-medium text-xl mb-1">By Phone:</h4>
                                            <a class="contactCard_links font-inter text-black font-light text-xl" href="tel:<?php echo $contactFormPhoneNumber; ?>"><?php echo $contactFormPhoneNumber; ?></a>  
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Contact form -->
                    <div class="col-span-5 flex justify-end items-center">
                        <?php $contactPageFormShortcode = get_sub_field('contact_page_form_shortcode'); ?>
                        <div class="contactPage_contact__form font-inter">
                            <?php echo do_shortcode($contactPageFormShortcode); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!-- Frequently Asked Question Section -->
<section id="faq" class="py-20">
    <div class="container mx-auto">
        <div class="faq_wrapper py-10 bg-darkGray rounded-2xl">
            <h2 class="faq_heading text-black font-halveticaBold text-center mb-14">Frequently Asked Questions</h2>
            <div class="boxaccordion">
                <div class="containerwidth">
                    <div class="wrapper">
                        <div class="grid grid-cols-2 gap-5">
                            <?php if( have_rows('contact_page_frequently_asked_questions') ): ?>
                                <?php while( have_rows('contact_page_frequently_asked_questions') ): the_row(); ?>
                                    <?php if( have_rows('contact_page_faq_repeater') ): ?>
                                        <?php while( have_rows('contact_page_faq_repeater') ): the_row(); ?>
                                            <?php
                                                $faqQuestion = get_sub_field('contact_page_faq_question');
                                                $faqAnswer = get_sub_field('contact_page_faq_answer');
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