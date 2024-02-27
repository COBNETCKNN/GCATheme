<?php wp_footer(); ?>
</body>
</html>

<footer class="bg-darkBlue py-10">
<div class="container mx-auto">
    <!-- Logo and Form -->
    <div class="footer_upperContent pb-10 border-b border-white">
        <div class="grid grid-cols-2 gap-4">
            <!-- Logo left section -->
            <div class="">
                <a href="<?php echo site_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo-size' );
                        if ( has_custom_logo() ) {
                            echo '<img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    ?>
                </a>
            </div>
            <!-- Newsletter section -->
            <div class="">
                <h3 class="font-inter text-white font-light text-2xl ml-3">Subscribe to Our Newsletter</h3>
                <form action="#" class="popup-form">
                    <input type="email" class="popup-form-input" placeholder="" required>
                    <button class="popup-form-submit">Submit</button>
                </form>
            </div>

        </div>
    </div>
    <!-- Bottom menu -->
    <div class="text-white font-inter text-lg h-[250px] flex items-end">
        <?php 
            wp_nav_menu(
                array(
                'theme_location' => 'footer_menu',
                'container_class' => 'footer-menu',
                )
            );
        ?>
    </div>
</div>
</footer>