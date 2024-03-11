<div class="content_image_layout grid lg:grid-cols-2 gap-10 lg:py-14 pb-14 lg:pb-0">
    <!-- Content -->
    <div class="flex justify-start items-center px-4 lg:px-0">
        <div class="">
            <?php if( have_rows('content_image_layout_group') ): ?>
                <?php while( have_rows('content_image_layout_group') ): the_row(); 

                    $contentImageSubheading = get_sub_field('content_image_layout_subheading');
                    $contentImageHeading = get_sub_field('content_image_layout_heading');
                    $contentImageDescription = get_sub_field('content_image_layout_description');

                    ?>

                    <span class="text-red font-inter font-bold text-md lg:text-lg"><?php echo $contentImageSubheading; ?></span>
                    <h2 class="contetnImage_heading text-black font-inter font-bold mb-3"><?php echo $contentImageHeading; ?></h2>
                    <div class="text-lg font-inter leading-6 text-black font-light">
                        <?php echo $contentImageDescription; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Image -->
    <div class="contentImage_image__wrapper flex justify-center lg:justify-end items-center px-4 lg:px-0">
        <?php 
            $contentImageImage = get_sub_field('content_image_layout_image');
            $size = 'flexible-block-image';
            if( $contentImageImage ) {
                echo wp_get_attachment_image( $contentImageImage, $size );
            }
        ?>
    </div>
</div>
