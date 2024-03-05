<div class="content_image_layout grid grid-cols-2 gap-10 py-14">
    <!-- Image -->
    <div class="contentImage_image__wrapper flex justify-start items-center">
        <?php 
            $contentImageImage = get_sub_field('image_content_layout_image');
            $size = 'flexible-block-image';
            if( $contentImageImage ) {
                echo wp_get_attachment_image( $contentImageImage, $size );
            }
        ?>
    </div>
    <!-- Content -->
    <div class="flex justify-end items-center">
        <div class="">
            <?php if( have_rows('image_content_layout_content') ): ?>
                <?php while( have_rows('image_content_layout_content') ): the_row(); 

                    $contentImageSubheading = get_sub_field('image_content_layout_subheading');
                    $contentImageHeading = get_sub_field('image_content_layout_heading');
                    $contentImageDescription = get_sub_field('image_content_layout_description');

                    ?>

                    <span class="text-red font-inter font-bold text-lg"><?php echo $contentImageSubheading; ?></span>
                    <h2 class="contetnImage_heading text-black font-inter font-bold mb-3"><?php echo $contentImageHeading; ?></h2>
                    <div class="text-lg font-inter leading-6 text-black font-light">
                        <?php echo $contentImageDescription; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</div>
