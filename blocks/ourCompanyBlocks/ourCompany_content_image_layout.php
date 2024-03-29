<div class="content_image_layout grid lg:grid-cols-2 gap-10 lg:py-14 pb-14 lg:pb-0">
    <!-- Content -->
    <div class="flex justify-start items-center">
        <div class="">
            <?php if( have_rows('ourCompany_content_image_layout_group') ): ?>
                <?php while( have_rows('ourCompany_content_image_layout_group') ): the_row(); 

                    $ourCompanyContentImageSubheading = get_sub_field('ourCompany_content_image_layout_subheading');
                    $ourCompanyContentImageHeading = get_sub_field('ourCompany_content_image_layout_heading');
                    $ourCompanyContentImageDescription = get_sub_field('ourCompany_content_image_layout_description');

                    ?>

                    <span class="text-red font-inter font-bold text-lg"><?php echo $ourCompanyContentImageSubheading; ?></span>
                    <h2 class="contetnImage_heading text-black font-inter font-bold mb-3"><?php echo $ourCompanyContentImageHeading; ?></h2>
                    <div class="text-lg font-inter leading-6 text-black font-light">
                        <?php echo $ourCompanyContentImageDescription; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Image -->
    <div class="contentImage_image__wrapper flex justify-center lg:justify-end items-center">
        <?php 
            $ourCompanyContentImageImage = get_sub_field('ourCompany_content_image_layout_image');
            $size = 'flexible-block-image';
            if( $ourCompanyContentImageImage ) {
                echo wp_get_attachment_image( $ourCompanyContentImageImage, $size );
            }
        ?>
    </div>
</div>
