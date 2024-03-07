<?php get_header(); ?>

<!-- Hero Section -->
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'page-hero-image'); ?>
<section id="ourCompany_hero" >
    <!-- Featured Image -->
    <div class="ourCompany_hero__upperSection h-[45vh] w-full" style="background-image: url('<?php echo $featured_img_url; ?>');">
    </div>
    <!-- Content -->
    <div class="ourCompany_hero__content h-[25vh] w-full">
        <div class="container mx-auto flex justify-center">
            <?php if( have_rows('our_company_content') ): ?>
                <?php while( have_rows('our_company_content') ): the_row(); 
                
                $aboutUsHeading = get_sub_field('our_company_heading');
                $aboutUsDescription = get_sub_field('our_company_description');
                
                ?>

                <div class="ourCompany_content__wrapper bg-darkBlue w-[1000px] min-h-[350px] flex justify-center items-center px-16 py-10 rounded-3xl -mt-[15%]">
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
        <div class="grid grid-cols-4 gap-5">
            <?php if( have_rows('our_mission_repeater') ): ?>
                <?php while( have_rows('our_mission_repeater') ): the_row(); 
                    
                $ourMissionItem = get_sub_field('our_mission_item');
                
                ?>

                <div class="ourMission_card w-[290px] h-[130px] bg-darkBlue flex justify-center items-center px-3 rounded-xl">
                    <h3 class="ourMission_card__itemHeading font-inter text-center text-white font-medium"><?php echo $ourMissionItem; ?></h3>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Content Section -->
<section id="aboutUS_content" class="py-24">
    <div class="container mx-auto">
    <?php
        if( have_rows('our_company_content_blocks') ):
            while ( have_rows('our_company_content_blocks') ) : the_row();

                include 'blocks/ourCompanyBlocks/' . get_row_layout() . '.php';

            endwhile;
        endif; ?>
    </div>
</section>

<!-- Connect with A Specialist Banner -->
<section id="specialistBanner" class="bg-red py-14">
    <div class="container mx-auto">
        <div class="specialist_wrapper">
            <h2 class="specialist_heading font-inter text-white text-center mb-5">Connect With A Specialist</h2>
            <?php if( have_rows('ourCompany_connect_with_a_specialist') ): ?>
                <?php while( have_rows('ourCompany_connect_with_a_specialist') ): the_row(); 

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

<!-- News Section -->
<section id="news" class="bg-white py-24">
    <div class="container mx-auto">
        <h2 class="news_heading font-inter font-semibold">News</h2>
        <?php get_template_part( 'partials/news', 'carousel' ) ?>
    </div>
</section>

<?php get_footer(); ?>