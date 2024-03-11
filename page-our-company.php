<?php get_header(); ?>

<!-- Hero Section -->
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'page-hero-image'); ?>
<section id="ourCompany_hero" >
    <!-- Featured Image -->
    <div class="ourCompany_hero__upperSection h-[45vh] w-full" style="background-image: url('<?php echo $featured_img_url; ?>');">
    </div>
    <!-- Content -->
    <div class="ourCompany_hero__content h-[50vh] lg:h-[25vh] w-full px-4 lg:px-0">
        <div class="container mx-auto flex justify-center">
            <?php if( have_rows('our_company_content') ): ?>
                <?php while( have_rows('our_company_content') ): the_row(); 
                
                $aboutUsHeading = get_sub_field('our_company_heading');
                $aboutUsDescription = get_sub_field('our_company_description');
                
                ?>

                <div class="ourCompany_content__wrapper bg-darkBlue w-[1000px] min-h-[350px] flex justify-center items-center px-5 lg:px-16 py-10 rounded-3xl -mt-[60%] lg:-mt-[15%]">
                    <div class="">
                        <h1 class="ourCoumpany_page_heading text-center font-halveticaMedium text-white font-medium mb-5"><?php echo $aboutUsHeading; ?></h1>
                        <div class="ourCompany_page_description text-center text-lg font-halveticaExtraLight tracking-wider leading-6 text-white font-light"><?php echo $aboutUsDescription; ?></div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section id="ourCompany_ourMission" class="py-14">
    <div class="container mx-auto">
        <h2 class="text-black font-inter text-2xl font-medium text-center py-5">Our Mission</h2>
        <div class="grid lg:grid-cols-4 gap-5 px-4 lg:px-0">
            <?php if( have_rows('our_mission_repeater') ): ?>
                <?php while( have_rows('our_mission_repeater') ): the_row(); 
                    
                $ourMissionItem = get_sub_field('our_mission_item');
                
                ?>

                <div class="ourMission_card lg:w-[290px] h-[130px] bg-darkBlue flex justify-center items-center px-3 rounded-xl">
                    <h3 class="ourMission_card__itemHeading font-inter text-center text-white font-medium"><?php echo $ourMissionItem; ?></h3>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Content Section -->
<section id="aboutUS_content" class="lg:py-24">
    <div class="container mx-auto px-4 lg:px-0">
    <?php
        if( have_rows('our_company_content_blocks') ):
            while ( have_rows('our_company_content_blocks') ) : the_row();

                include 'blocks/ourCompanyBlocks/' . get_row_layout() . '.php';

            endwhile;
        endif; ?>
    </div>
</section>

<!-- Connect with A Specialist Banner -->
<section id="specialistBanner" class="bg-red py-10 lg:py-14">
    <div class="container mx-auto">
        <div class="specialist_wrapper">
            <h2 class="specialist_heading font-inter text-white text-center mb-5">Connect With A Specialist</h2>
            <?php if( have_rows('ourCompany_connect_with_a_specialist') ): ?>
                <?php while( have_rows('ourCompany_connect_with_a_specialist') ): the_row(); 

                    $specialistButtonText = get_sub_field('specialist_button_text');

                    ?>

                    <div class="flex justify-center">
                        <button class="min-w-[130px] text-md lg:text-lg group relative inline-flex py-2 px-5 items-center justify-center overflow-hidden rounded-md bg-darkBlue font-light font-halveticaLight text-white duration-500"><div class="translate-x-0 opacity-100 transition group-hover:-translate-x-[150%] group-hover:opacity-0"><?php echo $specialistButtonText; ?></div><div class="absolute translate-x-[150%] opacity-0 transition group-hover:translate-x-0 group-hover:opacity-100"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div>
                                <a class="w-full h-full absolute top-0 right-0" href="<?php echo site_url('/contact')?>"></a>
                        </button>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- News Section -->
<section id="news" class="bg-white py-14 lg:py-24">
    <div class="container mx-auto px-4 lg:px-0">
        <h2 class="news_heading font-inter font-semibold">News</h2>
        <?php get_template_part( 'partials/news', 'carousel' ) ?>
    </div>
</section>

<?php get_footer(); ?>